
document.addEventListener('DOMContentLoaded', () => {

  const updateBtn = document.querySelector(".update-btn");

  updateBtn.addEventListener('click', () => {
    const postNo = document.getElementById('postNo').value;
    const postTitle = document.getElementById('postTitle').value;
    const postWriter = document.getElementById('postWriter').value;
    const postContent = document.getElementById('postContent').value;

    const data = {
      postNo: postNo,
      title: postTitle,
      writer: postWriter,
      content: postContent
    };

    fetch('/post/updatePost.php', {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert('게시물이 성공적으로 수정되었습니다.');
        window.location.href = `/post/postDetail.php?postNo=${postNo}`;
      } else {
        alert('게시물 수정에 실패했습니다.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  });

  //URL에서 postNo 추출
   const queryString = window.location.search;
   const urlParams = new URLSearchParams(queryString);
   const postNo = urlParams.get('postNo');
 
  if (postNo) {
    // 게시물 정보 요청
  fetch(`/post/getPost.php?postNo=${postNo}`)
    .then(response => response.json()) // 응답을 JSON으로 변환
    .then(data => {
      if (data.success) {
        // 폼 필드 채우기
        document.getElementById('postNo').value = data.post.postNo;
        document.getElementById('postTitle').value = data.post.postTitle;
        document.getElementById('postWriter').value = data.post.postWriter;
        document.getElementById('postContent').value = data.post.postContent;
      } else {
        alert('게시물 정보를 가져오는 데 실패했습니다.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
    return;
  }

  
});

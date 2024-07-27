document.addEventListener('DOMContentLoaded', () => {
  const writeBtn = document.querySelector(".write-btn");
  writeBtn.addEventListener('click', () => { 

    const postTitle = document.querySelector(".post-title");
    const postWriter = document.querySelector(".post-writer");
    const postContent = document.querySelector(".post-content");

    if (postTitle.value == '') {
      alert('제목을 입력해 주세요!');
      postTitle.focus();
      return;
    } else if (postWriter.value == '') {
      alert('작성자 이름을 입력해 주세요!');
      postWriter.focus();
      return;
    } else if (postContent.value == '') {
      alert('내용을 입력해 주세요!');
      postContent.focus();
      return;
    }

    const data = {
      title: postTitle.value,
      writer: postWriter.value,
      content: postContent.value
    };

    fetch('/post/createPost.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    .then(response => response.json() ) //response.json()
    .then(data => {
      if (data.success) {
        alert('게시물이 성공적으로 작성되었습니다.');
        const postNo = data.postNo;
        const url = '/post/postDetail.php?postNo='+postNo;
        window.location.href = url;
      } else {
        alert('게시물 작성에 실패했습니다.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  });
});

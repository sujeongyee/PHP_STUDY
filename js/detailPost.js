document.addEventListener('DOMContentLoaded', () => {
  const listBtn = document.getElementById('list-btn');
  const updateBtn = document.getElementById('update-btn');
  const deleteBtn = document.getElementById('delete-btn');

  if(updateBtn && deleteBtn && listBtn) {
    listBtn.addEventListener('click', ()=> {
      window.location.href = '/post/postList.php';
    });

    updateBtn.addEventListener('click', () => {
      window.location.href = `/post/updatePost.html?postNo=${postId}`;
    });
  
    deleteBtn.addEventListener('click', () => {
      if (confirm('정말 삭제하시겠습니까?')) {
        fetch('/post/deletePost.php', {
          method: 'DELETE',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ postNo: postId })
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert('게시물이 삭제되었습니다.');
            window.location.href = '/post/postList.php';
          } else {
            alert('게시물 삭제에 실패했습니다.');
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
      }
    });
  }

  
});

function nl2br(str) {
  return str.replace(/\n/g, '<br>');
}

function clickPost(postNo) {
  const url = 'postDetail.php?postNo='+postNo;
  window.location.href = url;
}
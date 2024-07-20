document.addEventListener('DOMContentLoaded',()=>{
  const id = document.getElementById("id");
  const pw = document.getElementById("pw");
  const btn = document.getElementById("login_btn");
  btn.addEventListener('click',(e)=>{
    e.preventDefault();

    if(id.value == '') {
      alert('아이디를 입력해주세요');
      id.focus();
      return false;
    }

    if(pw.value == '') {
      alert('비번을 입력해주세요');
      pw.focus();
      return false;
    }

    document.login_form.submit();

  })

}) 
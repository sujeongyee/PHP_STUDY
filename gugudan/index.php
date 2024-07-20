<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>폼 입력을 통한 구구단 출력</title>
</head>
<body>
  <form method="post" name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="">출력하고자 하는 단을 입력 바랍니다.</label><br>
    <input type="text" name="dan" id="dan" autocomplete="off">
    <button id="submit_btn">구구단 출력</button>
  </form>

  <?php 
  
  if(isset($_POST['dan']) and $_POST['dan']!='') {
    if(! is_numeric($_POST['dan'])) {
      echo "숫자 입력해주세요";
      return ;
    }
    echo "구구단 출력 슝~~.<br>";
    $n = $_POST['dan'];
    for($i = 1 ; $i < 10 ; $i++){
      echo $n.' X '.$i.' = '.($i*$n)."<br>";
    }
  }
  
  ?>

  <script>
    const submit_btn = document.querySelector("#submit_btn");
    submit_btn.addEventListener('click',(e)=>{
      e.preventDefault();
      const dan = document.querySelector("#dan");
      if(dan.value == '') {
        alert('입력값이 비었습니다.');
        dan.focus();
        return;
      }

      if(isNaN(dan.value)){
        alert('숫자를 입력해 주세요.');
        dan.focus();
        return;
      }
      document.form1.submit();
    })

  </script>
</body>
</html>
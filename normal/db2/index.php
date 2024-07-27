<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSV 파일 업로드</title>
</head>
<body>
  <form action="csv_upload.php" name="uform" enctype="multipart/form-data" method="post">
    <label for="">CSV 파일을 업로드 해주세요.</label><br>
    <input type="file" name="csv" id="csv">
    <button id="btn">확인</button>
  </form>

  <script>
    const btn = document.querySelector("#btn");

    btn.addEventListener('click',(e)=>{
      e.preventDefault();
      const csv = document.getElementById("csv");
      if(csv.value == "") {
        alert('파일을 선택해 주세요.');
        return false;
      }
      document.uform.submit();
    })
  </script>
  
</body>
</html>
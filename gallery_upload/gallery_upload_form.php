<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>이미지 업로드</title>
</head>
<script src="upload.js"></script>
<body>

<?php include "menu.html"; ?>

<form action="gallery_upload_form_ok.php" method="post" enctype="multipart/form-data" name="upload_form">

   이미지 업로드 : <input type="file" name="photo">
   <button id="upload_btn">업로드 확인</button>

</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>갤러리</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'menu.html'; ?> 
  <div class="wrapper">
    <?php 
      $d = dir("./uploadImg");
      while($file = $d->read()){
        if($file == '.' or $file == '..'){
          continue;
        }
        $arr = explode(".",$file);
        $ext = end($arr);
        if($ext == 'jpg' or $ext == 'JPG' or $ext == 'png' or $ext == 'PNG') {
            // echo '
            // <div class="img_div">
            //   <img src = "uploadImg/'.$file.'" width="100px">
            // </div>
            // ';
            // echo "
            // <div class='img_div'>
            //   <img src= 'uploadImg/{$file}' width='100px'
            // </div>
            // "
            ?> <div><img src="uploadImg/<?php echo $file ?>" width="100px"></div> <?php
        }
      }
    ?>

  </div>
  
</body>
</html>
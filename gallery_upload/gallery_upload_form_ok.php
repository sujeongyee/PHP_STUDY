<?php 

include 'menu.html';
$file_name = $_FILES['photo']['name'];
if($file_name == ''){
   echo "
   <script>
      alert('파일을 선택하지 않으셨습니다.');
      self.location.href = './gallery_upload_form.php';
   </script>  
   ";
   exit;
}

$file_name = $_FILES['photo']['name'];
$arr = explode('.',$file_name);
$ext = end($arr);
echo $ext;

//$new_file_name = 

if($ext!=='jpg'&& $ext!=='jpeg'&& $ext!=='png'){
   echo '사진만 첨부할 수 있습니다.';
}else{
   copy($_FILES['photo']['tmp_name'],'./uploadImg/'.$_FILES['photo']['name']);
   echo "
   <script>
      alert('정상적으로 업로드 됐습니다.');
      self.location.href = './gallery_list.php';
   </script>  
   ";
   exit;
}

// 리눅스라면 파일 퍼미션 권한 부여 필요







?>
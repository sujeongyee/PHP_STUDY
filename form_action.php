<?php

print_r($_POST);


?>

이름 : <?php echo $_POST['subject']; ?> <br>
암호 : <?php echo $_POST['password']; ?> <br>
내용 : <?php echo nl2br($_POST['content']); ?> <br>

<!-- nl2br 개행 들어가 있으면 그걸 표시해주는 -->
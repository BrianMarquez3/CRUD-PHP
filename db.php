<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_mysql_crud'
)or die(mysqli_error($mysqli));


//) or die(mysqli_erro($mysqli));
//if (isset($conn)){
//    echo 'DB está conectada';
//}

?>
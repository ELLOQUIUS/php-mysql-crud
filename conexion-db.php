<?php
  session_start();

  $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'miguelgordillo'
  ) or mysqli_error($mysqli);
?>
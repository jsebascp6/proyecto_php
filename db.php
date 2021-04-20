<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'proyecto_php'
) or die(mysqli_erro($mysqli));

?>
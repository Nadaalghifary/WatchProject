<?php
include_once 'session.php';

$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$query = "insert into Messages(name,email,msg)values('$name','$email','$message')";
$result = $db->insert($query);
if ($result) {
  echo "success";
  exit();
}
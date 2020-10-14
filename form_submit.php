<?php
require_once "connection.php";

//insert into database
if(!empty($_POST)) {
  $name = $_POST['name'];
  $city = $_POST['city'];
  $occupation = $_POST['occupation']; 
  mysqli_query($conn, "insert into users (name, email, message) values ('$name', '$city', '$occupation')"); 
}
?>
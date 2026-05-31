<?php

require_once('db_connect.php');

$id = $_POST['row_id'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];

$sql = "UPDATE customers SET name = '$name', contact = '$contact', date_of_birth = '$date_of_birth', gender = '$gender' WHERE id = $id";

$query = mysqli_query($conn, $sql);

if($query) {
  header("Location: customer-create-list.php");
}
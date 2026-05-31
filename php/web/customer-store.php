<?php

require_once('db_connect.php');

$name = $_POST['name'];
$date_of_birth = $_POST['date_of_birth'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];

$sql = "INSERT INTO customers (name, date_of_birth, contact, gender) VALUES ('$name', '$date_of_birth', '$contact', '$gender')";

$query = mysqli_query($conn, $sql);

if($query) {
  header("Location: customer-create-list.php");
}
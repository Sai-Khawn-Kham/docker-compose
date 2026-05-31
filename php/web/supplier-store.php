<?php

require_once('db_connect.php');

$name = $_POST['name'];
$contact = $_POST['contact'];

$sql = "INSERT INTO suppliers (name, contact) VALUES ('$name', '$contact')";

$query = mysqli_query($conn, $sql);

if($query) {
  header("Location: supplier-create-list.php");
}
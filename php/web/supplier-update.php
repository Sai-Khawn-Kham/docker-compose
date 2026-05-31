<?php

require_once('db_connect.php');

$id = $_POST['row_id'];
$name = $_POST['name'];
$contact = $_POST['contact'];

$sql = "UPDATE suppliers SET name = '$name', contact = '$contact' WHERE id = $id";

$query = mysqli_query($conn, $sql);

if($query) {
  header("Location: supplier-create-list.php");
}
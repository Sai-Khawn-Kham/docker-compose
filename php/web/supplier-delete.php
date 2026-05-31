<?php

require_once('db_connect.php');

$id = $_GET['row_id'];

$sql = "DELETE FROM suppliers WHERE id = $id";

$query = mysqli_query($conn, $sql);

if($query) {
  header("Location: supplier-create-list.php");
}
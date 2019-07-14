
<?php

include './connection.php';

$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM products WHERE pid=$id");

header('location: ../pages/allproduct.php');

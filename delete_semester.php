<?php

$id = $_GET['id'];
//connect to database
$conn = mysqli_connect('localhost','root','','result');
//query to delete record from tbl_category with id
$sql = "delete from semester where id = $id";

//execute query
mysqli_query($conn, $sql);

//redirect to listing page
header('location:admin_semester.php');
?>
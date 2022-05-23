<?php
$servername = "localhost";
$username = "root";
$password = "";
//Createb connection
$conn = mysqli_connect($servername,$username,$password);
//check connection
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
//Create database
$sql = "CREATE DATABASE result";
if(mysqli_query($conn,$sql))
{
    echo "Database created succesfully";

}
else 
{
    echo "Error creating database".mysqli_error($conn);
}
mysqli_close($conn);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";
//Createb connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
//Create table
// $sql = "CREATE TABLE admin_login
// (
//   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   Admin_Name varchar(100) NOT NULL,
//   Admin_password varchar(100) NOT NULL
  

// )";
// $sql = "CREATE TABLE semester
// (
//   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   Semester_Name varchar(100) NOT NULL,
//   Semester_created_on datetime NOT NULL

// )";
// $sql = "CREATE TABLE exam
// (
//   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   Exam_Name varchar(100) NOT NULL,
//   Exam_Date datetime NOT NULL,
//   Semester_id int(11) NOT NULL


// )";
// $sql = "CREATE TABLE `subject`
// (
//   id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   Subject_Code datetime NOT NULL,
//   Subject_Name varchar(100) NOT NULL,
//   Credit_hours int(11) NOT NULL,
//   ClassName int(11) NOT NULL,
//   Semester_created_on datetime NOT NULL
  


// )";

//   $sql = "CREATE TABLE result (
//     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   Semester_id int(11) NOT NULL,
//   student_id int(11) NOT NULL,
//   exam_id int(11) NOT NULL,
//   result_percentage decimal(5,2) NOT NULL,
  
// )";
$sql = "CREATE TABLE student (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
    Student_Name varchar(100) NOT NULL,
    SymbolNo varchar(100) NOT NULL,
    Student_Email varchar(100) NOT NULL,
    Student_Gender varchar(100) NOT NULL,
    Student_dob date NOT NULL,
    ClassName varchar(100) NOT NULL
  
)";

if(mysqli_query($conn,$sql))
{
    echo "Table admin_login created succesfully";

}
else 
{
    echo "Error creating table".mysqli_error($conn);
}
mysqli_close($conn);

// $sql = "INSERT INTO MyGuests(firstname,lastname,email)
// VALUES ('Bipin','Chaudhary','Bipin@gmail.com'),
// ('Saujanya','Chand','saujanya@gmail.com'),
// ('Sulav','Dahal','sulav@gmail.com'),
// ('Niraj','Uprety','niraj@gmail.com')";


// if(mysqli_query($conn,$sql))
//  {
//      echo "New record created succesfully";

//  }
//  else 
//  {
//     echo "Error:".$sql."<br>".mysqli_error($conn);
//  }
//  mysqli_close($conn);
 ?>
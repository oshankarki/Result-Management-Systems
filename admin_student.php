<?php
//Createb connection
$conn = mysqli_connect('localhost','root','','result');
//check connection
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="style1.css">
</head>
<style>
   
        .error{
            color:red;
        }
    
</style>

<body>
<?php
include "sidenav.php";

?>
<div class="center">
<div class="container">
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Student Name" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sn">Symbol No.</label>
      </div>
      <div class="col-75">
        <input type="text" id="sn" name="sn" placeholder="Symbol No." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="class">Semester</label>
      </div>
      <div class="col-75">
      <?php
                    
                    
                    $class_result=mysqli_query($conn,"SELECT Semester_name FROM semester");
                        echo '<select name="className" required>';
                        echo '<option selected disabled>Select Class</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        $display=$row['Semester_name'];
                        echo '<option value="'.$display.'">'.$display.'</option>';
                    }
                    echo'</select>'
                ?>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder= "Email" required>
        <span class="error"><?php echo  $errEmail;?></span><br>

      </div>
      
    </div>
    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
       <input type="radio" id="gender" name="gender" value="Male"/> Male    
       <input type="radio" id="gender" name="gender" value="Female"/> Female   
       <input type="radio" id="gender" name="gender" value="Others"/> Others    

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="dob">Date of Birth</label>
      </div>
      <div class="col-75">
      <input type="date" id="dob" name="dob"required >
        
      </div>
    </div>
    
    
    
    
   
    
</br>
    
    <div class="row">
        <input type="submit" value="Add" name="submit">
        

        
     
    </div>
  </form>
  
</div>
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>


    <?php


$errfname= $errsn= $erremail= $errgender= $errdob="";
    if(isset($_POST['submit'])){
      $fname=$_POST['fname'];
      $sn=$_POST['sn'];
      $email=$_POST['email'];
      $gender=$_POST['gender'];
      $dob=$_POST['dob'];
      $class=$_POST['className'];
      
    
        if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){
            $errEmail= "Email should be in proper format";
           
        }
    

        
        




$sql = "INSERT INTO student(Student_Name,SymbolNo,Student_Email,Student_Gender,Student_dob,ClassName)
VALUES ('$fname','$sn','$email','$gender','$dob','$class')";


if(mysqli_query($conn,$sql))
 {
 

 }
 else 
 {
    echo "Error:".$sql."<br>".mysqli_error($conn);
 }
 mysqli_close($conn);
 


}
else if(isset($_POST['manage'])){
  header("location:manage_semester.php");
}


?>

<?php
include "manage_student.php";

?>

    

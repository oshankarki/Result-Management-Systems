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

<body>
<?php
include "sidenav.php";

?>
<div class="center">
<div class="container">
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<div class="row">
      <div class="col-25">
        <label for="class">Semester</label>
      </div>
      <div class="col-75">
      <?php
                    
                    
                    $class_result=mysqli_query($conn,"SELECT Semester_name,id FROM semester");
                        echo '<select name="className"> required';
                        echo '<option selected disabled>Select Class</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        $display=$row['Semester_name'];
                        $s_id=$row['id'];

                        echo '<option value="'.$row['Semester_name'].'">'.$display.'</option>';
                    }
                    echo'</select>'
                ?>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="scode">Subject Code</label>
      </div>
      <div class="col-75">
        <input type="text" id="scode" name="scode" placeholder="Subject code" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sname">Subject Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="snama" name="sname" placeholder="Subject Name" required>
        
      </div>
    </div>
    

    <div class="row">
      <div class="col-25">
        <label for="ch">Credit Hrs</label>
      </div>
      <div class="col-75">
        <input type="text" id="ch" name="ch" placeholder= "Credit Hours" required>
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



    if(isset($_POST['submit'])){
      $className=$_POST['className'];
      $sname=$_POST['sname'];
      $scode=$_POST['scode'];
      $ch=$_POST['ch'];
      
        if ( !preg_match ("/^[a-zA-Z\s]+$/",$sname)) {
         echo '<script>alert("Subject contains only letters!")</script>';
         return false;
       } 
     

        
        




$sql = "INSERT INTO `subject`(Subject_Code,Subject_Name,Credit_hours,ClassName)
VALUES ('$scode','$sname','$ch','$className')";


if(mysqli_query($conn,$sql))
 {
 

 }
 else 
 {
    echo "Error:".$sql."<br>".mysqli_error($conn);
 }
 mysqli_close($conn);
 


}



?>

<?php
include "manage_subject.php";

?>

    

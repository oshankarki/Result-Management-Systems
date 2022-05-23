
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
    <link rel="stylesheet" href="all.css">
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
        <label for="sname">Semester</label>
      </div>
      <div class="col-75">
        <input type="text" id="sname" name="sname" placeholder="Semester" required>
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


    $errsname="";
    if(isset($_POST['submit'])){
        $sname=$_POST['sname'];
        if ( !preg_match ("/^[a-zA-Z\s]+$/",$sname)) {
            echo '<script>alert("Semester contains only letters!")</script>';
            return false;
          } 
        
    //Createb connection
$conn = mysqli_connect('localhost','root','','result');
//check connection
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}


$sql = "INSERT INTO semester(Semester_Name)
VALUES ('$sname')";


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
include "manage_semester.php";

?>
    

<?php
$id = $_REQUEST['id'];
$conn = mysqli_connect('localhost','root','','result');

if(isset($_POST['submit'])){
	$id1=$_POST['id'];

  $fname=$_POST['fname'];
  $sn=$_POST['sn'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $class=$_POST['className'];
		
		$sql = "UPDATE student set Student_Name = '$fname' , SymbolNo = '$sn', Student_Email='$email', Student_dob='$dob',Student_Gender='$gender', ClassName='$class' where id = '$id1'";
		mysqli_query($conn, $sql);
		
		if (mysqli_affected_rows($conn) == 1) {
	 	
			header('location:admin_student.php');
	 }
	 else{
	 	echo "Data update failed".mysqli_error($conn);
	 }
	}
	$sql1 = "select * from student where id = $id";
	// echo $sql1;
	$res = mysqli_query($conn, $sql1);
	$data = mysqli_fetch_assoc($res);
	//print_r($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Into Form</title>
	<link rel="stylesheet" href="all.css">
	<style type="text/css">
		
	</style>
</head>
<body>
<div class="center">
<div class="container">
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<input type="hidden" name="id" value="<?php echo $data['id'] ?>"> 
    <div class="row">
      <div class="col-25">
        <label for="fname">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Student Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sn">Symbol No.</label>
      </div>
      <div class="col-75">
        <input type="text" id="sn" name="sn" placeholder="Symbol No.">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="class">Semester</label>
      </div>
      <div class="col-75">
      <?php
                    
                    
                    $class_result=mysqli_query($conn,"SELECT Semester_name FROM semester");
                        echo '<select name="className">';
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
        <input type="email" id="email" name="email" placeholder= "Email">
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
      <input type="date" id="dob" name="dob" >
        
      </div>
    </div>
    
    
    
    
   
    
</br>
    
    <div class="row">
        <input type="submit" value="Update" name="submit">
        

        
     
    </div>
	</form>
</body>
</html>


  
  
</div>
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>


  



        
        






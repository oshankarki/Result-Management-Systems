<?php
$id = $_REQUEST['id'];
$conn = mysqli_connect('localhost','root','','result');

if(isset($_POST['submit'])){
	$id1=$_POST['id'];

  $sname=$_POST['sname'];
  
		
		$sql = "UPDATE semester set Semester_Name = '$sname'  where id = '$id1'";
		mysqli_query($conn, $sql);
		
		if (mysqli_affected_rows($conn) == 1) {
	 	
			header('location:admin_semester.php');
	 }
	 else{
	 	echo "Data update failed".mysqli_error($conn);
	 }
	}
	$sql1 = "select * from semester where id = $id";
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
        <label for="sname">Semester</label>
      </div>
      <div class="col-75">
        <input type="text" id="sname" name="sname" placeholder="Semester">
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


  



        
        






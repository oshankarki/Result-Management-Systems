<?php
$id = $_REQUEST['id'];
$conn = mysqli_connect('localhost','root','','result');



    if(isset($_POST['submit'])){
	$id1=$_POST['id'];

        $className=$_POST['className'];
        $sname=$_POST['sname'];
        $scode=$_POST['scode'];
        $ch=$_POST['ch'];
		
		$sql = "UPDATE `subject` set Subject_Code = '$scode' , Subject_Name = '$sname', Credit_hours='$ch', ClassName='$className' where id = '$id1'";
		mysqli_query($conn, $sql);
		
		if (mysqli_affected_rows($conn) == 1) {
	 	
			header('location:admin_subject.php');
	 }
	 else{
	 	echo "Data update failed".mysqli_error($conn);
	 }
	}
	$sql1 = "select * from `subject` where id = $id";
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
        <label for="class">Semester</label>
      </div>
      <div class="col-75">
      <?php
                    
                    
                    $class_result=mysqli_query($conn,"SELECT Semester_name,id FROM semester");
                        echo '<select name="className">';
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
        <input type="text" id="scode" name="scode" placeholder="Subject code">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sname">Subject Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="snama" name="sname" placeholder="Subject Name">
      </div>
    </div>
    

    <div class="row">
      <div class="col-25">
        <label for="ch">Credit Hrs</label>
      </div>
      <div class="col-75">
        <input type="text" id="ch" name="ch" placeholder= "Credit Hours">
      </div>
    </div>
    
    
    
    
    
   
    
</br>
    
    <div class="row">
        <input type="submit" value="Update" name="submit">
        

        
     
    </div>
  </form>
  

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
</html>
</body>
</html>


  



  



    

    
        





    



        
        






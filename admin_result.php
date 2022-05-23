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
        <title>Result</title>
        <link rel="stylesheet" href="all.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
include "sidenav.php";
?>
            <div class="center">
                <div class="container">
                <form action="" method="post">
                
                <div class="form-group">
                    <label>Student name:</label>
                    <select class="form-control" name="studentName"  required="">
                        <option>Select Student </option>
                        <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"result");
                            $query = "select Student_Name from student";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                                <option><?php echo $row['Student_Name'];?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Semester name:</label>
                    <select class="form-control" name="className"  required="">
                        <option>Select Student </option>
                        <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"result");
                            $query = "select ClassName from subject";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                                <option><?php echo $row['ClassName'];?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Subject Name:</label>
                    <select class="form-control" name="subjectName"  required="">
                        <option>Select Category </option>
                        <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"result");
                            $query = "select Subject_Name from subject";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                                <option><?php echo $row['Subject_Name'];?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Marks:</label>
                    <input type="number" name="marks" class="form-control" required="">
                </div>

                
                <button class="btn btn-primary" name="addmarks">Add Marks</button>

            </form>
                </div>  
                        
                
                
</div>





</body>
</html>
<?php
	if(isset($_POST['addmarks'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"result");
		$query = "insert into marks values(null,'$_POST[className]','$_POST[studentName]','$_POST[marks]','$_POST[subjectName]')";
		$query_run = mysqli_query($connection,$query);
        echo "<script>alert('marks added successfully')</script>";
	}
?>







    
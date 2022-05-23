
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="style1.css">

</head>

<body>
    
    <aside>
         <div class="para">
            <div class="aboutus">
                <p class="Abo">Check Result</p>
            </div>
        </div>

    </aside>
    <br>
    <br>

    <div class="center">
        <div class="container">
            <form action="webproject.php" method="POST">
            
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
                <br>
                <br>
            
                <div class="row">
                    <input type="submit" value="Check Result" name="submit">
                </div>
            </form>
    
         </div>
    </div>
    <br>
    <br>


    </body>
    </html>
    
    
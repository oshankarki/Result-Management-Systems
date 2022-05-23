<?php
//Createb connection
$conn = mysqli_connect('localhost','root','','result');
//check connection
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD']=='POST') {
    // $subject_name = $_POST['subject'];
    // $marks = $_POST['marks'];

    $studentName = $_POST['studentName'];
    $className = $_POST['className'];

    $query = "select * from student where Student_Name='$studentName'";
    $query_run = mysqli_query($conn,$query);
    while($row= mysqli_fetch_assoc($query_run)){
        if($row['Student_Name']==$studentName){
            if($row['ClassName']==$className){
                ?>
                <h2>Marks of Student: <?php echo $row['Student_Name']; ?></h2>
                <form action="" method="get">
                <?php
                $qr = "SELECT * FROM marks";
                $qr_run = mysqli_query($conn, $qr);
                while($row = mysqli_fetch_assoc($qr_run)){
                    
                    ?>
                   
                    hello
                    <label for=""><?php $row['subjectName']; ?></label>
                    
                
                <?php
                }
               ?>
               </form>
               <?php
                
            }   
        }
    }
}
?>

<div>

</div>

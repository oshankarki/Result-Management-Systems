<?php
	session_start();
?>
<?php
if (isset($_POST['submit'])) {
					$connection = mysqli_connect("localhost", "root", "");
					$db = mysqli_select_db($connection, "result");
					$query = "select * from marks where studentName = '$_POST[studentName]' and className = '$_POST[className]' ";
					$query_run = mysqli_query($connection, $query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if ($row['studentName'] == $_POST['studentName']) {
							if ($row['className'] == $_POST['className']) {
								$_SESSION['studentName'] = $row['studentName'];
								$_SESSION['className'] = $row['className'];
                         

							} else {
				?>
								<br><br>
								<center><span class="alert-danger">Wrong Password</span></center>
				<?php
							}
						}
					}
				}
				?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        button.printresult {
    padding: 10px;
    border: 1px solid #1a68b2;
    background: #1a68b2;
    color: white;
    border-radius: 5px;
    font-size: 18px;
    letter-spacing: 0.6px;
}
    </style>
</head>

<body>
    <div class="main">
        <div class="image">
            <img src="Images/TU.png" alt="" height="100">
            <p class="TU">Tribhuvan University</p>
            <p class="IOST">Institute of science and technology</p>
            <p class="TU">Dean's office</p>
            <p class="TU">semester examination 2076</p>
            <p class="Provisional">provisional statement of marks</p>
        </div>
        <div class="Details">

            Name: <?php echo $_SESSION['studentName']; ?>

            <br> Level: Four Year's Bachelor's Degree in computer Science and Information Technology
            <br> Campus: Orchid International College
        </div>
        <br>
        <br>
        <br>
        <div class="second">
            <div class="S1">
                <p class="S11">
                    Semester: <?php echo $_SESSION['className']; ?> 
                </p>
                <p class="S11">
                    Period : 2076 Kartik - 2076 Chaitra
                </p>

            </div>
            <br>
            <br>

            <table border="2px">

                <tr>
                   
                    <th rowspan="2">Subject</th>
                    <th colspan="2"> Full Marks</th>
                    <th colspan="2">Pass Marks</th>
                    <th colspan="2">Marks Obtained</th>
                    



                </tr>
                <tr>

                    <td>Sem</td>
                    <td>Total</td>
                    <td>Sem</td>
                    <td>Total</td>
                    <td>Sem</td>
                    <td>Total</td>

            </tr>
                <?php
                $sum = 0;
                $flag = 0;
                    if (isset($_POST['submit'])) {
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, "result");
                    $query = "select * from marks where studentName = '$_POST[studentName]' and className = '$_POST[className]' ";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        $sum += (int)$row['marks'];
                        if((int)$row['marks']<24){
                            $flag=1;
                        }
                        
                    ?>
                <tr>
                   
                    <td><?php echo $row['subjectName'] ?></td>
                    <td>60</td>
                    <td>60</td>


                    <td>24</td>
                    <td>24</td>


                    <td><?php echo $row['marks']; ?></td>
                    <td><?php echo (int)$row['marks']?></td>
                    


                </tr>
                <?php
                 }
                }
                ?>
               
                <tr>

                    <td colspan="1"> GRAND TOTAL:</td>

                    <td></td>
                    <td>300</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php  echo $sum; ?></td>
                    


                </tr>

                </tr>


                </tr>


            </table>

        </div>
        <br>
        <br>
        <div class="Last">
            <div class="Result">
                <ul>Percentage: <?php echo round((($sum*100)/300),2); ?> %</ul>
                <ul>Result: <?php if($flag=='0' ){
                    echo 'Pass';
                    }else{
                    echo 'Fail';
                    }
                        ?></ul>
                <ul>Verified:<img src="signature.png" style="width:50px;height:20px;"></ul>
                <ul>Balkhu, Kathmandu</ul>
                <ul>Dated: <?php echo date("Y/m/d"); ?></ul>
            </div>

        </div>

    </div>
    </div>
    <center>
    <div style="margin-top:70px;">
        <button class="printresult" onClick="window.print()" >Print Result</button>
    </div>
    </center>
</body>

</html>


<?php
$conn=mysqli_connect('localhost','root','','result');
$sql = "SELECT * FROM `subject`";
$res = mysqli_query($conn, $sql);
$data = [];
if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_assoc($res)) {
		array_unshift($data, $row);		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Subject</title>
    <link rel="stylesheet" href="all.css">
</head>
<body>


  
  
    <table >
      
      <tr>
        <th>S.N</th>
        <th>Code</th>
        <th>Subject Name</th>
        <th>Credit Hours</th>
        <th>Semester Name</th>
        <th>Action </th>



        
      </tr>
      <?php
      $i=1;
      foreach ($data as  $d) {
			?>    
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $d['Subject_Code']; ?></td>
        <td><?php echo $d['Subject_Name']; ?></td>
        <td><?php echo $d['Credit_hours']; ?></td>
        <td><?php echo $d['ClassName']; ?></td>


        <td>
            <button>
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <a href="editSubject.php?id=<?php echo $d['id'] ?>">edit</a> 
            </button>
            <button>

                <i class="fa fa-trash-o" aria-hidden="true"></i>
                <a href="delete_subject.php?id=<?php echo $d['id'] ?>" onclick = "return confirm('Are you sure to delete??')">delete</a>
            </button>
        </td>
       
      </tr>    
      <?php } ?>
    </table>
 


</body>
</html>






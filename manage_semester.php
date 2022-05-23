
<?php
$conn=mysqli_connect('localhost','root','','result');
$sql = "SELECT * FROM semester";
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
	<title>Semester</title>
    <link rel="stylesheet" href="all.css">
</head>
<body>


  
  
    <table>
      
      <tr>
        <th>S.N</th>
        <th>Semester Name</th>
        <th>Action</th>
      </tr>
      <?php
      $i=1;
      foreach ($data as  $d) {
			?>    
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $d['Semester_Name']; ?></td>
		
        <td>
          <button>
        <i class="fa fa-pencil" aria-hidden="true"></i>
        <a href="editSemester.php?id=<?php echo $d['id'] ?>">edit</a> 
      </button>
        <button>

        <i class="fa fa-trash-o" aria-hidden="true"></i>
        <a href="delete_semester.php?id=<?php echo $d['id'] ?>" onclick = "return confirm('are you sure to delete??')">delete</a></td>
      </button>
      
      </tr>    
      <?php } ?>
    </table>
 


</body>
</html>





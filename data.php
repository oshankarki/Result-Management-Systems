<?php
//Createb connection
$conn = mysqli_connect('localhost','root','','result');
//check connection
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}


if (isset($_POST['className'])) {
    $class_name = $_POST['className'];
    $class_result = mysqli_query($conn, "SELECT Subject_Name FROM subject WHERE ClassName LIKE '%$class_name%'");
    // $data = mysqli_fetch_array($class_result);

    $arr = [];
    while($row = mysqli_fetch_array($class_result)){
        $arr[] = $row['Subject_Name'];
    }

    // echo $data;

    // do user authentication as per your requirements
    // ...
    // ...
    // based on successful authentication
    echo json_encode($arr);
    
} else {
    echo json_encode(array('success' => 0));
}

?>

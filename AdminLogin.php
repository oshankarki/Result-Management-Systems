

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>LOGIN</title>
    <style>
    .close-btn {
    position: absolute;
    top: 0;
    right:20px;
    align-items:center;
   justify-items:center;
  
   
}
a{
    color:#fff;
    font-size:50px;
}
    </style>
</head>
<body>

    
    <div class="main">
        
        <div class="container" id="container">
            <div class="form-container log-in-container">
                <form method="POST" action="AdminLogin.php">
                    <h1>Login</h1>
                    
                    <input type="text" name="user" id="name" value="" placeholder="Username">      
                    <input type="password" name="pass" id="password" value="" placeholder="Password">
                    
                    <button type="submit" name="submit">Submit</button>  
                </form>
            </div>
            <div class="overlay-container">
            
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                    <div class="close-btn">
                    <a href="index.php">
                        &times;
                        </a>
                    </div>
                        <h1>Admin Panel</h1>
                        <p>Result Management System!!</p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</body>
</html>

<?php
$servername="localhost";
$username ="root";
$password="";
$dbname="result";
session_start();
if (isset($_POST['submit'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        echo "Error in connection";
    } else {
     $sql = "SELECT * FROM admin_login WHERE `Admin_Name`='$user' AND `Admin_Password`='$pass'";

      
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
        if ($row == 1) {
            $data = mysqli_fetch_assoc($query);
            $_SESSION['Admin_Name'] = $data['user'];
            header("Location:dashboard.php");
        } else {
?>
            <script>
                alert('Wrong Username or Password!!Please Try Again');
                
            </script>
<?php
        }
    }
}

?>
    


    

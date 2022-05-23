<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
    <i class="fa fa-building" aria-hidden="true"></i>
      <span class="logo_name"> Student Result</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
          <i class="fa fa-th" aria-hidden="true"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="admin_student.php" >
          <i class="fa fa-address-book" aria-hidden="true"></i>

            <span class="links_name">Student</span>
          </a>
        </li>
        <li>
          <a href="admin_semester.php">
            <i class='fa fa-university' ></i>
            <span class="links_name">Semester</span>
          </a>
        </li>
        <li>
          <a href="admin_subject.php">
          <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="links_name">Subject</span>
          </a>
        </li>
        
        <li>
          <a href="admin_result.php">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <span class="links_name">Result</span>
          </a>
        </li>
        
        
        <li class="log_out">
          <a href="logout.php">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
</body>
</html>
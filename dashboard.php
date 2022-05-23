
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="all.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php
include "sidenav.php"
?>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        
        <span class="dashboard">Dashboard</span>
      </div>
      
      
      <div class="profile-details">
        <img src="Images/admin.png" alt="">
        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->

        <span class="admin_name">Admin</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Results </div>
            <div class="number">10</div>
           
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Exam</div>
            <div class="number">10</div>
            
          </div>
         
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Student</div>
            <div class="number">1000</div>
            
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Subject</div>
            <div class="number">5</div>
            
          </div>
          
        </div>
        
    </div>
      

      
         
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

        
          
    
 </script>

</body>
</html>

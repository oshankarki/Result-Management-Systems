<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="ind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>

<body>
    <header class="nav-container">
        <img class="logo" src="Images/logo1.png" alt="logo" height="85px" width="100px">
        <nav>
            <ul class="nav_links" id="hamburger">
                <li><a href="index.php" class="nav-links-href">Home</a></li>
                <li><a href="#" class="nav-links-href">About</a></li>
                <li><a href="checkResult.php" class="nav-links-href">Result</a></li>
                <li><a href="AdminLogin.php" class="nav-links-href">Login</a></li>
                <li>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>



        </nav>
    </header>
    <main>
        <aside>
            <div class="para">
                <div class="aboutus">
                    <p class="Abo">About Oxford</p>
                </div>
            </div>

        </aside>
        <div class="row">
            <div class="column">
                <h2>Oxford College</h2>
                <div class="underline"></div>
            </div>
            <div class="column">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="column">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

    </main>

    <footer class="footer-distributed">

        <div class="left">
            <img src="Images/logo1.png">
            <h3>About <span>Oxford</span></h3>

            <p class="footer-links">
                <a href="index.php">Home</a> |
                <a href="checkResult.php">Result</a> |
                <a href="#">About</a> 
                
            </p>

            <p class="companyname">© Oxford College</p>
        </div>

        <div class="center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p> Kathmandu, Nepal</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>0245367424</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:info@oxford.com">info@oxford.com</a></p>
            </div>
        </div>
        <div class="right">
            <p class="companyabout">
                <span><strong>About College</strong></span> Oxford College is a modern and practical education based college dedicated to excellence.</p>
            <div class="footerIcons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    <script>
        function myFunction() {
            var x = document.getElementById("hamburger");
            if (x.className === "nav_links") {
                x.className += " responsive";
            } else {
                x.className = "nav_links";
            }
        }
    </script>
</body>

</html>
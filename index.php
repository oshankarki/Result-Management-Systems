<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" type="image/x-icon" href="Images/home.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <header class="nav-container">
        <img class="logo" src="Images/logo1.png" alt="logo" height="85px" width="100px">
        <nav>
            <ul class="nav_links" id="hamburger">
                <li><a href="#" class="nav-links-href">Home</a></li>
                <li><a href="aboutus.php" class="nav-links-href">About</a></li>
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

    <div class="slideshow-container">

        <div class="mySlides ">
            <img src="Images/6.jpeg" style="width:100%">
        </div>

        <div class="mySlides">
            <img src="Images/3.jpeg" style="width:100%">
        </div>

        <div class="mySlides">
            <img src="Images/2.jpeg" style="width:100%">
        </div>


    </div>




    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <aside>
        <div class="paragraph">
            <div class="WhyUs">Why Us?</div>
            <p class="para-content">Being an institution with a long history, Oxford College has developed many leaders and entrepreneurs. It assures that every student is technically competent..</p>
        </div>
        <div class="image-cs">
            <img src="Images/collegestudent.jpeg" alt="" class="cs">
        </div>
    </aside>
    <br>
    <main>

        <div class="OurCourses">
            <p id="cou">Faculties</p>
            <p>"All programs offeres here are affiliated under Tribhuvan University"</p>
            <img src="Images/TU.png" class="image" alt="" height="100">
        </div>
        <div class="facecontainer">

            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="Images/bim.png">
                        <h3>BIM</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>The Bachelor of Information Management (BIM) programme is a four year (eight semester) programme to enable students to develop skill in information technology, and at the same time make them able to understand the professional
                            expertise while they occupy decision making positions.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="Images/csit.png">
                        <h3>BSc.CSIT</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p> Bachelors of Science in Computer Science and Information Technology (BSc. CSIT) is a four year course affiliated to Tribhuvan University designed to provide the student with all sorts of knowledge in the field of Information Technology
                            and Computing</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="Images/bit.png">
                        <h3>BIM</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p> Bachelor of Information Technology is a four years undergraduate program that provides knowledge and skills of different technologies used to design, develop and use it in the functional areas of business based on Information technology.
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Testominals -->
    <div class="testimonials">
        <h2 class="title">Students Success Story</h2>

        <div class="slider-container">
            <div class="slider">
                <div class="slide-box">
                    <!-- Testi One -->
                    <p class="comment">
                        Coming from a typical Nepali education system, it has honestly been a life changing experience at Oxford College. I was truly overwhelmed to be a part of an education system that prepared me for real life situations. For me it was the perfect place to
                        explore my interests and learn how to stand out from the crowd. </p>
                    <img src="Images/purnima.jpeg">

                    <h3 class="name">Purnima Khadka</h3>
                    <h4 class="job">Graphics Designer</h4>
                </div>
                <div class="slide-box">
                    <!-- Testi Two -->
                    <p class="comment">
                        MIT helped me to build the confidence I needed to face the real world and achieve my goals. I was truly overwhelmed to be a part of an education system that prepared me for real life situations. For me it was the perfect place to explore my interests
                        and learn how to stand out from the crowd. </p>
                    <img src="Bhuwan.jpeg">
                    <h3 class="name">Bhuwan Thapa</h3>
                    <h4 class="job">Full Stack Developer</h4>
                </div>
                <div class="slide-box">
                    <!-- Testi Three -->
                    <p class="comment">
                        Oxford College for me was a wonderful place. I made some great memories and learnt how to work very hard in order to succeed. I recommend anyone who wants a better future to enroll at Oxford College. </p>
                    <img src="Images/nishanta.jpeg">

                    <h3 class="name">Nishanta Nepal</h3>
                    <h4 class="job">UX/UI Designer</h4>
                </div>
            </div>

            <a href="#!" class="control-slider btn-left">
                <i class="fa fa-arrow-left" style="font-size:40px;"></i>

            </a>
            <a href="#!" class="control-slider btn-right">
                <i class="fa fa-arrow-right" style="font-size:40px;"></i>
            </a>
        </div>
    </div>
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
        var slideIndex = 0;
        showSlides();



        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }
        const sliderElm = document.querySelector(".slider-container .slider");
        const btnLeft = document.querySelector(".slider-container .btn-left");
        const btnRight = document.querySelector(".slider-container .btn-right");

        const numberSliderBoxs = sliderElm.children.length;
        let idxCurrentSlide = 0;

        // Functions:
        function moveSlider() {
            let leftMargin = (sliderElm.clientWidth / numberSliderBoxs) * idxCurrentSlide;
            sliderElm.style.marginLeft = -leftMargin + "px";
            console.log(sliderElm.clientWidth, leftMargin);
        }

        function moveLeft() {
            if (idxCurrentSlide === 0) idxCurrentSlide = numberSliderBoxs - 1;
            else idxCurrentSlide--;

            moveSlider();
        }

        function moveRight() {
            if (idxCurrentSlide === numberSliderBoxs - 1) idxCurrentSlide = 0;
            else idxCurrentSlide++;

            moveSlider();
        }

        // Event Listeners:
        btnLeft.addEventListener("click", moveLeft);
        btnRight.addEventListener("click", moveRight);
        window.addEventListener("resize", moveSlider);

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
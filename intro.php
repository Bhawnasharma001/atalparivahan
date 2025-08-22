 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myintro</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/intro.css">
    <style>
        .phone-view .div-phone-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 10px 20px;
            background-color: #000;
        }

        .phone-view {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9;

        }

        .phone-view .logo-divphoone {
            width: 80px;
            height: 80px;


        }

        .phone-view .logo-divphoone img {
            width: 100%;
            height: 100%;
        }

        .phone-view .icon-munu i {
            font-size: 30px;
            color: #fff;
            cursor: pointer;
        }

        .link123 {
            text-decoration: none;
            color: #818181 !important;
            padding-left: 16px;
        }

        @media (max-width: 767px) {
            .phone-view {
                display: block;
            }

            .phone-view-nav .nav .nav-items {
                color: black !important;
                font-size: 20px;
            }
        }
    </style>
    <style>
        .nav-link.active {
    color: #fff !important;                /* text white */
    background: #7dba5c;   
}
        .DIV-D{
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1000;
            cursor: pointer;
        }
        .DIV-D i{
            color:white;
            font-size: 20px;
        }
        #section1 { 
  transition: width 0.6s ease-in-out; /* Smooth width animation */
}

#section2 { 
  transition: width 0.6s ease-in-out; /* Smooth width animation */
} 


#first.collapsed {
  width: 8%;
      padding: 10px 3px;
}

#second.collapsed {
  width: 92%;
}


#first.collapsed .project-link1 p{
        padding-left: 10px;
    font-size: 15px;
}
#first.collapsed .flex-column {
    gap: 15px;
}
#first.collapsed img {
  width: 80px;
  height:80px;
  margin:20px 0px 10px;
}

#first.collapsed .nav-link {
  font-size: 15px; /* font shrink */
  padding: 5px 10px;
}
.project-link1{ 
 text-decoration: none; 
}
.project-link1 p{
font-size:15px;
 text-decoration: none;
    color: #818181;
    margin-top:20px;
    padding-left:18px;
        width: max-content;
}
.project-link1 p:hover {
    color:white;
}
    </style> 
</head>

<body>
    <!-- Slider main container -->

    <div class=" my-class01">
        <div class="phone-view">
            <div class="div-phone-flex">
                <div class="logo-divphoone">
                    <img src="img2/intro-ist1.jpg" alt="">
                </div>
                <div class="icon-munu">
                    <i class="fa-solid fa-bars icon-menu"></i>
                </div>
            </div>
            <div class="phone-view-nav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active home" data-slide="0" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link about" data-slide="1" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link education" data-slide="2" href="#">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link skills" data-slide="3" href="#">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="myproject.php" class="link123">My Project </br> << Atal Parivahan</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-container123" id="first">
            
            <div class="nav-123">
                <ul class="nav flex-column">
                    <div class="logo-div">
                        <img src="img2/intro-ist1.jpg" alt="">
                        <p class="name1">Bhawna Sharma</p>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link active home" data-slide="0" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link about" data-slide="1" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link education" data-slide="2" href="#">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link skills" data-slide="3" href="#">Skills</a>
                    </li> 
                </ul>
                <a class="project-link1" href="myproject.php"> <p>My Project </br> >> Atal Parivahan</p> </a>
            
            </div>
        </div>
        <div class=" second-section" id="second">
            <div class="DIV-D">
                 <i class="fa-solid fa-bars"></i>
            </div>
            <div class="swiper package-for-you-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="carasol-my-website">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img2/web-img.jpg" class="d-block w-100 ist-img1" alt="..."
                                            height="auto">
                                        <div class="carousel-caption ">
                                            <h5 class="name">HELLO I'M</h5>
                                            <p class="para">BHAWNA SHARMA</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item  ">
                                        <picture></picture>
                                        <img src="img2/crsu1.jpg" class="d-block w-100 ist-img" alt="..." height="auto">
                                        <div class="carousel-caption ">
                                            <h5 class="name">LEARNING AT</h5>
                                            <p class="para">Choudhary Ranbir Singh University</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item  ">
                                        <img src="img2/intro-3rd.jpg" class="d-block w-100 ist-img" alt="..."
                                            height="auto">
                                        <div class="carousel-caption ">
                                            <h5 class="name">INTERNSHIP AT</h5>
                                            <p class="para">BITGAIN TECHNOLOGY PVT. LTD.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="scroll-class">
                                <div class="content-one">
                                    <h1 content-h1>ABOUT</h1>
                                    <div class="divider"></div>
                                    <ul>
                                        <li class="details">Name:Bhawna</li>
                                        <li class="details">Email:sharmabhawna4647@gmail.com</li>
                                        <li class="details">Contact No:8307824110</li>
                                        <li class="details">Date Of Birth:12 june 2006</li>
                                        <li class="details">Address:Jind,Haryana</li>
                                        <li class="details"></li>
                                    </ul>
                                    <p class="para-h">Professional Profile</p>
                                    <p class="about-me">Curious mind, creative spirit, and a coder’s persistence —
                                        that’s
                                        how I approach every project. As a BCA final-year student and budding web
                                        developer,
                                        I blend technical skills with design thinking to build websites that don’t just
                                        work, but connect with users. From crafting responsive layouts to fine-tuning
                                        database queries, I enjoy turning ideas into functional, visually appealing
                                        digital
                                        experiences. Eager to explore new tools, solve tricky problems, and grow into a
                                        full-stack developer who can create solutions that leave a lasting impact.</p>
                                        <a href="pdfs/Resume_BhawnaShrma.pdf" download>
                                            <button class="resume">Download My Resume</button>
                                        </a>
                                    <div class="signature">
                                        <img src="img2/signature.png" alt="Signature" class="signature-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="scroll-class">
                                <h1>EDUCATION</h1>
                                <div class="divider"></div>
                                <p class="education-para">I am currently pursuing my Bachelor’s in Computer Applications
                                    (BCA)
                                    and have completed two years of study, with my third year in progress. Over the
                                    course of my
                                    academic journey, I have gained strong foundational knowledge in programming, web
                                    development, database management, and computer graphics. My education has not only
                                    equipped
                                    me with technical skills but also strengthened my problem-solving abilities,
                                    creativity, and
                                    adaptability in the rapidly evolving tech world.
                                </p>
                                <div class="row my-class">
                                    <div class="col-md-6">
                                        <div class="education-card">
                                            <div class="image">
                                                <span>
                                                    <i class="fa-solid fa-graduation-cap"></i>
                                                </span>
                                            </div>
                                            <div class="for-content">
                                                <p class="place">Choudhary Ranbir Singh University</p>
                                                <p class="course-name">Bachelor's in Computer Application (BCA)</p>
                                                <p class="duration">2023-2026</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-right">
                                            <p class="description">
                                                Currently in the final year of my Bachelor of Computer Applications
                                                (BCA), with a strong foundation in programming, databases, and web
                                                technologies.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-class">
                                    <div class="col-md-6">
                                        <div class="education-card">
                                            <div class="image">
                                                <span>
                                                    <i class="fa-solid fa-file-lines senior"></i>
                                                </span>
                                            </div>
                                            <div class="for-content">
                                                <p class="place">M.V.M Sr Sec School</p>
                                                <p class="course-name">Senior Secondary (Class 12th)</p>
                                                <p class="duration">2022-2023</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-right">
                                            <p class="description">
                                                Completed Senior Secondary (Class 12th) in Arts with Mathematics,
                                                scoring
                                                90%. Maintained consistent academic excellence with a strong performance
                                                across all subjects.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-class">
                                    <div class="col-md-6">
                                        <div class="education-card">
                                            <div class="image">
                                                <span>
                                                    <i class="fa-solid fa-image secandary"> </i>
                                                </span>
                                            </div>
                                            <div class="for-content">
                                                <p class="place">Nav Vidya High School</p>
                                                <p class="course-name">Secandary class(X)</p>
                                                <p class="duration">2020-2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-right">
                                            <p class="description">
                                                I completed my 10th standard with 100% marks and secured the top
                                                position in my school. Along with academics, I achieved success in
                                                debate competitions and inter-school quizzes.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="scroll-class">
                                <h1>SKILLS</h1>
                                <div class="divider"></div>
                                <p class="under_skills">JUST MY AWESOME SKILLS</p>
                                <p class="skills-para">I am a BCA final-year student with a strong foundation in web
                                    development, programming, and database management. My skills include HTML, CSS,
                                    JavaScript and MySQL, enabling me to create dynamic and responsive websites. I am
                                    also proficient in using frameworks like Bootstrap for front-end design. My
                                    problem-solving abilities and attention to detail help me deliver high-quality code
                                    and user-friendly interfaces.
                                </p>
                                <div class="div-scrool-skillbar">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="skill">
                                                <div class="circle" style="--percent: 90%;">
                                                    <span>90%</span>
                                                </div>
                                                <div class="text">
                                                    <h3>HTML</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="skill">
                                                <div class="circle" style="--percent: 88%;">
                                                    <div class="div-back"></div>
                                                    <span>88%</span>
                                                </div>
                                                <div class="text">
                                                    <h3>CSS</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="skill">
                                                <div class="circle" style="--percent: 75%;">
                                                    <span>75%</span>
                                                </div>
                                                <div class="text">
                                                    <h3>JAVASCRIPT</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="skill">
                                                <div class="circle" style="--percent: 80%;">
                                                    <span>80%</span>
                                                </div>
                                                <div class="text">
                                                    <h3>SQL</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="knowledge">
                                        <p class="heading">KNOWLEDGE</p>
                                        <p class="knowledge-para">
                                            Final-year BCA student with hands-on experience in web development and a
                                            strong grasp of HTML, CSS, and JavaScript. Worked on projects including the
                                            Atal Parivahan website, focusing on responsive design and user-friendly
                                            navigation. Passionate about problem-solving, continuous learning, and
                                            building impactful digital solutions.
                                        </p>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>



            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/intro.js"></script>
     
     <script>
    var swiper = new Swiper(".package-for-you-slider", {
        grabCursor: true,
        spaceBetween: 5,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
                direction: 'vertical'
            },
            768: {
                slidesPerView: 1,
                direction: 'horizontal'
            }
        }
    });

    // Nav-link click → slide change + active class
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            let slideIndex = this.getAttribute('data-slide');
            swiper.slideTo(slideIndex);

            // remove active from all nav-links
            document.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));

            // add active only to clicked link
            this.classList.add('active');
        });
    });

    // Swiper slide change → update nav active + grabCursor control
    swiper.on('slideChange', () => {
        let currentIndex = swiper.activeIndex;

        // update nav active
        document.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));
        let activeNav = document.querySelector(`.nav-link[data-slide="${currentIndex}"]`);
        if (activeNav) activeNav.classList.add('active');

        // Disable grabCursor when on active slide
        if (swiper.isEnd || swiper.isBeginning) {
            swiper.params.grabCursor = false;
        } else {
            swiper.params.grabCursor = true;
        }
    });
</script>

    <script>
        // JS way: no <audio> tag
        const hoverSound = new Audio("img2/click.mp3");
        const clickSound = new Audio("img2/click.mp3");

        document.querySelectorAll(".flex-column .nav-item a").forEach(link => {
            // Hover sound
            link.addEventListener("mouseenter", () => {
                hoverSound.currentTime = 0;
                hoverSound.play();
            });

            // Click sound
            link.addEventListener("click", () => {
                clickSound.currentTime = 0;
                clickSound.play();
            });
        });
        
    </script>
    <script>
        const myCarousel = document.querySelector('#carouselExampleCaptions');
        const carousel = new bootstrap.Carousel(myCarousel, {
            interval: 200000, // 3 seconds
            ride: 'carousel'
        });
    </script>
    <!-- <script>
  const divD = document.querySelector(".DIV-D");
  const first = document.getElementById("first");
  const second = document.getElementById("second");

  let toggled = false;

  divD.addEventListener("click", () => {
    if (!toggled) {
      first.style.width = "5%";
      second.style.width = "95%";
    } else {
      first.style.width = "20%";
      second.style.width = "80%";
    }
    toggled = !toggled;
  });
</script> -->
<script>
  const divD = document.querySelector(".DIV-D");
  const first = document.getElementById("first");
  const second = document.getElementById("second");

  divD.addEventListener("click", () => {
    first.classList.toggle("collapsed");
    second.classList.toggle("collapsed");
  });
</script>


</body>

</html>
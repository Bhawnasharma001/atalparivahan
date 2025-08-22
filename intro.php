<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myintro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/intro.css">
    <style>
        .package-for-you-slider .swiper-slide-active {
            width: 70% !important;
        }
    </style>
</head>

<body>
    <!-- Slider main container -->

    <div class="row my-class">
        <div class="col-lg-3 nav-123">
            <ul class="nav flex-column">
                <div class="logo-div">
                    <img src="img2/name-logo2.png" alt="">
                </div>
                <li class="nav-item">
                    <a class="nav-link active home" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link skills" href="#">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link education" href="#">Education</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-9 second-section">
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
                                <div class="carousel-inner" style="height: 100vh;">
                                    <div class="carousel-item active">
                                        <img src="img/about.jpg" class="d-block w-100 ist-img" alt="..." height="auto">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="name">HELLO I'M</h5>
                                            <p class="para">BHAWNA SHARMA</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="img/about.jpg" class="d-block w-100 ist-img" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="para">HELLO I'M</h5>
                                            <p class="para">BHAWNA SHARMA</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="img/about.jpg" class="d-block w-100 ist-img" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 class="name">HELLO I'M</h5>
                                            <p class="para">BHAWNA SHARMA</p>
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
                                        <li class="details">Contact no:8307824110</li>
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
                                    <button class="resume">Download My Resume</button>
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
                                                    <i class="fa-solid fa-image"> </i>
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
                            </div>
                            <div class="row my-class">
                                <div class="col-md-6">
                                    <div class="education-card">
                                        <div class="image">
                                            <span>
                                                <i class="fa-solid fa-image"> </i>
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
                                            Completed Senior Secondary (Class 12th) in Arts with Mathematics, scoring
                                            90%. Maintained consistent academic excellence with a strong performance
                                            across all subjects.
                                        </p>
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
                                <style>
                                      .div-scrool-skillbar .skill {
      display: flex;
      align-items: center;
         gap: 10px;
    width: max-content;
    margin: 20px 0px;
    }

   .div-scrool-skillbar .circle {
      position: relative;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: conic-gradient(#7dff7d var(--percent), #333 var(--percent));
      display: flex;
      justify-content: center;
      align-items: center;
    }

   .div-scrool-skillbar .circle::before {
      content: "";
      position: absolute;
      width: 90px;
      height: 90px;
      background: #111;
      border-radius: 50%;
    }

   .div-scrool-skillbar .circle span {
      position: absolute;
      font-size: 24px;
      font-weight: bold;
      color: #7dff7d;
    }

   .div-scrool-skillbar .text {
      display: flex;
      flex-direction: column;
    }

   .div-scrool-skillbar .text h3 {
      margin: 0;
      font-size: 18px;
      color: #eee;
    }

   .div-scrool-skillbar .text p {
      margin: 5px 0 0;
      font-size: 14px;
      color: #aaa;
    }
                                </style>
                                <div class="div-scrool-skillbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="skill">
                                            <div class="circle" style="--percent: 75%;">
                                                <span>75%</span>
                                            </div>
                                            <div class="text">
                                                <h3>FILM EDITING</h3>
                                                <p>Expert, 4 years</p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="skill">
                                            <div class="circle" style="--percent: 88%;">
                                                <div class="div-back" ></div>
                                                <span>88%</span>
                                            </div>
                                            <div class="text">
                                                <h3>ART DIRECTION</h3>
                                                <p>Advanced, 2 years</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="skill">
                                            <div class="circle" style="--percent: 90%;">
                                                <span>90%</span>
                                            </div>
                                            <div class="text">
                                                <h3>TECHNICAL EXPERTISE</h3>
                                                <p>Expert, 8 years</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="skill">
                                            <div class="circle" style="--percent: 96%;">
                                                <span>96%</span>
                                            </div>
                                            <div class="text">
                                                <h3>HTML5 CSS3</h3>
                                                <p>Expert, 8 years</p>
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
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".package-for-you-slider", {
            //  loop: true,
            grabCursor: true,
            spaceBetween: 5,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                991: {
                    slidesPerView: 1,
                },
                2000: {
                    slidesPerView: 1,
                },
            },
        });
    </script>

</body>

</html>
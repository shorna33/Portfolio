<?php
include "includes/connect.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samia Sharnami</title>
    <link rel="icon" href="img/dp.jpg" type="image/gif/png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Raleway font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- js aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">

    <style>
        .cv {
            background-color: #36507d !important;

        }

        .cv:hover {
            background-color: #4d6083 !important;
        }
    </style>

</head>
<body>
    

    <!-- 90vh = 642px -->
    <!-- Background image -->
    <section id="home" class="hom">
    <div class="bg-image">
        <!-- <div class="mask text-light" style="background-color: hsla(0, 0%, 98%, 0.2)"> -->
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark shadow-5-strong fixed-top mt-2">
            <!-- Container wrapper -->
            <div class="container-fluid">
            <!-- Navbar brand -->
            <!-- <a class="navbar-brand" href="#">Brand</a> -->
        
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
        
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active mx-2">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link mx-2">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a href="#education" class="nav-link mx-2">Education</a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="nav-link mx-2">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a href="#projects" class="nav-link mx-2">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="#publications" class="nav-link mx-2">Publications</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacts" class="nav-link mx-2">Contacts</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <div id="progress">
            <span id="progress-value"><i class="fa-solid fa-arrow-up"></i></span>    
        </div>
        
        <!-- Navbar -->
        <!-- </div> -->


        <div class="me" data-aos="fade-up-left">
            <img src="img/cover_me.jpg" alt="shorna" class="me-pic">
        </div>
        
        <div class="caption hover-shadow" data-aos="fade-up-right">
            <div class="container cap pt-3">
                <h1 class="ms-3 fw-bold cap2">Samia Sharnami</h1>
                <span class="text first-text ms-3">I'm a</span>
                <span class="text sec-text ms-2"></span>
            </div>
            
            <div class="container soc mt-3">
                <div class="icon github">
                    <a href="https://github.com/shorna33" target="_blank"><i class="fab fa-github"></i></a>
                    <div class="tool">GitHub</div>
                </div>
                <div class="icon facebook">
                    <a href="https://www.facebook.com/shorna225" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <div class="tool">Facebook</div>
                </div>
                <div class="icon twitter">
                    <a href="https://twitter.com/SamiaShorna1" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <div class="tool">Twitter</div>
                </div>
                <div class="icon instagram">
                    <a href="https://www.instagram.com/shorna.1" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <div class="tool">Instagram</div>
                </div>
                <div class="icon linkedin">
                    <a href="https://www.linkedin.com/in/samia-sharnami-7b11b11ab" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <div class="tool">LinkedIn</div>
                </div>
            </div>
        </div>
            
        

    </div>
</section>
    <!-- Background image -->
    <hr>


    <!-- About Me -->
    <section class="mt-5" id="about" data-aos="fade-up">
        <div class="container" style="text-align: justify;">
            <div class="d-sm-flex align-content-center justify-content-between">
                <img src="img/me.jpg" class="rounded-circle mx-sm-3 myimg" alt="Samia" style="width: 200px; height: 200px;">
                <div>                    
                    <div class="container text-center text-sm-start my-4">
                        <h1>Samia Sharnami</h1>
                        <p>I aspire to be a Full-stack software engineer. I'm enthusiastic about web development and problem solving. 
                            I have a deep understanding of web development technologies, including HTML, CSS, PHP, and JavaScript, 
                            and I want to use my skills to create responsive and interactive websites and applications that work 
                            seamlessly across different devices and platforms.</p>
                    </div>                    
                </div>
            </div>
        </div>
    </section>


    <!-- Education -->
    <section class="m-5" id="education" data-aos="fade-up">
        <div class="container">
            <h1>Education</h1>
            <hr style="width: 98%;">
        </div>

        <div class="container mt-3 hover-shadow">
            <div class="wrapper d-sm-flex">
                <img src="img/uni.png" class="mt-5 ms-2 mb-2 align-content-center" alt="uni" style="height: 150px; width: 100px;">
                <div class="p-sm-5 justify-content">
                    <p class="fs-4 fw-bold">B.Sc. Engineering in Computer Science and Engineering Discipline</p>
                    <p class="fw-bold">
                        CGPA 3.59 out of 4.00 <br>
                        Khulna University
                    </p>
                    <i class="fa-solid fa-calendar" style="color: #36507d;"></i>
                    <span class="ms-2">January 2018 - January 2023</span> 
                </div>
            </div>
        </div>
        <div class="container mt-3 hover-shadow">
            <div class="wrapper d-sm-flex">
                <img src="img/kgc.png" class="mt-5 ms-2 mb-2 align-content-center" alt="uni" style="height: 150px; width: 100px;">
                <div class="p-sm-5 justify-content">
                    <p class="fs-4 fw-bold">Higher Secondary Certificate</p>
                    <p class="fw-bold">
                        GPA 4.67 out of 5.00 <br>
                        Kushtia Government College
                    </p>
                    <i class="fa-solid fa-calendar" style="color: #36507d;"></i>
                    <span class="ms-2">July 2015 - March 2017</span> 
                </div>
            </div>
        </div>
        <div class="container mt-3 hover-shadow">
            <div class="wrapper d-sm-flex">
                <img src="img/bgpsc.png" class="mt-5 ms-2 mb-2 align-content-center" alt="uni" style="height: 150px; width: 100px;">
                <div class="p-sm-5 justify-content">
                    <p class="fs-4 fw-bold">Secondary School Certificate</p>
                    <p class="fw-bold">
                        GPA 5.00 out of 5.00 <br>
                        Border Guard Public School and College <br>
                        Mirpur, Kushtia
                    </p>
                    <i class="fa-solid fa-calendar" style="color: #36507d;"></i>
                    <span class="ms-2">January 2013 - January 2015</span> 
                </div>
            </div>
        </div>
    </section>


    <!-- Skills -->
    <section class="m-5" id="skills" data-aos="fade-up">
        <div class="container">
            <h1>Skills</h1>
            <hr style="width: 98%;">
        </div>

        <div class="container ps-sm-5 sk">
            <div class="row pt-5">
            <?php
                $cell_query = "SELECT * FROM skills";
                $cell_run = mysqli_query($conn, $cell_query);
                $count = 0;
                
                while ($fetch = mysqli_fetch_assoc($cell_run)) {
                    if ($count > 2) {
                        $count = 0; ?>
                        </div>
                        <div class="row pt-sm-5">
                    <?php }?>              
            
                <div class="col-md hover-shadow d-flex align-items-center sk">
                    <img src="./admin/images/<?php echo $fetch['img'] ?>" class="d-md-inline-block m-3 m-xs-5" alt="c" style="width: 100px; height: 100px;">
                    <div class="d-md-inline-block">
                        <h2><?php echo $fetch['skill']; ?></h2>
                    </div>
                </div>
                <?php $count = $count + 1; }?>                
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="files/shorna.pdf" class="btn cv rounded-pill text-light">
                <i class="fa-solid fa-cloud-arrow-down"></i> Download CV
                </a>
            </div>
        </div>
    </section>
    
    
    <!-- Projects -->
    <section class="m-5 overflo-auto" id="projects" data-aos="fade-up">
        <div class="container">
            <h1>Projects</h1>
            <hr style="width: 98%;">
        </div>

        <div class="alert alert-warning alert-dismissible fade show container" role="alert">
            <p> <strong>Click</strong> on the images to show preview.</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6" data-aos="zoom-in">
                    <div class="image mt-5 mx-sm-5 mb-3">
                        <img src="img/library.png" alt="library" class="image__img">
                        <div class="image__overlay image__overlay__blur">
                            <a href="https://cseseminarlibrary.000webhostapp.com/" target="_blank" class="image__desc">Show preview  <i class="fa-solid fa-arrow-right" style="color: white;"></i></a>
                        </div>                        
                    </div>
                    <div class="bottom-text mx-sm-5 mt-5">
                        <h4 class="text-center">CSE Seminar Library</h4>
                        <p class="text-justify" style="color: gray;">CSE Seminar Library is a Library Management System which can be used to search, view, and issue books, check which book is issued
                            and by whom. Get code from <a href="https://github.com/shorna33/library.git" target="_blank">here</a>.</p>
                        <p class="text-justify" style="color: gray;">Language and Technologies used: Laravel, Bootstrap, PHP, MySQL.</p>
                    </div>                    
                </div>
                <div class="col-lg-6 mt-5 mt-sm-0 second" data-aos="zoom-in">
                    <div class="image mt-5 mx-sm-5 mb-3">
                        <img src="img/tourism.png" alt="library" class="image__img">
                        <div class="image__overlay image__overlay__blur">
                            <a href="http://tourville.great-site.net/" target="_blank" class="image__desc">Show preview  <i class="fa-solid fa-arrow-right" style="color: white;"></i></a>
                        </div>                        
                    </div>
                    <div class="bottom-text mx-sm-5 mt-5">
                        <h4 class="text-center">Tourville</h4>
                        <p class="text-justify" style="color: gray;">Tourville is Tourism Management System which can be used to view and search tour agencies and packages. Packages can also
                            be booked from this application. Get code from <a href="https://github.com/shorna33/tourville.git" target="_blank">here</a>.</p>
                        <p class="text-justify" style="color: gray;">Language and Technologies used: PHP, Bootstrap, MySQL.</p>
                    </div>                    
                </div>
            </div>

            <div class="row d-flex justify-content-center second-row">
                <div class="col-lg-6 second" data-aos="zoom-in">
                    <div class="image mt-5 mx-sm-5 mb-3">
                        <img src="img/crud.png" alt="blog" class="image__img">
                        <div class="image__overlay image__overlay__blur">
                            <a href="http://personalblogposts.000webhostapp.com/" target="_blank" class="image__desc">Show preview  <i class="fa-solid fa-arrow-right" style="color: white;"></i></a>
                        </div>                        
                    </div>
                    <div class="bottom-text mx-sm-5 mt-5">
                        <h4 class="text-center">Personal Blog Application</h4>
                        <p class="text-justify" style="color: gray;">A personal blog post application which can be used to post, edit, and delete simple blogs. Get code from 
                        <a href="https://github.com/shorna33/Laravel-CRUD-Application.git" target="_blank">here</a>.</p>
                        <p class="text-justify" style="color: gray;">Language and Technologies used: Laravel, Bootstrap, PHP, MySQL.</p>
                    </div>                    
                </div>
                <div class="col-lg-6 mt-5 mt-sm-0 second" data-aos="zoom-in">
                    <div class="image mt-5 mx-sm-5 mb-3">
                        <img src="img/portfolio.png" alt="portfolio" class="image__img">
                        <div class="image__overlay image__overlay__blur">
                            <a href="#" target="_blank" class="image__desc">Show preview  <i class="fa-solid fa-arrow-right" style="color: white;"></i></a>
                        </div>                        
                    </div>
                    <div class="bottom-text mx-sm-5 mt-5">
                        <h4 class="text-center">Portfolio</h4>
                        <p class="text-justify" style="color: gray;">Get code from <a href="https://github.com/shorna33/Portfolio.git" target="_blank">here</a>.</p>
                        <p class="text-justify" style="color: gray;">Language and Technologies used: PHP, Bootstrap, JavaScript, MySQL.</p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center second-row">
                <div class="col-lg-6 second" data-aos="zoom-in">
                    <div class="image mt-5 mx-sm-5 mb-3">
                        <img src="img/contactapp.png" alt="contactapp" class="image__img">
                        <div class="image__overlay image__overlay__blur">
                            <a href="#" target="_blank" class="image__desc">Show preview  <i class="fa-solid fa-arrow-right" style="color: white;"></i></a>
                        </div>                        
                    </div>
                    <div class="bottom-text mx-sm-5 mt-5">
                        <h4 class="text-center">Contact Manager Application</h4>
                        <p class="text-justify" style="color: gray;">A contact manager application can be used to save, edit, and delete contacts. Get code from 
                        <a href="https://github.com/shorna33/contactApp.git" target="_blank">here</a>.</p>
                        <p class="text-justify" style="color: gray;">Language and Technologies used: React JS, JavaScript, JSON Server.</p>
                    </div>                    
                </div>
                <div class="col-lg-6 mt-5 mt-sm-0 second" data-aos="zoom-in">
                    <div class="image mt-5 mx-sm-5 mb-3">
                        <img src="img/todo.png" alt="todo" class="image__img">
                        <div class="image__overlay image__overlay__blur">
                            <a href="https://tododemoapplication.netlify.app/" target="_blank" class="image__desc">Show preview  <i class="fa-solid fa-arrow-right" style="color: white;"></i></a>
                        </div>                        
                    </div>
                    <div class="bottom-text mx-sm-5 mt-5">
                        <h4 class="text-center">To-do List</h4>
                        <p class="text-justify" style="color: gray;">A to-do list application can be used to create, edit, and delete tasks, and set the task state to completed or incomplete.
                        Get code from <a href="https://github.com/shorna33/to-doApp.git" target="_blank">here</a>.</p>
                        <p class="text-justify" style="color: gray;">Language and Technologies used: React JS, JavaScript, Bootstrap, JSON Server.</p>
                    </div>
                </div>
            </div>

            <!-- <div class="row d-flex justify-content-center second-row">
                <div class="col-lg-6 mt-5 mt-sm-0 second" data-aos="zoom-in">
                    <div class="image mt-5 mx-sm-5 mb-3">
                        <img src="img/contactapp.png" alt="contactapp" class="image__img">
                        <div class="image__overlay image__overlay__blur">
                            <a href="#" target="_blank" class="image__desc">Show preview  <i class="fa-solid fa-arrow-right" style="color: white;"></i></a>
                        </div>                        
                    </div>
                    <div class="bottom-text mx-sm-5 mt-5">
                        <h4 class="text-center">Contact Manager Application</h4>
                        <p class="text-justify" style="color: gray;">A contact manager application can be used to save, edit, and delete contacts. 
                        Get code from <a href="https://github.com/shorna33/contactApp.git" target="_blank">here</a>.</p>
                        <p class="text-justify" style="color: gray;">Language and Technologies used: React JS, JavaScript, JSON Server.</p>
                    </div>
                </div>
            </div> -->
            
        </div>
        

        <!-- <div style="height: 150px;"></div> -->
    </section>


    <!-- Publications -->
    <section class="m-5" id="publications" data-aos="fade-up">
        <div class="container">
            <h1>Publications</h1>
            <hr style="width: 98%;">
        </div>

        <div class="container mt-3">
            <a href="#demo" class="card p-2 hover-shadow" data-bs-toggle="collapse" style="color: black; text-decoration: none; border: none;">
                <h5>A CNN Based Approach to Classify Skin Cancers using Transfer Learning</h5>
                <br>
                <p>AH. Jui, <span class="fw-bold">S. Sharnami</span>, A. Islam.</p>
                <p style="margin-top: -15px;">25<sup>th</sup> International Conference on Computer and Information Technology (ICCIT), Cox’s Bazar, Bangladesh, December, 2022.</p>
                <div class="d-flex flex-row-reverse" style="margin-right: -17px;">
                    <a href="#demo" data-bs-toggle="collapse" 
                        data-mdb-toggle="popover"
                        data-mdb-placement="top"
                        data-mdb-content="<span class='text-light'>Expand</span>"
                        data-mdb-trigger="hover"
                        data-mdb-html="true" class="btn exPlus"><i class="fa-solid fa-plus plus"></i>
                    </a>          
                    <a href="https://ieeexplore.ieee.org/abstract/document/10055838" data-mdb-toggle="popover"
                        data-mdb-placement="top"
                        data-mdb-content="<span class='text-light'>External Link</span>"
                        data-mdb-trigger="hover"
                        data-mdb-html="true" target="_blank" class="btn exBut"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square db"></i>
                    </a>
                    <a href="files/403.pdf" data-mdb-toggle="popover"
                        data-mdb-placement="top"
                        data-mdb-content="<span class='text-light'>Download</span>"
                        data-mdb-trigger="hover"
                        data-mdb-html="true" class="btn exBut"><i class="fa-solid fa-cloud-arrow-down db"></i>
                    </a>
                  </div>
            </a>
            <div id="demo" class="card-body collapse">
                <div>
                    <img src="img/model.png" alt="" class="float-start m-4" style="height: 150px; width: 250px;">
                </div>
                <div class="pb-3">
                    <p class="fw-bold">Abstract</p>
                    <p class="justify-content">Skin cancer is one of the most frequent types of cancer in the world. Malignant skin cancers can become life-threatening if not treated in an early stage.
                        Some skin cancers like Squamous Cell Carcinoma (SCC), Melanoma (MEL), and Basal Cell Carcinoma (BCC) are always malignant and can cause fatal damage to 
                        the skin. Therefore, early identification is essential for minimizing the harm. This study uses transfer learning and explores the famous pre-trained model, 
                        Xception, with necessary fine tuning to classify eight types of skin cancers. During the training of the proposed model, data augmentation 
                        techniques are used to introduce diversity in the training phase. The proposed method is tested on the International Skin Imaging Collaboration 
                        (ISIC) 2019 dataset. It exhibits better results than similar studies which can help early detection of malignant skin cancers.</p>
                </div>
                
            </div>
        </div>

    </section>
    

    <!-- Contacts -->
    <section id="contacts">
    <footer class="foot text-white">
        <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="container p-4 pb-0 con">
                    <h3>Contact Me</h3> 
                    <hr style="width: 90%;">
                    <div>
                        <i class="fa-solid fa-envelope d-inline-block"></i>
                        <p class="d-inline-block ms-2 contact">samiasharnami225@gmail.com</p>
                    </div>
                    <div style="margin-top: -5px;">
                        <i class="fa-sharp fa-solid fa-phone d-inline-block"></i>
                        <p class="d-inline-block ms-2 contact">+8801763-873861</p>
                    </div>
                    <div style="margin-top: -5px;">
                        <i class="fa-sharp fa-solid fa-location-dot d-inline-block"></i>
                        <p class="d-inline-block ms-2 contact">Chhatian, Mirpur, Kushtia, Khulna</p>
                    </div>
                    
                </div>
              </div>
              
              <div class="col-md">
                <!-- Grid container -->
                <div class="container p-4 pb-0 con">
                    <h3>Follow Me on</h3>
                    <hr class="hor" style="width: 90%;">
                <!-- Section: Social media -->
                <div class="mb-4 mt-4">
                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://github.com/shorna33" role="button"
                    ><i class="fab fa-github git"></i
                    ></a>                    

                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.facebook.com/shorna225" role="button"
                    ><i class="fab fa-facebook-f fb"></i
                    ></a>
            
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://twitter.com/SamiaShorna1" role="button"
                    ><i class="fab fa-twitter tw"></i
                    ></a>
            
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.instagram.com/shorna.1" role="button"
                    ><i class="fab fa-instagram insta"></i
                    ></a>
            
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.linkedin.com/in/samia-sharnami-7b11b11ab" role="button"
                    ><i class="fab fa-linkedin-in linked"></i
                    ></a>
                </div>               
                <!-- Section: Social media -->
                </div>
                <!-- Grid container -->
              </div>
            </div>
          </div>
        
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright: Samia Sharnami
        </div>
        <!-- Copyright -->
      </footer>    
    </section>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- js aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000
        });

        
        // Home section Animation
        const text = document.querySelector('.sec-text');

        const textLoad = () => {
            setTimeout(() => {
                text.textContent = 'Programmer';
            }, 0);
            setTimeout(() => {
                text.textContent = 'Full-stack Developer';
            }, 4000);
        }

        textLoad();
        setInterval(textLoad, 8000);

        // var headBg = document.getElementById('bg-image')
        // window.addEventListener('scroll', function() {
        //     headBg.style.opacity = 1 - +window.scrollY/550+''
        //     headBg.style.top = +window.scrollY+'px'
        //     headBg.style.backgroundPositionY = - +window.scrollY/2+'px'
        // })
    </script>
    <script src="index.js" type="text/javascript"></script>
</body>
</html>
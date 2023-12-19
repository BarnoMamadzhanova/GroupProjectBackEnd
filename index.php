<?php 
session_start();
$loc = "";
require_once "components/navbar.php";
require_once 'components/db_connect.php';


$sql = "SELECT * FROM `users` WHERE `status` = 'TUTOR'";
$result = mysqli_query($conn, $sql);
$tutors = "";


if ($result) {
    while ($tutor = mysqli_fetch_assoc($result)) {

        $tutors .= " 
       
        <div class='swiper-slide'>
        <div class='swiper-wrapper swiperGrid'>
        <div class='swiperImgContainer'>
        <img src='assets/{$tutor['image']}' class='d-block carouselImg' alt='...'>
        </div>
            <div class='carousel_text'>
                <a href='#'><h2 class='py-3 fw-bold'>{$tutor['firstName']} {$tutor['lastName']}</h4></a>
                <p class='fw-light'>{$tutor['profile_info']}</p>
            </div>
        </div>
    </div>
        
        ";

    }

} else {
  
    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/rootstyles.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/a32278c845.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    


    
</head>
<body>

    <div class="about_wrapper">
        <div class="about_container">
        <p class="mb-4">
            <div class="text">
            <h1 style="font-weight: 700;">About Us</h1>
            <br>
            <p class="fw-light">
                Established in 2021, Modern Tuition is dedicated to providing a top-tier education at an affordable rate for all families.
            </p>

            <p class="mb-4 fw-light">
                Our team comprises more than 70 exceptionally skilled tutors, each thoroughly vetted through DBS checks and interviews, ensuring your peace of mind.
            </p>

            <p class="mb-4 fw-light">
                We specialize in online and in-person tuition, offering homeschooling services across all age groups and subjects. Additionally, we provide targeted GCSE revision courses for Mathematics, English, and Science.
            </p>

            <a href="#" class="btn btn-warning">Learn more</a>

            </div>
        </div>
        <div class="about_container" class="laptop">
            <img src="assets/laptop.svg" alt="">
        </div>
    </div>

    <div class="services_wrapper">
    <div class="container px-4 py-5" id="featured-3">
    <h1 style="font-weight: 700;">Features</h1>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3">
        <i class="ri-book-read-line dashboard-icon"></i>
        </div>
        <h3 class="fs-2 text-body-emphasis">Courses</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link text-decoration-none">
          Call to action
          <i class="ri-arrow-drop-right-line"></i>
        </a>
      </div>
      <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3">
        <i class="ri-building-line dashboard-icon"></i>
        </div>
        <h3 class="fs-2 text-body-emphasis">Universities</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link text-decoration-none">
          Call to action
          <i class="ri-arrow-drop-right-line"></i>
        </a>
      </div>
      <div class="feature col">
      <div class="d-inline-flex align-items-center justify-content-center fs-2 mb-3">
      <i class="ri-question-answer-line"></i>        
        </div>
        <h3 class="fs-2 text-body-emphasis">Reviews</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <a href="#" class="icon-link text-decoration-none">
          Call to action
          <i class="ri-arrow-drop-right-line"></i>
        </a>
      </div>
    </div>
  </div>
</div>


<div class="uni_wrapper">
<div class="uni_flex">
<img src="assets/Logo_Anglo.png" alt="">
<img src="assets/Logo_Charles.svg" alt="">
<img src="assets/Logo_CTU.png" alt="">
<img src="assets/Logo_Life.png" alt="">
<img src="assets/Logo_NY.jpg" alt="">
</div>

</div>


 <!-- Swiper -->
 <div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <?php echo $tutors?>
  
   
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div> 
  </div>


    

<div class="review_wrapper">
<div class='container py-5'>
            <div class='row align-items-md-stretch'>
                <div class='col-md-4 mt-2'>
                    <div class='h-100 p-4 text-bg-dark rounded-3'>
                        <h2>Lorem</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In tempore aperiam totam minima adipisci, architecto voluptas? Necessitatibus molestiae alias nobis a unde cupiditate sit. Quod tempore pariatur facilis magni debitis.</p>
                    </div>
                </div>
                <div class='col-md-4 mt-2'>
                    <div class='h-100 p-4 text-bg-secondary rounded-3'>
                        <h2>Lorem</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In tempore aperiam totam minima adipisci, architecto voluptas? Necessitatibus molestiae alias nobis a unde cupiditate sit. Quod tempore pariatur facilis magni debitis.</p>
                    </div>
                </div>
                <div class='col-md-4 mt-2'>
                    <div class='h-100 p-4 bg-body-tertiary border rounded-3'>
                        <h2>Lorem</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In tempore aperiam totam minima adipisci, architecto voluptas? Necessitatibus molestiae alias nobis a unde cupiditate sit. Quod tempore pariatur facilis magni debitis.</p>
                    </div>
                </div>
            </div>
        </div>
</div>



<?php
require_once "components/footer.php";

?>


    
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true, // Enable infinite loop
  });
</script>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

     
</body>
</html>
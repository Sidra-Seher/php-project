<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style/edu.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style/owl.carousel.min.css">            
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="css/88412c26e3.js"></script>   
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <?php include_once "eduheader.php"?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12 flex-column justify-content-center align-items-center mt-5">
           <center>
           <h2 class="text align-items-center">TESTINOMIALS</h2>
          <p class="text align-items-center">Upcoming Education Events to feed your Brain</p>
           </center>
        </div>
      </div>
    </div>
  </section>
  <style>
    .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
      }

      .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 320px;
        height: 440px;
        box-shadow: 0px 15px 50px rgba(0,0,0,0.2);
        filter:blur(4px);
        background:#d1ebff;
        border-radius:10px;
      }
      .swiper-slide-active{
        filter:blur(0px);
        background:#fff;

      }
      .testimonialBox{
        position: relative;
        width:100%;
        padding: 40px;
        padding-top:90px ;
        color:#999;
      }
      .testimonialBox>.quote{
        position: absolute;
        width:15%;
        top:20px;
        right:30px;
        opacity: 0.2;
      }
      .testimonialBox>.details{
        display: flex;
        align-items:center;
        margin-top:20px;
      }
      .testimonialBox>.details>.imgBoxi{
        position: relative;
        width: 60px;
        height:60px;
        border-radius:50%;
        overflow: hidden;
        margin-right:10px;
      }
      .testimonialBox>.details>.imgBoxi>img{
        position: absolute;
        top:0;
        left:0;
        width: 100%;
        height:100%;
        object-fit:cover;
      }
      .swiper-3d .swiper-slide-shadow-left
      .swiper-3d .swiper-slide-shadow-right{
        background-image:none;
      }


  </style>
    <section class="try mt-5">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="testimonialBox">
            <img src="assets/images/img.jpg" class="quote" alt="">
            <div class="content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nihil nulla minima quisquam ullam voluptas, aliquam earum consectetur. Dolores, totam nemo ipsa autem minus ab nulla qui quidem eligendi deserunt.</p>
              <div class="details">
                <div class="imgBoxi">
                  <img src="assets/images/img2.jpg" alt="" style="width: 100%; height:100%; border-radius:50%;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonialBox">
            <img src="assets/images/img.jpg" class="quote" alt="">
            <div class="content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nihil nulla minima quisquam ullam voluptas, aliquam earum consectetur. Dolores, totam nemo ipsa autem minus ab nulla qui quidem eligendi deserunt.</p>
              <div class="details">
                <div class="imgBoxi">
                  <img src="assets/images/img2.jpg" alt="" style="width: 100%; height:100%; border-radius:50%;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonialBox">
            <img src="assets/images/img.jpg" class="quote" alt="">
            <div class="content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nihil nulla minima quisquam ullam voluptas, aliquam earum consectetur. Dolores, totam nemo ipsa autem minus ab nulla qui quidem eligendi deserunt.</p>
              <div class="details">
                <div class="imgBoxi">
                  <img src="assets/images/img2.jpg" alt="" style="width: 100%; height:100%; border-radius:50%;">
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
       
        
      </div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 2,
          slideShadows: true,
        },
        loop: true,
        // pagination: {
        //   el: ".swiper-pagination",
        // },
      });
    </script>
    </section>
    <?php include_once "edufooter.php"?>
<script src="assets/js/script.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="bootstrap.js.min.js"></script>

</body>
</html>
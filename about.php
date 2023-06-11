<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>At LearnFusion, we are dedicated to transforming education through our exceptional online learning platform. With a wide range of courses, expert instructors, and innovative learning tools, we provide a dynamic and engaging educational experience for students worldwide. Our commitment to excellence, flexibility, and affordability makes LearnFusion the ideal choice for individuals seeking high-quality education that fits their busy lives. Join us on LearnFusion and unlock your full learning potential today.</p>
         <a href="courses.php" class="inline-btn">Our Courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>1k+</h3>
            <span>Online Courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>25k+</h3>
            <span>Brilliants Students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>5k</h3>
            <span>Expert Tutors</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Job Placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>LearnFusion has been a game-changer for me. The platform offers a diverse range of courses, and the instructors are incredibly knowledgeable and passionate about their subjects. The interactive learning tools and resources provided have enhanced my understanding and made the learning process enjoyable. I highly recommend LearnFusion to anyone looking for a top-notch online education experience.</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Sanjog Regmi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I'm amazed by the level of support and personalized attention I've received from LearnFusion. The instructors are always available to answer questions and provide guidance, and the online community of fellow learners has been a great source of motivation and collaboration. The flexibility to study at my own pace has allowed me to balance my education with other commitments. LearnFusion truly puts the student's success at the forefront.</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Ashok GC</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I've tried several online learning platforms, but LearnFusion stands out for its user-friendly interface and intuitive navigation. The platform is well-organized, making it easy to access course materials and track progress. The quality of the content is exceptional, and the interactive assessments have helped me gauge my understanding effectively. LearnFusion has made my learning journey seamless and enjoyable.</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Prashant Rana Magar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>LearnFusion offers a wide variety of courses that cater to diverse interests and skill levels. As a lifelong learner, I appreciate the depth and breadth of the course offerings, allowing me to explore new subjects and expand my knowledge base. The instructors are experts in their fields and provide valuable insights and practical applications. LearnFusion has become my go-to platform for continuous learning.</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Bhupraj Tamang</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>One of the standout features of LearnFusion is its affordability. The platform offers high-quality education at a fraction of the cost compared to traditional institutions. As a student on a budget, this has been a significant advantage for me. The courses are just as rigorous and comprehensive, if not more, than those offered at brick-and-mortar institutions. LearnFusion has made quality education accessible to everyone.</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Kishan Jaiswal</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>LearnFusion has truly empowered my career growth. The platform offers industry-relevant courses and certifications that have boosted my professional profile and opened doors to new opportunities. The practical skills I've acquired through LearnFusion have been directly applicable to my job, giving me a competitive edge in the workplace. I'm grateful for the valuable learning experience and the impact it has had on my career trajectory.</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Ronish Shrestha</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>
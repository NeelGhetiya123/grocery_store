<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>At our organic grocery store, we carefully select the freshest, pesticide-free produce from local farmers who share our commitment to sustainable agriculture. We guarantee 100% organic certification on all products, ensuring you receive the highest quality foods for your family. Our transparent supply chain and competitive pricing make healthy eating accessible to everyone, while our knowledgeable staff provides personalized recommendations to meet your dietary needs.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Our store offers a comprehensive selection of certified organic products including fresh seasonal produce, sustainably sourced meats and seafood, dairy alternatives, gluten-free options, and pantry essentials. We provide convenient home delivery and flexible pickup options, weekly subscription boxes with seasonal highlights, nutrition workshops, and cooking demonstrations. Our eco-friendly packaging and zero-waste initiatives reflect our commitment to environmental stewardship while our loyalty program rewards your healthy choices.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I've been shopping here for over a year and the quality of produce is consistently excellent. Their seasonal vegetable boxes have introduced my family to new favorites we wouldn't have tried otherwise!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vikram Sharma</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>As someone with multiple food allergies, I appreciate how knowledgeable the staff is about ingredients. They always help me find safe alternatives and their gluten-free selection is the best in town.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priya Malhotra</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>The home delivery service has been a lifesaver for our busy family. Orders are always accurate, produce is fresh, and the delivery staff is courteous. Worth every penny of the subscription!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Raj Kapoor</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I switched to organic foods after health concerns, and the staff here guided me through the transition. Their weekly cooking demonstrations taught me how to prepare nutritious meals my kids actually enjoy!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ananya Singh</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>The quality of their meat and seafood department is unmatched. Everything is sustainably sourced, and you can taste the difference. Their butcher even provides custom cuts and helpful cooking advice.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Arjun Pate</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I love their commitment to reducing waste. They allow me to bring my own containers for bulk items, and their minimal packaging approach aligns perfectly with my environmental values. A truly conscious business!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Deepika Verma</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
<?php 
  $error='';
  if($_GET['id']==1){
    $error='faild to connect to the database';
  }elseif($_GET['id']==2){
    $error='404 PRODUCT NOT FOUND';
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARTI'ZEN</title>
    <link rel="stylesheet" href="styles.css">
    <script src="./script.js"></script>

</head>
<body>
  
   <!--navbar-->
   <nav class="navbar glass" style="height: 70px;">
        <!-- <span style="padding-top: 45px;"><a href="#home"><img class="img2"src="../assets/logo.png" width="40" style="margin: -25px -20px"> -->
        <h1 class="logo">ARTI'ZEN</h1></a></span>
        <ul class="nav-links">
            <li><a href="../landing page/index.html" class="cir_border">Home</a></li>
            <li><a href="../landing page/index.html" class="cir_border">Values</a></li>
            <li><a href="../landing page/index.html" class="cir_border">Best selection</a></li>
            <li><a href="../products/products.php" class="cir_border">Products</a></li>
            <li><a href="../landing page/index.html" class="cir_border">Add Product</a></li>
            <li><a href="../landing page/index.html" class="cir_border">About</a></li>
            <li><a href="../landing page/index.html" class="cir_border">Feedback</a></li>
        </ul>
        <img src="../assets/menu-btn.png" alt="" class="menu-btn">
    </nav>
    <!--navbar-->
    <!--home-->
    <section id="home">

</head>
<body>
<div class="text">
  <div>ERROR</div>
  <h1><?php echo $error?></h1>
  <hr>
  <div>Product Not Found</div>
</div>

<div class="astronaut">
  <img src="https://images.vexels.com/media/users/3/152639/isolated/preview/506b575739e90613428cdb399175e2c8-space-astronaut-cartoon-by-vexels.png" alt="" class="src">
</div>
    
    
    
    
    
    <footer>
  <div class="container">
    <div class="row">
      <div class="col">
        <h3>About Us</h3>
        <p>Artizen supports craftsmen in selling their handmade products, promotes traditional craftsmanship, and fosters appreciation for the value and beauty of handmade goods.</p>
      </div>

      <div class="col">
        <h3>Contact Us</h3>
        <p> Phone: +216 99 120 507<br> Email: contact@artizen.com</p>
      </div>
    </div>
    <hr>
    <p>&copy; 2023 ARTI'ZEN, Inc. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>
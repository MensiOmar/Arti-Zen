<?php
    require('C:\xampp\htdocs\Arti-Zen\backend\forms\order.php');
?>	



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="./styleOrderPage.css">
    <script src="./script.js"></script>

</head>

<body>
    <!--Navbar-->
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
    <!--end_Navbar-->
    <section>
        <div id="header">
            <h1>Order for: <?php echo "$prod_name" ?></h1>
            <h2>Price: <?php echo"$prod_price"?></h2>
        </div>
        <form name="myForm" onsubmit="return validateForm()" method="post" action="orderPage.php?id=<?php echo $id_prod?>">
            <label for="name" class="small-input-1">
                <span class="input-title">Name:</span>
                <input type="text" class="short_input text-input" name="name" placeholder="Enter your name">
                <span id="nameError" class="error"></span>
            </label>
            <label for="email" class="small-input-2">
                <span class="input-title">Email:</span>
                <input type="email" class="short_input text-input" name="email" placeholder="Enter your Email">
                <span id="emailError" class="error"></span>
            </label>
            <label for="phone-number" class="small-input-1">
                <span class="input-title">Phone Number:</span>
                <input type="text" class="short_input text-input" name="phoneNumber" placeholder="Enter your phone number">
                <span id="phoneNumberError" class="error"></span>
            </label>
            <label for="adress" class="small-input-2">
                <span class="input-title">Adress:</span>
                <input type="text" class="short_input text-input" name="adress" placeholder="Enter your adress">
                <span id="adressError" class="error"></span>
            </label>
            <label for="message" class="big-input ">
                <span class="input-title">Description:</span>
                <textarea name="message" id="message" cols="30" rows="10" class="text-input"
                    placeholder="Any particular notes..."></textarea>
                    <span id="noteError" class="error"></span>
            </label>
            <button type="submit" name="submit" class="btn">Submit</button>

        </form>
    </section>
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
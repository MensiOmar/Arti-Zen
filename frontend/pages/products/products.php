<?php
include('../../../backend/forms/fetch_products.php');
?>	



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="./products.css">
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
        <header>
            <h1>Our available products</h1>
            <p>Make your order now</p>
        </header>
        <div id="products">
            <?php foreach($all_products as $product):?>
                <div class="plan">
		<div class="inner">
			<span class="pricing">
				<span>
					$<?php echo $product['price_prod'] ?> <small>/ piece</small>
				</span>
			</span>
			<p class="title"><?php echo $product['name_prod'] ?></p>
			<p class="info"><?php echo $product['description_prod'] ?></p>
			<ul class="features">
                <li>
					<span><strong>Used material: </strong> <?php echo $product['material_prod'] ?></span>
				</li>
				<li>
					<span><strong>Creator:</strong> <?php echo $product['name_creator'] ?></span>
				</li>
				<li>
					<span><strong>Creator Phone: </strong> <?php echo $product['tel_creator'] ?></span>
				</li>
				<li>
					<span><strong>Creator Email: </strong> <?php echo $product['mail_creator'] ?></span>
				</li>
                
			</ul>
			<div class="action">
			<a class="button" href="../order page/orderPage.php?id=<?php echo $product['id_prod'] ?>">
				Order Now
			</a>
			</div>
		</div>
	</div>
            
            <?php endforeach;?>
        </div>
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
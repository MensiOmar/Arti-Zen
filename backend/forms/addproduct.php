<?php
    // connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'artizen');

	// check connection
	if(!$conn){
		//echo 'Connection error: '. mysqli_connect_error();
        header('../../frontend/pages/error page/index.php?id=1');
	}else{

        if(isset($_POST['submit'])){
            $crafterName=mysqli_real_escape_string($conn, $_POST["crafterName"]);
            
            $productName=mysqli_real_escape_string($conn,$_POST["productName"]);
    
            $material=mysqli_real_escape_string($conn,$_POST["material"]);

            $price=mysqli_real_escape_string($conn,$_POST["price"]);

            $email=mysqli_real_escape_string($conn,$_POST["email"]);

            $phoneNumber=mysqli_real_escape_string($conn,$_POST["phoneNumber"]);

            $description=mysqli_real_escape_string($conn,$_POST["description"]);


            
            $sql="INSERT INTO `products` ( `name_prod`, `name_creator`, `tel_creator`, `mail_creator`, `material_prod`, `price_prod`, `description_prod`) VALUES ( '$productName', '$crafterName', '$phoneNumber', '$email', '$material', '$price', '$description')";

            $result=mysqli_query($conn,$sql);

            if($result){
                header('Location: ../../frontend/pages/landing page/index.html');
            }else{
                //echo 'query error: '. mysqli_error($conn);
                header('../../frontend/pages/error page/index.php?id=1');

            }
        }else{
            header('Location: ../../frontend/pages/landing page/index.html');

        }
    }


?>
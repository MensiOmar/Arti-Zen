<?php
    echo"<br/><br/><br/><br/><br/><br/>";

    // connect to the database
if(!isset($_GET["id"])){
    //echo"THERE IS NO ID";
    header('Location: ../error page/index.php?id=2');

}else{
    $conn = mysqli_connect('localhost', 'root', '', 'artizen');
    //print_r($conn);
    if(!$conn){
		//echo 'Connection error: '. mysqli_connect_error();
        header('Location: ../error page/index.php?id=1');
    }else{
        $id_prod=mysqli_real_escape_string($conn,$_GET["id"]);
        $sql_get_prod="SELECT name_prod,price_prod FROM products WHERE id_prod=$id_prod ";
        $result_get_product=mysqli_query($conn,$sql_get_prod);
        $ordered_product= mysqli_fetch_all($result_get_product, MYSQLI_ASSOC);
        if(!$ordered_product){
            //echo "404 PRODUCT NOT FOUND";
            header('Location: ../error page/index.php?id=2');

        }else{
            $prod_name=$ordered_product[0]['name_prod'];
            $prod_price=$ordered_product[0]['price_prod'];
            //echo"$prod_name"; 
            if(isset($_POST['submit'])){
            
                
                $name=mysqli_real_escape_string($conn, $_POST["name"]);
            
                $email=mysqli_real_escape_string($conn,$_POST["email"]);
                
                $adress=mysqli_real_escape_string($conn,$_POST["adress"]);            
            
                $phoneNumber=mysqli_real_escape_string($conn,$_POST["phoneNumber"]);
            
                $description=mysqli_real_escape_string($conn,$_POST["message"]);
                
                $sql_adding_order="INSERT INTO `orders` (`name_buyer`, `mail_buyer`, `adress_buyer`, `tel_buyer`, `notes_buyer`, `id_prod`) VALUES ('$name', '$email', '$adress', '$phoneNumber', '$description', '$id_prod')";
                
                $result_adding_order=mysqli_query($conn,$sql_adding_order);
            
                if($result_adding_order){
                    header('Location: ../landing page/index.html');
                    
                }else{
                    //echo 'query error: '. mysqli_error($conn);
                    header('../../frontend/pages/error page/index.php?id=1');

                }
            }
        }
        
    }
}
?>
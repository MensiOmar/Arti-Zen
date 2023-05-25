<?php
    // connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'artizen');

	// check connection
	if(!$conn){
		//echo 'Connection error: '. mysqli_connect_error();
        header('../../frontend/pages/error page/index.php?id=1');

	}else{
        $sql_get_all_products="SELECT * FROM products";
        $result_get_all_products=mysqli_query($conn,$sql_get_all_products);
        $all_products=mysqli_fetch_all($result_get_all_products, MYSQLI_ASSOC);

    }
?>
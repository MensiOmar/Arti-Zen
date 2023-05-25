<?php
    // connect to the database
	$conn = mysqli_connect('localhost', 'root', '', 'artizen');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}else{

        if(isset($_POST['submit'])){
            $name=mysqli_real_escape_string($conn, $_POST["name"]);
    
            $email=mysqli_real_escape_string($conn,$_POST["email"]);
    
            $description=mysqli_real_escape_string($conn,$_POST["message"]);
            
            $sql="INSERT INTO feedback(name_sender,mail_sender,text_feedback) VALUES ('$name','$email','$description')";

            $result=mysqli_query($conn,$sql);

            if($result){
                header('Location: index.html');
            }else{
                echo 'query error: '. mysqli_error($conn);
            }
        }else{
            header('Location: index.html');
        }
    }


?>
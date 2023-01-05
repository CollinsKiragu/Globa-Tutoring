<!DOCTYPE html>
<html>
 
<head>
    <title>Application page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => globaltutoring
        $conn = mysqli_connect("localhost", "root", "", "globaltutoring");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 10 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$address = $_REQUEST['address'];
		$message = $_REQUEST['message'];
         
        // Performing insert query execution
        // here our table name is apply
        $sql = "INSERT INTO games  VALUES ('$name',
            '$email','$address','$message')";
        
		 // ini_set('dispaly_errors',1);
		// error_reporting(E_ALL);
		//$from ="globaltutoring8@gmail.com";
		//$to= $email;
		//$subject="Email";
		//$message="<h3>Thank you for your application " .$name.". We will get back to you soon.";
		//$headers="From:" .$from;
         
		//mail($name,$email,$phone,$startdate,$gender);
		//if(mail($to,$subject,$message,$headers)){
        //header("Location:index.html");
		//}
		//else
        //echo("mail send failed");
		
		//$to = "kiragucollins@gmail.com";
		//$subject = "My subject";
		//$txt = "Hello world!";
		//$headers = "From: globaltutoring8@gmail.com";

		//mail($to,$subject,$txt,$headers);
		
			
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for your application " .$name.". We will get back to you soon.</h3>";
			header('Location: thanksapply.html');
            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
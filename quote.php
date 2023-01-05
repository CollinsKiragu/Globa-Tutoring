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
         
        // Taking all 6 values from the form data(input)
        $fname =  $_REQUEST['fname'];
		$lname =  $_REQUEST['lname'];
		$phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
		$course = $_REQUEST['course'];
        $message =  $_REQUEST['message'];
		
         
        // Performing insert query execution
        // here our table name is apply
        $sql = "INSERT INTO quote  VALUES ('$fname',
            '$lname','$phone','$email','$course','$message')";
        
	
			
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for your request " .$name.". We will get back to you soon.</h3>";
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
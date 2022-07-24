<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "construction_company";
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$phone=$_POST['phone'];
		$email = $_POST['email'];
		$sms =$_POST['sms'];
		
		

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	
	}
		$sql = "INSERT INTO projects ( name , surname , phone , email , sms ) VALUES ('$name','$surname','$phone','$email','$sms')";
		if (mysqli_query($conn, $sql)) {
		  echo "New record created successfully";
		}
		 else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	

	
mysqli_close($conn);

?>

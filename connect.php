<?php
    $Name = $_POST['Name'];
    $Email = $POST['Email'];
    $Password = $POST['Password'];
    $Number = $POST['Number'];

    // Database connection

    $conn = new mysqli('localhost', 'root', '','test');

    if($conn->connect_error){
        echo "$conn->connect_error";
        die('Connect Failed :' .$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(Name,Email,Password, Number) 
                values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $Name, $Email, $Password, $Number);
	    $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }
?>




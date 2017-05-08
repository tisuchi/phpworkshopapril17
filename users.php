<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplearning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "SELECT * FROM users";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "SL :" . $row["sl"] . "<br/>";
        echo  "Username: " . $row["username"]. " <br/>";
        echo "<hr/>";
    }

    //echo "There is some data";
} else {
    echo "0 results";
}




if ($_POST['submitbutton']) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];


	$ins = "INSERT INTO users (username, password)
VALUES ('$username', '$password')";

if ($conn->query($ins) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $ins . "<br>" . $conn->error;
}




}




?>



<form action="" method="POST">
	Username: <input type="text" name="username"> <br/>
	Password: <input type="password" name="password"><br/>

	<input type="submit" name="submitbutton" value="Post Now">
</form>


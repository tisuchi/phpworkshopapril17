<?php 

$username = "iium";
$password = "password";


if ($_POST['username'] == $username) {
	echo "This username already taken.";
} else{
	echo "Registration successfully";
}




/*
$username = $_POST['username'];

echo $username;*/
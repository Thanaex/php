<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "michalg";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$fav_language=$_POST["fav_language"];

$sql="INSERT INTO MyGuests (firstname, lastname, fav_language)
                            VALUES('$firstname', '$lastname','$fav_language')";
if (mysqli_query($conn, $sql)) {
    echo "New record created succesfully";
} else {
    echo "Error:" . $sql . " <br> " . mysqli_error($conn);
}
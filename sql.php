<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "michalg";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sprawdzamy, czy żądanie przyszło metodą POST (czyli czy formularz został wysłany)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Pobranie i zabezpieczenie danych
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$name', '$lastname', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<form action="form_post.php" method="post">

    Name: <input type="text" name="name"><br>

    Last name: <input type="text" name="lastname"><br>

    E-mail: <input type="text" name="email"><br>

    <input type="submit" value="Send">

</form>
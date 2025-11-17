<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Błąd przy połączeniu: " . mysqli_connect_error());
} 
echo "Połączono<br>";

$database = "goetel_makow";
$sql = "CREATE DATABASE IF NOT EXISTS $database";

if (mysqli_query($conn, $sql)) {
    echo "Stworzono bazę danych<br>";
} else {
    echo "Błąd przy tworzeniu bazy: " . mysqli_error($conn) . "<br>";
}

if (mysqli_select_db($conn, $database)) {
    echo "Baza $database wybrana<br>";
} else {
    die("Błąd przy wybieraniu bazy: " . mysqli_error($conn));
}

$sql = "CREATE TABLE IF NOT EXISTS `5TIA1` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(30),
    numer INT(3)
)";
if (mysqli_query($conn, $sql)) {
    echo "Tabela stworzona<br>";
} else {
    echo "Błąd przy tworzeniu tabeli: " . mysqli_error($conn) . "<br>";
}

$sql = "INSERT INTO `5TIA1` (imie, numer) VALUES ('Michał', 7)";
if (mysqli_query($conn, $sql)) {
    echo "Dane dodane<br>";
} else {
    echo "Błąd przy dodawaniu danych: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>

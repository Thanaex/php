<?php
$sql = "Select id, firstname, lastname FROM MyGuests";
$reuslt = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_row($result)) {
        echo "<li>" . $row[0]. "" .
            $row[1]. "" . $row[2]. "</li>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}
?>
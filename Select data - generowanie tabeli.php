<?php
$sql = "Select id, firstname, lastname FROM MyGuests";
$reuslt = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row=mysqli_fetch_row($result)) {
        echo "<tr><td>" . $row[0]. "</td><td>" .
        $row[1]. "</td><td>". $row[2]. "</td><td>";
    }
} else {
    echo "0 results";
}
?>
<style>
table, td {
    border: 1px solid red;
}
</style>
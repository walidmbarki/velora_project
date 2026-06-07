<?php

include 'db.php';

$result = mysqli_query($conn, "DESCRIBE products");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['Field'] . "<br>";
}

mysqli_close($conn);

?>
<!-- php query example -->
<?php
include("database.php");

$sql = "SELECT * FROM users";
// this query function returns an object
$result = mysqli_query($conn, $sql);

// function that returns how many rows are in our results
if (mysqli_num_rows($result) > 0) {
    // this function returns the next available row within our object. If you need data from more than one row, use a while loop
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
    ;
} else {
    echo "No user found";
}
// close the connection
mysqli_close($conn);

<!-- php insert into database example -->
<?php
include("database.php");

$username = "Patrick";
$password = "rock3";
$hash = password_hash($password, PASSWORD_DEFAULT);

// write a query within a variable. Users is the database. User and password are columns.
$sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$hash')";

// try blocks allow you to give back different messages if the code breaks / fails
try {
    // submit the query. Pass in the connection and the query.
    mysqli_query($conn, $sql);
    echo "User is now registered";
}
// if we encounter a problem, let's catch it
catch (mysqli_sql_exception) {
    echo "Could not register user";
}
// close the connection
mysqli_close($conn);

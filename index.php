
<?php
    include("database.php");

    // write a query within a variable. Users is the database. User and password are columns.
    $sql = "INSERT INTO users (user, password)
            VALUES ('Spongebob', 'pineapple1')";

    // submit the query. Pass in the connection and the query.
    mysqli_query($conn, $sql);

    // close the connection
    mysqli_close($conn);
?>
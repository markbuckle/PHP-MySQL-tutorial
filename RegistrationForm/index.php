<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- from our server SGV, we will get the php_self key which will give us the name of the file -->
    <!-- This is vulnerable to cross site scripts so enclose it within a filter like htmlspecialchars -->
    <form action=" <?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <h2>Welcome to Fakebook!</h2>
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="register">
    </form>
</body>

</html>
<?php
// check the request method key to see if its equal to post.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // filter the username and password in case they contain a malicious script
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)) {
        echo "please enter a username";
    } elseif (empty($password)) {
        echo "Please enter a password";

    } else {
        // if the username and password isn't missing, well want to use a hash variable 
        $hash = password_hash($password, PASSWORD_DEFAULT);
        // store our sql query within a variable
        $sql = "INSERT INTO users (user, password)
                VALUES ('$username','$hash')";
        try {
            // initiate our query
            mysqli_query($conn, $sql);
            // let the user know they registered successfully
            echo "You are now registered!";
        } catch (mysqli_sql_exception) {
            echo "That username is taken";
        }

    }
}
mysqli_close($conn);
?>
# PHP/MySQL-tutorial

<h3>Extensions</h3>

1) PHP Intelephense
2) Live Server
3) PHP Server

Access your localhost by typing localhost into your webbrowser. You can access your VS code project by typing localhost/[enter your projects folder name]. Add the Live Server extension on Google chrome if you want your VS Code updates to happen live.

<h3>Shortcuts</h3>
Type "!" and press tab for boiler plate code.

All PHP code is contained within <?php ?>. You can also write html, css and javascript alongside PHP.

<h3>Variables</h3>

A variable is a reusable container that holds dataincludng strings, integers, floats and booleans

$_GET and $_POST are two special php variables used to collect data from an HTML form i.e. <form action="some_file.php" method="get">. 

$_GET means data is appended to the url.
<li>It is not secure; don't use any sensitive informaiton.</li>
<li>There is a character limit</li>
<li>bookmarks are possible w/values.</li> 
<li>Get requests can be cached</li>
<li>Get requests are better for a search page.</li>

$_POST means the data is packaged inside the body of the HTTP request. 
<li>It is more secure</li>
<li>there is no data limit</li>
<li>you cannot bookmark</li>
<li>Post requests are better for submitting credentials.</li>

<h3>Sanitize & Validate Input</h3>

Sanitizing and validating user input is always a good idea in case the rare user decides to input malicious content.

You can **sanitize** your code with functions like: 
<li>$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);</li>
<li>$age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);</li>
<li>$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);</li>

You can **validate** your code with tests like: 

<li>$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);</li>
<li>$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);</li>

More details on this can be found at [2:44:30](https://youtu.be/zZ6vybT1HQs?feature=shared&t=9870)

<h3>Cookies</h3>

To print values from cookies, do as follows:

setCookie(key, value, time() + time til expiry, path);

foreach($_COOKIE as $key => $value){
  echo"{$key} = {value} <br>";
  }

<h3>Sessions</h3>

A session is a super global varable (SGB) used to store information on a user to be used across multiple pages. A user is assigned a session-id ex. login credentials. Any login websites i.e. Facebook use sessions.

Place session_start(); in a php tag before the rest of your code.

You can then create named value pairs within our SGB by using i.e. $_SESSION["username"] = "Buckle23" then echo $_SESSION["username"];

<h3>Server</h3>

The server SGB contains headers, paths and script locations. The entries in this array are created by the web server. It shows nearly everything you need to know about the current web page env.

To access the server SGB type $_SERVER["PHP_SELF"];

<h3>Password Hashing</h3>

Password hasing is transforming sensitive data (password) into letters, numbers, and/or symbols via a mathematical process (similar to encryption). It hides the original data from 3rd parties.

Use the password_has($password, PASSWORD_DEFAULT); function.

<h3>PHP connect to MySQL</h3>



<h3>Tutorial video</h3>

[PHP Full Course](https://www.youtube.com/watch?v=zZ6vybT1HQs)

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

<h3>Sanitize / Validate Input</h3>

You can sanitize your code with functions like the filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS) function. 

More details on this can be found at [2:44:30](https://youtu.be/zZ6vybT1HQs?feature=shared&t=9870)

<h3>Tutorial video</h3>

[PHP Full Course](https://www.youtube.com/watch?v=zZ6vybT1HQs)

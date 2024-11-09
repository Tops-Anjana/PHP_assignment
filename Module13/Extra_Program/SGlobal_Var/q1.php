<!--$_GET and $_POST: Create two separate forms: one that uses the $_GET method
 and one that uses $_POST. Display the difference in the URL and how data is passed. -->
 
<!-- GET Method -->
<html>
<body>
<form action="#" method="GET">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
</body>
</html>
<!-- POST Method  -->
<html>
<body>
<form action="#" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</body>
</html>

<!-- difference in $get and $_post is 
 -> $_get shows the data in URL and $_post do not show data in URL. -->
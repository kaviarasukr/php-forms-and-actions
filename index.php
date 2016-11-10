<!DOCTYPE html>
<html>
<head>
<title> Simple PHP contact form with MySQL and Form Validation </title>
</head>
<body>
<h3> Contact US</h3>
<form action="thankyou.php" method="post">
  <span><label>Name:</label>
  <input type="text" name="u_name" required></span><br>
 
  <span><label>Email:</label>
  <input type="email" name="u_email" required></span><br>

<span><label>Subject:</label>
  <input type="text" name="subj" required></span><br>

<span><label>Message:</label>
  <input type="text" name="message" required></span><br>
<input type="submit" value="Submit"><br>
</form>
</body>
</html>
<!doctype html> 
<!-- ACCOUNT CREATION -->
<head>
<title>IndianaDesigner.com</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<p>
<!-- CREATE USER FROM FORM -->


<!--Account Creation Form ... sending to self even if bad programming style --> 
<form action="new.php" method="post">
<b><i>SIGN UP! </i></b><br />
Business/Individual Name: <br />
<input type="text" name="business" placeholder="Business/Individual Name"/> <br />
Location:<br />
<input type="text" name="location" placeholder="Location"/> <br />
Description:<br />
<textarea name="description" placeholder="Description">
</textarea><br />
Email:<br />
<input type="text" name="email" placeholder="example@example.com" /><br />
Select a username: <br />
<input type="text" name="username" placeholder="username" /><br />
Selct a password: <br />
<!-- POSSIBLY ADD ENTOPY AND SECURE PASSWORD CHECK -->
<input type="password" name="password1" placeholder="password"/> <br />
Confirm password: <br />
<input type="password" name="password2" placeholder="repeat password"/> <br />
<!-- NEED TO VERIFY -->
<input type="submit" value="Submit"/>
</form>

<a href="index.html">Home</a> <a href="search.php">Search</a> <a href="job.html">Submit a Job</a> <a href="about.html">About</a>  
</p>
</body>
</html>

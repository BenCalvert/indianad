<!doctype html> 
<!-- ACCOUNT CREATION -->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Create Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<!--link rel="stylesheet" type="text/css" href="CSS/style.css" media="handheld" /-->
<!-- ATTEMPT TO MAKE MOBILE STYLESHEET -->
</head>

<body>
<p>
<div id="header">
<h1> INDIANADESIGNER.COM </h1>
</div>
</p>

<div id="content">
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
</p>
</div>

<nav>
<p>
<a href="index.html">Home</a>-<a href="search.php">Search</a>-<a href="job.html">Submit a Job</a>-<a href="about.html">About</a>  
</p>
</nav>

</body>
</html>

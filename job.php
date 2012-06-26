<!DOCTYPE HTML>
<!-- CLIENT "SUBMIT A JOB" PHP (DON'T SEND TO SELF)-->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>IndianaDesigner.com</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<!--link rel="stylesheet" type="text/css" href="CSS/style.css" media="handheld" /-->
<!-- ATTEMPT TO MAKE MOBILE STYLESHEET -->
</head>

<body>

<body>
<p>
<div id="header">
<h1> INDIANADESIGNER.COM </h1>
</div>
</p>

<div id="content">
<p>
<?php
echo $_POST["title"];
echo $_POST["location"];
echo $_POST["description"];
echo $_POST["price1"];
echo $_POST["price2"];
echo $_POST["email"];

/*
<!--input type="submit" value="Submit"/>
*/


?>
</p>
</div>

<nav>
<p>
<a href="index.html">Home</a>-<a href="search.php">Search</a>-<a href="job.html">Submit a Job</a>-<a href="about.html">About</a>  
</p>
</nav>

</body>
</html>



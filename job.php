<!DOCTYPE HTML>
<!-- CLIENT "SUBMIT A JOB" PHP (DON'T SEND TO SELF)-->
<head>
</head>
<body>
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
<a href="index.html">Home</a> <a href="search.php">Search</a> <a href="job.html">Submit a Job</a> <a href="about.html">About</a>   
</body>
</html>

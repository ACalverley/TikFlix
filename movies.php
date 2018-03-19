<!DOCTYPE html>
<html>
<head>
<link href="movies.css" type="text/css" rel="stylesheet" >
</head>
<body>
<h2>Movie Information</h2>
<table>
<tr><th>Title</th><th>Director</th></tr>

<?php
$title = $_POST["title"];                      
$director = $_POST["director"];
echo "<h3>You are looking for $title by $director</h3>";

#run a query to get the project names and locations of the person's department.
$dbh = new PDO('mysql:host=localhost;dbname=omts_db', "root", "");
#user name and password for mysql when using XAMPP is "root" and a blank password
$rows = $dbh->query("select title, director from movie where title = $title and director = $director);
foreach($rows as $row) {
		echo "<tr><td>.$row[0].</td><td>.$row[1]."</td></tr>";
    }
    $dbh = null;

?>

</table>


 </body>
</html>
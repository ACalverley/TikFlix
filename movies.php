<?php
  include("header.php");
?>

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
		$rows = $dbh->query("select * from movie");
		foreach($rows as $row) {
			echo "$row[0] $row[1] $row[2] $row[3] $row[4] $row[5] $row[6] $row[7] $row[8] $row[9]";
		}
		$dbh = null;

		?>

		</table>


<?php
  include("footer.php");
?>
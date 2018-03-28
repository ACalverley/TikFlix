<?php
	$reservations = userConnection()->query("select * from reserved where accountNum='".$_SESSION["accountNum"]."'");
?>
<?php
	echo "<h3>Hi </h3>"; // Put account Name here
	echo "<h4>Here are your past purchases for movies no longer showing:</h4>";
	foreach($reservations as $reserved){
		$movie = userConnection()->query("select * from movie where title='$reserved[2]'")->fetch(PDO::FETCH_ASSOC);
		$today = date("Y-m-d H:i:s");
		$date = $movie['endDate'];
		if ($date < $today) {
			echo "<h4>";
			echo $movie['title'];
			echo "</h4>";
			echo "<br>";
		}
		//query in movie for end data
		//if end date has passed display, else do nothing
		//echo $_SESSION['numTix'];
	}
?>
<?php
	$userConnection = new PDO('mysql:host=localhost;dbname=omts_db', "root", "");
	$showings = $userConnection->query("select * from showing");
?>
<?php
	echo "<h2>All Movies:</h2>";
    echo "<p></p>";
	foreach($showings as $showing){
?>

    	<form action="user.php" class="form-inline" method="post">
<?php
			echo "<h4>";
			echo "$showing[4] | Playing at: $showing[0] | Address: $showing[2] | Seats Available: $showing[1] | Theatre Number:  $showing[3]";
?>
			<br>	
			<button name="confirmPurchase" class="btn btn-sm btn-info" value="<?php echo base64_encode(serialize($showing)); ?>">Purchase Tickets</button>
		</form>
<?php
		echo "</h4>";
		echo "<br>";
	}
?>
<h1>purchase</h1>


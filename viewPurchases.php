<?php
	$userConnection = new PDO('mysql:host=localhost;dbname=omts_db', "root", "");
	$reservations = $userConnection->query("select * from reserved");
?>
<?php
	echo "<h3>Hi </h3>"; // Put account Name here
	echo "<h4>Here are your reserved tickets</h4>";
	foreach($reservations as $reserved){
?>

    	<form action="user.php" class="form-inline" method="post">
<?php
			echo "<h4>";
			echo "$reserved[6] tickets for $reserved[2] | Start Time: $reserved[1] | Address: $reserved[5]";
?>
			<br>	
			<button name="cancelPurchase" class="btn btn-sm btn-info" value="<?php echo base64_encode(serialize($reserved)); ?>">Cancel Purchase</button>
		</form>
<?php
		echo "</h4>";
		echo "<br>";
		//echo $_SESSION['numTix'];
	}
?>
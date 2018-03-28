<h1>Members</h1>
<?php
	echo $_SESSION["name"];
	$members = userConnection()->query("select name, address, email, phone from customer");

	echo "<h3>Hi "; 
	echo $_SESSION["name"];
	echo "!</h3>"; // Put account Name here
	echo "<h4>Here are all customers in the database</h4>";
	foreach($members as $member){
?>
    	<form action="user.php" class="form-inline" method="post">
<?php
			echo "<h4>";
			echo "$member[0] | $member[2] | $member[1] | $member[3]";
?>
			<br>	
			<button name="deleteCustomer" class="btn btn-sm btn-info" value="<?php echo base64_encode(serialize($member)); ?>">Delete Member</button>
			<button name="tickets" class="btn btn-sm btn-info" value="<?php echo base64_encode(serialize($member)); ?>">Show Rental History</button>
		</form>
<?php
		echo "</h4>";
		echo "<br>";
	}
?>
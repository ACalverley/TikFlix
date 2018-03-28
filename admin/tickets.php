<?php
	$tickets = userConnection()->query("select accountNum, name, address, email, phone from customer");
?>
<h1>Tickets</h1>
<?php
	$complexes = userConnection()->query("select accountNum, name, address, email, phone from customer");
?>
<h1>Complexes</h1>
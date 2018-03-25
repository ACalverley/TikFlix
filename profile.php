<?php
	$userConnection = new PDO('mysql:host=localhost;dbname=omts_db', "root", "");
	$customer = $userConnection->query("select * from movie");
?>
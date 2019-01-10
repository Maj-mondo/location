<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_location;charset=utf8','mondo','0000');

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
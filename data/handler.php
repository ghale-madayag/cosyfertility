<?php
	// error_reporting(E_ALL ^ E_DEPRECATED);
	// error_reporting(0);
	try {
		$handler = new PDO('mysql:host=localhost;dbname=cosy_db','cosy_db_admin','L08hh0OP^.o{');
		$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();
		die();	
	}
?>
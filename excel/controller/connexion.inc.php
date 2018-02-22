<?php 
	try
	{
	$connexion=new PDO('mysql:host=localhost;dbname=caisse;charset=UTF8','root','');
	} 
	catch (Exception $e) 
	{
		die('error:'.$e->getMessage());
	}

 ?>
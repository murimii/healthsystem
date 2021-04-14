<?php




	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "adminlogin";
try {
	$handle = new PDO("mysql:host=$servername; dbname=$dbname", "$username", "$password");
	
    $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"connected";
}
catch(PDOException $e) {
	die("Connection failed"); 
		$e->getMessage();
}

?>

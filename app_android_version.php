<?php 

//PDO
$servername = "mysql.myWeb.com";
$username = "myWeb2017";
$password = "myWeb2017!23";
$DBName = "myWeb2017";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$DBName", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "PDO:Connected successfully"."<br>"; 
	//
	$sth = $conn->prepare("SELECT * FROM app_android");
	$sth->execute();
	
	/*
	// Fetch all of the remaining rows in the result set 
	print("Fetch all of the remaining rows in the result set:\n"."<br>");
	$result = $sth->fetchAll();
	print_r($result);
	print(" <br> =========== <br> ");
	print("App id = ".$result[0]["app_id"]."<br>");
	print("App version = ".$result[0]["app_version"]."<br>");
	*/

	/*
	// Fetch all of the values of the first column
	$result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
	var_dump($result);
	*/

	// return JSON
	$result = $sth->fetchAll();
	$data = array('app_id' => intval($result[0]["app_id"]), 'app_version' => intval($result[0]["app_version"]));
	
	//header('Content-type: text/javascript');
	//header('Content-Type: application/json');
	header('Content-type:application/json;charset=utf-8');
	header("Access-Control-Allow-Origin: *"); // CORS enabled
	
	$json_string = json_encode($data,JSON_PRETTY_PRINT);
	echo $json_string;

	// close connection
	$conn = null;
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}




?>
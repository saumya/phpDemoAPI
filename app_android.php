<?php 

echo $_SERVER['HTTP_HOST'].'<br>'; // myWeb.biz

/*
// MySQL
//$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$link = mysql_connect('mysql.myWeb.biz', 'wptestwebsite', 'wptestwebsite!23');

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
// finally Close it
mysql_close($link);
*/

/*
// MySQLi
$servername = "mysql.myWeb.biz";
$username = "wptestwebsite";
$password = "wptestwebsite!23";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "MySQLi:Procedural:Connected successfully". '<br>';
// finally close it
$result = mysqli_close ($conn);
if($result == 1){
	echo "Connection is closed successfully"."<br>";
}
*/

/*
// MySQLi OOP
$servername = "mysql.pivotaldesign.biz";
$username = "wptestwebsite";
$password = "wptestwebsite!23";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "MySQLi:OOP:Connected successfully"."<br>";
// finally close it
$conn->close();

if($conn){
	echo "MySQLi:OOP:Connection is closed successfully"."<br>";
}
*/

/*
//PDO
$servername = "mysql.myWeb.com";
$username = "myWeb";
$password = "myWeb!23";
*/

//PDO
$servername = "mysql.myWeb.com";
$username = "myWeb2017";
$password = "myWeb2017!23";

try {
	$conn = new PDO("mysql:host=$servername;dbname=myWeb2017", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "PDO:Connected successfully"; 
	// close connection
	$conn = null;
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}




?>
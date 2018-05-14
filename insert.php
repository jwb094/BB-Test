<?php
$dsn = 'mysql:dbname=bb;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$comms = $_POST['comms'];
$password = $_POST['password'];

$strSql = "INSERT INTO users VALUES(null,'$name','$email','$gender','$comms','$password')"; 

if ($dbh->query($strSql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $strSql . "<br>";
}
?>
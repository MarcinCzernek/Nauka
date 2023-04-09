<?php

$server = 'localhost';
$user = 'root';
$dbName = 'academia';
$pass = '';

try{
	$conn = mysqli_connect($server, $user, $pass, $dbName);
}catch(mysqsli_sql_exception){
	echo "Warning";
}

if($conn){
    echo "You are connected";
}else{
    echo "You are not connected";
}



?>
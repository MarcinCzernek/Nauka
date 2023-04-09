<?php 
include ("db_con.php");

$name = "Random name";
$password = "Qwerty";
$hash_pass= password_hash($password, PASSWORD_DEFAULT);
$add_user = "INSERT INTO students (name,pass) VALUES ('$name','$hash_pass')";

//$view_user = "SELECT * FROM students WHERE name= 'Jan Nowak'";
$view_users = "SELECT * FROM students";

$result = mysqli_query($conn, $view_users);
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	echo $row['id'] . '<br>';
	echo $row['name'] . '<br>';
	echo $row['pass'] . '<br>';
	echo $row['reg_date'] . '<br>';
	};
}else{
	echo 'No data';
}
try{
	mysqli_query($conn, $add_user);
}catch(mysqli_sql_exception){
	echo "Could not register user";
}

mysqli_close($conn);


?>
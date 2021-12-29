<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/style.css"/>
</head>

<body>
<?php include "includes/header.php"?>
<h2>Czas na naukę :-)</h2>
</body>
<form method="POST" action="index.php">
Username:<input type="text" name="username"></br>
Password:<input type="password" name="password"></br>
    <button name="login" type="submit" class="btn">Log in</button></br>
    <p>Do you accept the rules of website?</p>
    Yes<input type="checkbox" name="therms[]" value="Yes"><br>
    No<input type="checkbox" name="therms[]" value="No">

</form>
<br><br>
<form method="post" action="index.php">
Student:<input type="text" name="students">
    <input type="submit">
</form>

<?php
error_reporting(E_ALL & ~E_WARNING);

function cube ($num){
    return $num * $num * $num;
}
$array = array(43,54,75,23,12,87,12);
for($i = 0  ; $i  < count($array); $i++){
    echo "$array[$i]<br>" ;

}

$cubeResult = cube(4);
echo "$cubeResult<br>";
$students = array("Martin"=>"A+","Tomek"=>"C-","Anna"=>"B+","Jan"=>"E+");
echo $students[$_POST['students']];?>

<?php include "includes/footer.php"?>
</html>
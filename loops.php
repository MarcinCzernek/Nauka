<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <h2>Pętle i BREAK, CONTINUE, GO TO</h2>
<form method="get" >
<input name="num" type="number">
    <button>OK</button>
</form>
    <?php
    if(isset($_GET['num']) and is_numeric($_GET['num'])) {
        $num = $_GET['num'];

        echo "<br>a = $num<br><br>";

        echo "<br><strong>Pętla for</strong></br>";

        $i = $num;
        for (; $i > 0; $i--) {

            if($i % 2 == 1){
                goto lab1;
            }
            echo "Liczba parzysta - $i<br>";
            $i--;
            continue;
            lab1:
            echo "Liczba nieparzysta - $i<br>";
            $i--;
        }

        echo "<br><strong>Pętla do while</strong></br>";

        $i = $num;
        do {
            if($i % 2 == 1){
                goto lab2;
            }
            echo "Liczba parzysta - $i<br>";
            $i--;
            continue;
            lab2:
            echo "Liczba nieparzysta - $i<br>";
            $i--;
        } while ($i > 0);

        echo "<br><strong>Pętla while</strong></br>";

        $i = $num;
        while ($i > 0) {

            echo "$i<br>";
            $i--;

        }
    }
    ?>
</center>

</body>
</html>
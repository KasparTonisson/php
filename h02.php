<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 2</title>
</head>
<body>

    <div class="container">
        <h1>Harjutus 2</h1>

        <?php
            //Ülesanne 2 Kaspar Tõnisson 24.01.2023
            
            $x = 5;
            $y = 8;

            $liit = "$x + $y ";
            $lahuta = "$x - $y ";
            $korda = "$x * $y ";
            $jaga = "$x / $y ";
            $jaak = "$x % $y ";

            echo "$liit = ", $x + $y, "<br>";
            echo "$lahuta = ", $x - $y, "<br>";
            echo "$korda = ", $x * $y, "<br>";
            echo "$jaga = ", $x / $y, "<br>";
            echo "$jaak = ", $x % $y, "<br>";
            
            $mil = 654312;
            $cm = $mil / 10;
            $m = $mil / 1000;

            $vormindatud = sprintf("Vastuse: %0.2f" ,$cm);
            $vormindatud2 = sprintf('Vastuse: %0.2f',$m);
            echo $vormindatud, "<br>";
            echo $vormindatud2, "<br>";

            $a = 6;
            $b = 4;
            $c = 10;

            $P = $a + $b + $c;
            $S = ($a * $b) /2;

            echo "Kolmnurga ümbermõõt on $P <br>";
            echo "Kolmnurga pindala on $S <br>";
        ?>

    </div>

</body>
</html>
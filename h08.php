<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>Harjutus 8</title>
</head>
<body>

    <div class="container">
        <h1>Harjutus 8</h1>
        <h3>Kuupäev</h3>

        <?php

            $sp = mktime(0,0,0,03,2023);
            echo date("d.m.Y G:i <br>");
            
            $mv = date("Y") - 2005;
            echo ("<br> See aasta saan $mv aastaseks");
            


            function kool(){
                $tana = time();
                $kooli = strtotime("June 30");
                $paevi = ceil(($kooli - $tana) / 86400);
                return $paevi;
            }
            $paevi = kool();
            echo "<br>2023 kooliaasta lõpuni on $paevi päeva";

            function aastaaeg(){
                $kuu = (int)date("m");

                if ($kuu >= 12 || $kuu <=2){
                    $season = "winter";
                }
                else if ($kuu >=3 && $kuu <= 5){
                    $season = "spring";
                }
                else if ($kuu >= 6 && $kuu<=8){
                    $season = "summer";
                }
                else if ($kuu >=9 && $kuu <= 11){
                    $season = "autumn";
                }

                echo "<br><img src='aastaajad/$season.jpg' alt='$season'>";
            }
            echo aastaaeg();

        ?>

        

    
</div>
</body>
</html>
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

    <title>Harjutus 6</title>
</head>
<body>

    <div class="container">
        <h1>Harjutus 6</h1>
        <h3>Genereeri</h3>

        <?php

            for ($number=1;$number<=100;$number++){
                echo $number.".\n";
                if($number%10==0){
                    echo "<br>";
                }
            }

        ?>

        <h3>Rida</h3>

        <?php

            for($torn=1; $torn<=5; $torn++){
                echo "*";
            }

        ?>

        <h3>Rida2</h3>

            

        <?php

            for($joon=1; $joon<=5; $joon++){
                echo "*<br>";
            }

        ?>
        <h3>Ruut</h3>

            <form action="#" method="get">
                Sisesta ruudu suurus <input type="number" name="suurus">
                <input type="submit" value="Sisesta">

            </form>

            <?php

                $m = $_GET["suurus"];
                for($i=0; $i< $m;$i++){
                    echo str_repeat("*",$m);
                    if($m>=0){
                        echo "<br>";
                    }
                }

            ?>

            <h3>Kahanev</h3>

                        

            <?php

                $nr = 11;
                
                while ($nr>1){
                    $nr -= 1;
                    echo $nr."\n <br>";
                }

            ?>

            <h3>Kolmega jagunevad</h3>
            
            
            <?php

                for ($i = 1; $i <= 100; $i++) {
                    if ($i % 3 == 0) {
                    echo $i . " ";
                    }
                }

            ?>


            <h3>Massiivid ja tsüklid</h3>


            <?php

                $poisid = array("Peedu", "Sten", "Roger", "Lauri", "Erik", "Kristo");
                $tudrukud = array("Mia", "Eliise", "Marika", "Laura", "Ada", "Hadiza");


                $arv = count($tudrukud);
                $arv = $arv - 1;
                $suvaline = rand(0,$arv);
                
                
                
                $arv1 = count($poisid);
                $arv1 = $arv1 - 1;
                $suvaline1 = rand(0,$arv1);

                echo ("Paarid on ");

                echo $tudrukud[$suvaline]," ja ",$poisid[$suvaline1]

            ?>


                <h3>Massiivid ja tsüklid (Bonus)</h3>


    </div>


    

</body>
</html>
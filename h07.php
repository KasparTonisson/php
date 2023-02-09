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

    <title>Harjutus 7</title>
</head>
<body>

    <div class="container">
        <h1>Harjutus 7</h1>
        <h3>Tervitus</h3>

        <?php

            function tervita(){
                return "Tere päikesekene!";
            }
            echo tervita();

        ?>

        <h3>Uudiskiri</h3>

        <form action="#" method="get">
        Meiliaadres <input type="email" name="t1">
        <input type="Submit" value="Saada">
        </form>

    

        <h3>Kasutajanimi ja email</h3>

        <form action="#" method="get">
        Kasutajanimi <input type="text" name="nimi">
        <input type="Submit" value="Saada">
        </form>
        <?php
            if(!empty($_GET["nimi"])){
            function kasutaja(){

                $n = $_GET["nimi"];
                $n = strtolower($n);
                echo $n,"@hkhk.edu.ee <br>";

                $suvnr = rand(1000000,9999999);
                echo "Teie suvaline 7 numbriline kood on: ",$suvnr,"<br>";

            }
            function password_generate($c){
            $parool = "1234567890ABCDEFGHIJKLMNOPQRSTVWXYZabcdefghijklmnopqrstuvwxyz";
                return substr(str_shuffle($parool),0, $c);
                
            }
            echo kasutaja();
            echo "Tähtede ja numbritega kood on: ".password_generate(7),"<br>";
        }
        ?>
        <h3>Arvud</h3>

        <form action="#" method="get">
        Arv 1 <input type="number" name="arv1">
        Arv 2 <input type="number" name="arv2">
        Samm <input type="number" name="samm">
        <input type="Submit" value="Saada">
        </form>

        <?php
            if(!empty($_GET['arv1']) && !empty($_GET['arv2']) && !empty($_GET['samm'])){
            $arv1 = $_GET["arv1"];
            $arv2 = $_GET["arv2"];
            $samm = $_GET["samm"];
            

            foreach (range($arv1, $arv2, $samm) as $nr){
                echo ("$nr ");
            }
        }

        ?>

        <h3>Ristküliku pindala</h3>

        <form action="#" method="get">
        Külg 1 <input type="number" name="kulg1">
        Külg 2 <input type="number" name="kulg2">
        
        <input type="Submit" value="Saada">
        </form>

        <?php
            if (!empty($_GET["kulg1"]) && !empty($_GET["kulg2"])){
            $kulg1 = $_GET["kulg1"];
            $kulg2 = $_GET["kulg2"];

            $pindala = $kulg1*$kulg2;
            echo ("Ristküliku pindala on: $pindala");
            }
        ?>

        <h3>Isikukood</h3>

        <form action="#" method="get">
        Isikukood <input type="number" name="kood">
        </form>

        <?php

        function isikukood(){
            if (!empty($_GET["kood"])){
            $isik = $_GET["kood"];

            if(strlen($isik) == 11){
                echo ("Tegemist on õige isikukoodiga <br>");
            }
            else {
                echo ("Tegemist ei ole isikukoodiga <br>");
            }

            if ($isik[0] %2 == 0){
                echo ("Tegemist on naissoost isikuga <br>");
            }
            else {
                echo ("Tegemist on meessoost isikuga <br>");
            }


            if ($isik[0] == 3){
                echo ("Sünniaasta on: 19$isik[1]$isik[2] <br>");
                echo ("Sünnikuupäev on: $isik[5]$isik[6].$isik[3]$isik[4]");
            }
            else if ($isik[0] == 5){
                echo ("Sünniaasta on: 20$isik[1]$isik[2] <br>");
                echo ("Sünnikuupäev on: $isik[5]$isik[6].$isik[3]$isik[4]");
            }
            else if ($isik[0] == 4){
                echo ("Sünniaasta on: 19$isik[1]$isik[2] <br>");
                echo ("Sünnikuupäev on: $isik[5]$isik[6].$isik[3]$isik[4]");
            }
            else if ($isik[0] == 6){
                echo ("Sünniaasta on: 20$isik[1]$isik[2] <br>");
                echo ("Sünnikuupäev on: $isik[5]$isik[6].$isik[3]$isik[4]");
            }
        }
    }
        echo isikukood();

        ?>

        <h3>Head Mõtted</h3>

        <?php

            function motted(){

                $alus = array("Roger", "Peedu", "Lauri");
                $oeldis = array("sittus", "sõi", "sõitis");
                $sihitis = array("koodi", "putru", "kraavi");

                $kogus = count($alus);
                $suvaline = rand(0,$kogus-1);

                $kogus1 = count($oeldis);
                $suvaline1 = rand(0,$kogus-1);

                $kogus1= count($sihitis);
                $suvaline2 = rand(0,$kogus-1);

                echo ("$alus[$suvaline] $oeldis[$suvaline1] $sihitis[$suvaline2]");
                
                
            }
            echo motted();
        ?>

    
</div>0
</body>
</html>
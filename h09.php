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

    <title>Harjutus 9</title>
</head>
<body>

    <div class="container">
        <h1>Harjutus 9</h1>
        

        <form action="#" method="get">
        Nimi <input type="text" name="name">
        <input type="Submit" value="Saada">
        </form>

        <?php
            if (!empty($_GET["name"])){
            
            $nimi = strtolower($_GET["name"]);

            echo "Tere, ", ucfirst($nimi),"!";
            }
        ?>

        <form action="#" method="get">
        Sõna <input type="text" name="sona">
        <input type="Submit" value="Saada">
        </form>

        <?php

            
            function punkt($sona){
                $sona = strtoupper($sona);
                $sona1 = "";
                for ($i = 0; $i < strlen($sona); $i++){
                    $sona1 .= $sona[$i] . "."; 
                }
                return $sona1;
            }

            if(!empty($_GET["sona"])){
                $sona = $_GET["sona"];
                $sona1 = punkt($sona);
                echo $sona1;
            }

        ?>

        <form action="#" method="get">
        Lause <input type="text" name="lause">
        <input type="Submit" value="Saada">
        </form>

        <?php
            if(!empty($_GET["lause"])){
            $lause = $_GET["lause"];
            $lause1 = preg_split("/[^\w]*([\s]+[^\w]*|$)/", $lause, -1, PREG_SPLIT_NO_EMPTY);
            $pikkus = count($lause1) - 1;
            
            $lause1[$pikkus] = "#!?*!";
            echo "$lause1[0] $lause1[1] $lause1[$pikkus]";
            }
            
        ?>

        <form action="#" method="get">
        Eesnimi<input type="text" name="nimed"><br>
        Perenimi<input type="text" name="nimed1">
        <input type="Submit" value="Saada">
        </form>

        <?php
            if(!empty($_GET["nimed"]) && !empty($_GET["nimed1"])){

                $enimi = strtolower($_GET["nimed"]);
                $pnimi = strtolower($_GET["nimed1"]);
                $email = str_replace(array("Ä","Ö","Ü","Õ","ä","ö","ü","õ"), array("a","o","y","o","a","o","y","o"), $enimi . "." . $pnimi) . "@hkhk.edu.ee";
                echo $email;
            
            }
        ?>
        
            

        

    
</div>
</body>
</html>
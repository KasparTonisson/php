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

    <title>Harjutus 12</title>
</head>
<body>

    <div class="container">
        <h1>Harjutus 12</h1>
        <h3>Sõiduaaeg</h3>

        <?php

        function arvuta_aeg($start, $lopp){

            if(!empty($start) && empty($lopp)){
                return "Palun sisestage kellaajad!";
            }
            if (strlen($start) < 5 && strlen($lopp) < 5){
                return "Palun kasutage õiget vormindust (12:34)!";
            }
            $stardi_aeg = strtotime($start);
            $lopp_aeg = strtotime($lopp);
            if ($lopp_aeg <= $stardi_aeg) {
                return "Lõpp aeg ei tohi olla varem kui stardi aeg!";
            }
            $soit = $lopp_aeg - $stardi_aeg;
            $tunnid = floor($soit / 3600);
            $minutid = floor(($soit % 3600) / 60);
            return "Sõiduaeg oli $tunnid tundi ja $minutid minutit";
        } 
        
        ?>
        <form action="#" method="get">
        Stardiaeg <input type="text" name="start">
        Lõppaeg <input type="text" name="lopp">
        <input type="Submit" value="Saada">
        </form>

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "GET"){
                $start = $_GET["start"];
                $lopp = $_GET["lopp"];

                if(empty($start) && empty($lopp)){
                    echo ("Palun sisestage kellaajad!");
                } elseif (strlen($start) < 5 && strlen($lopp) < 5){
                    echo ("Palun kasutage õiget vormindust (12:34)");
                } else {
                    echo arvuta_aeg($start, $lopp);
                }
            }

        ?>

        <h3>Palkade võrdlus</h3>


        <?php

            $allikas = "tootajad.csv";
            $minu_csv = fopen($allikas, "r") or die("File-i ei saa avada");

            $header = fgetcsv($minu_csv, filesize($allikas), ";");
            $mpalk = [];
            $npalk = [];

            while (!feof($minu_csv)){
                $row = fgetcsv($minu_csv, filesize($allikas), ";");
                if (is_array($row) && $row[1] == "m"){
                    array_push($mpalk, $row[2]);
                } elseif (is_array($row) && $row[1] == "n"){
                    array_push($npalk, $row[2]);
                }
            }

            fclose($minu_csv);

            $mkesk = array_sum($mpalk) / count($mpalk);
            $nkesk = array_sum($npalk) / count($npalk);

            $msuur = max($mpalk);
            $nsuur = max($npalk);

            echo ("Meeste keskmine palk on: $mkesk €<br>");
            echo ("Naiste keskmine palk on: $nkesk €<br>");
            echo ("Meeste suurim palk on: $msuur €<br>");
            echo ("Naiste suurim palk on: $nsuur € <br>");

        ?>

        

    
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <?php
        $Külg1 = $_GET['t1'];
        $Külg2 = $_GET['t2'];
        $Kõrgus = $_GET['t3'];

        $tpindala = (($Külg1 + $Külg2) / 2) *2 ;
        $rumber = $Külg1 * 4 ;

        echo 'Tarpetsi pindala '.$tpindala.' cm2<br>';
        echo 'Rombi ümbermõõt '.$rumber.' cm<br>';
       
    ?>

   

</body>
</html>
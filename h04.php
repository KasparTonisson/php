<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Harjutus 4</title>
</head>
<body>

    <div class="container">
        <h1>Harjutus 4</h1>

        <h2>Jagamine</h2>

        <form action="h04.php" method="get">
        Arv 1 <input type="number" name="t1"><br>
        Arv 2 <input type="number" name="t2"><br>
        
        <input type="submit" value="Saada">
        </form>
        
        <?php
        
        if(!empty($_GET['t1']) && !empty($_GET['t2'])){

            $Arv1 = $_GET['t1'];
            $Arv2 = $_GET['t2'];
            $jaga = $Arv1 / $Arv2;
            echo "Jagamise vastus: $jaga";
        }
       
        ?>

        <form action="h04.php" method="get">
            Vanus 1 <input type="number" name="t3"><br>
            Vanus 2 <input type="number" name="t4"><br>
            
            <input type="submit" value="Saada">
            </form>

            <?php
        
        if(!empty($_GET['t3']) && !empty($_GET['t4'])){

            $Vanus1 = $_GET['t3'];
            $Vanus2 = $_GET['t4'];
            
            if ($Vanus1 == $Vanus2){
                echo "Isikud on sama vanad";
            }
            else if ($Vanus1> $Vanus2){
                echo "Isik 1 on vanem kui isik 2";
            }
            else{
                echo "Isik 2 on vanem kui isik 2";
            }
            
        }
       
        ?>
        
        <form action="h04.php" method="get">
            Külg 1 <input type="number" name="t5"><br>
            Külg 2 <input type="number" name="t6"><br>
            
            <input type="submit" value="Saada">
            </form>

        <?php

            if(!empty($_GET['t5']) && !empty($_GET['t6'])){

                $Külg1 = $_GET['t5'];
                $Külg2 = $_GET['t6'];
                
                if ($Külg1 == $Külg2){
                    echo "Teie sisestatud külje pikkused teevad ruudu";
                    
                }
                
                else{
                    echo "Teie sisestatud külje pikkused teevad ristküliku";
                }
                
            }

        ?>
        

    </div>

</body>
</html>
<?php 
   
    require_once("../model/Car.php");
    require_once("../model/Bike.php");
    require_once("../model/MotoWay.php");    
    require_once("../model/ResidentialWay.php");
    require_once("../model/PedestrianWay.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Basics | Part 3 : Abstraction</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>POO - Basics | Part 5: Implémentation d'interfaces</h1>
    <?php
        $myCar=new Car("red",4,"fuel");
        $myCar->setParkBrake(true);       
              
        try {
            echo $myCar->start();  
        } catch (Exception $e) {
            $myCar->setParkBrake(false);
            echo "<p>".$e->getMessage()."</p>";
            echo "<p>"."ok ! j'enleve le frein"."</p>";
        } finally {
            echo "<p>Ma voiture roule comme un donut !</p>"; 
        }

        echo "J'allume les phares de la voiture > ".$myCar->switchOn();
        echo "<br> Et puis j'éteinds > ".$myCar->switchOff();
    ?>
</body>
</html>
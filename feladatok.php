<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap-grid.min.css">
    <script src="js\bootstrap.bundle.js"></script>
</head>

<body>
    <h1>Feladatok</h1>
    <h2>3.2 feladat</h2>
    <form action="feladatok.php" method="get">
        <input type="number" name = "number"> <br>
        <input type="submit" class="btn btn-primary" name="gomb">

    </form>
    <?php
    
     $tomb = array(3, 4, 9);
     $szam = 5;
    
    if(isset($_GET['gomb'])){
        $szam = (int)$_GET["number"];
        for ($i = 0; $i < count($tomb); $i++) {
            if ($szam % $tomb[$i] == 0) {
                echo $szam . " osztható " . $tomb[$i] . "-vel";
            } else {
                echo $szam . " nem osztható " . $tomb[$i] . "-vel";
            }
            echo "<br>";
        }
    }
    ?>
     <h2>3.4 feladat</h2>
    <form action="feladatok.php" method="get">
        <input type="number" name = "tomeg"> <br>
        <input type="number" name = "magassag"> <br>
        <input type="submit" class="btn btn-primary" name="gomb2">

    </form>

    <?php 
    if(isset($_GET["gomb2"])){
        $a= (int)$_GET["tomeg"] / (((float)$_GET["magassag"] * (float)$_GET["magassag"])/ 10000);
        echo "Testtömeg index = " . $a;
        $tomb2 = array("0-16" => "sovány","16-16,99", "17-18,49", "18,5-24,99", "25-29,99", "30-34,99", "35-39,99");
         if($a > 0 && $a < 16){
            echo "Súlyosan sovány";
         }
         if($a > 16 && $a < 16.99){
            echo "Mérsékelten sovány";
         }
         if($a > 17 && $a < 18.49){
            echo "enyhe soványság";
         }
         if($a > 18.5 && $a < 24.99){
            echo "normális testsúly";
         }
         if($a > 25 && $a < 29.99){
            echo "túlsúlyos";
         }

    }
    ?>
    <h2>3.5</h2>
    <form action="feladatok.php" method="get">
        <p> Víz hőmérséklete:  <input type= "number" name="vizhomerseklet"></p>
        <input type = "submit" class="btn btn-primary" name = "gomb3">
    </form>

    <?php 
    if(isset($_GET["gomb3"]) && is_numeric($_GET["vizhomerseklet"])){
        $vizho = $_GET["vizhomerseklet"];
               if($vizho <= 0){
                  echo "A viz szilárd halmazállapotú";
               }
               if($vizho > 0 && $vizho < 100){
                echo "A viz folyékony halmazállapotú";
             }
             if($vizho >= 100){
                echo "A viz gőz halmazállapotú";
             }
    }
    ?>
    <h2>3.6</h2>
    <form action="feladatok.php", method = "get">
<p>1.pont X<input type = "number", name = "X1"> Y<input type = "number" name="Y1"></p>
<p>2.pont X<input type = "number", name = "X2"> Y<input type = "number" name="Y2"></p>
<input type = "submit" class="btn btn-primary" name = "gomb4">
    </form>
    <?php 
    if(isset($_GET["gomb4"])){
        $x1 = $_GET["X1"];
        $y1 = $_GET["Y1"];
        $x2 = $_GET["X2"];
        $y2 = $_GET["Y2"];
        $tavolsag = sqrt(pow($x1 - $x2, 2) + pow($y2 - $y1, 2));
        echo $tavolsag;
    }
    ?>
    <h2>3.7</h2>
    <form action="feladatok.php", method = "get">
        <p>Elért pont: <input type = "number", name = "pont" min="0" max="100"></p>
        <input type="submit" class = "btn btn-primary" name = "gomb5">
    </form>
<?php

if(isset($_GET["gomb5"])){
    $p = $_GET["pont"];
     $eredmeny = "";
        switch ($p) {
            case $p < 50:
                $eredmeny = "1-es";
                break;
                case $p >=50 && $p< 65:
                    $eredmeny = "2-es";
                    break;
                    case $p >=65 && $p< 80:
                        $eredmeny = "3-as";
                        break;
                        case $p >=80 && $p<90 :
                            $eredmeny = "4-es";
                            break;
                            case $p >= 90:
                                $eredmeny = "5-ös";
                                break;
            default:
                echo "hiba";
                break;
        }
        echo $eredmeny;
    
    
}
?>
<h2>3.8</h2>
<form action="feladatok.php", method = "get">
        <p>Búza mennyisége (tonna): <input type = "number", name = "buza"></p>
        <input type="submit" class = "btn btn-primary" name = "gomb6">
    </form>
<?php 
if(isset($_GET["gomb6"])){
    $rnd = rand(5,15);
    $hozam = $_GET["buza"] * $rnd;
    $eredmeny = "";
    switch ($hozam) {
        case $hozam >= 5 && $hozam <= 8:
            $eredmeny = "átlag alatti";
            break;
            case $hozam >= 9 && $hozam <= 12:
                $eredmeny = "átlagos";
                break;
                case $hozam >= 13 && $hozam <= 15:
                    $eredmeny = "átlag feletti";
                    break;
        default:
            echo "hiba";
            break;
    }
    echo $eredmeny;
}
?>
<h2>3.9</h3>
<form action="feladatok.php" type = "get">
<p>A kilélegzett CO2 mennyisége <input type="number" name = "CO2"></p>
<p>A kilélegzett O2 mennyisége <input type="number" name = "O2"></p>
<p><input type = 'text' id ='szuldatum' hidden></p>
<input type="submit" class="btn btn-primary" name = "gomb7">
</form>
<?php 
if(isset($_GET["gomb7"])){
    $CO2 = $_GET["CO2"];
    $O2 = $_GET["O2"];
    $RQ = pow($CO2, 2) / pow($O2 ,2);
    echo $RQ;
}

?>
<h2>3.10</h2>
<form action="feladatok.php" type = "get">
<p>A tanuló hiányzásainak száma <input type="number" name = "hianyszam"></p>
<input type="submit" class="btn btn-primary" name = "gomb8">
</form>
<?php 
if(isset($_GET["gomb8"])){
$hsz = $_GET["hianyszam"];
$buntetes = "";
if($hsz >= 10){
  echo "add meg a születési dátumodat: <input type = 'text' id ='szuldatum'><br>";
  switch ($hsz) {
    case $hsz == 10:
        $buntetes = "figyelmeztető";
        break;
        case $hsz > 10 && $hsz <= 12:
            $buntetes = "osztályfőnöki intő";
            break;
            case $hsz > 12 && $hsz <= 15:
                $buntetes = "igazgatói megrovás";
                break;
                case $hsz > 15:
                    $buntetes = "felfüggesztés";
                    break;
    default:
       echo "hiba";
        break;
  }
  echo $hsz . "db igazolatlan hiányzásod van a büntetésed: " . $buntetes;
}
else{
    echo "az igazolatlan hiányzásaid száma határértéken belül van";
}
}


?>
</body>

</html>
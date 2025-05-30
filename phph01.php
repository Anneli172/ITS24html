<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minu esimene php</title>
</head>
<body>
    <h1>Massiivid</h1>
    <?php
    $cars = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
        "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
        "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
        "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
        "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
        "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");
    // echo $cars[0]; printimiseks
    // print_r ($cars);
    // var_dump($cars) näitab sisu ehk kuvab väärtuse arusaadavalt
    $total_cars = count($cars); #koguarv

    for ($i=0; $i < $total_cars ; $i++) { 
        echo $cars[$i]."<br>";
    }
    
    

    
    ?>

    
    <h1>Matemaatika</h1>
    <form action="#" method="get">
        arv 1 <input type="number" name="nr1"><br>
        arv 2 <input type="number" name="nr2"><br>
        <input type="submit" value="Arvuta">
    </form>
    <?php
// Ülessane 3
if(!empty($_GET['nr1'])&& isset($_GET['nr2'])){
        $arv1 = $_GET['nr1'];
        $arv2 = $_GET['nr2'];
        #$tehe = $arv1 / $arv2;
        if ($arv2==0) {
            $tehe =  "Nulliga ei saa jagada";
        }else{
            $tehe = $arv1 / $arv2;
        }
        echo"Vastus: $tehe";
    

    }
    // echo $arv1, $arv2;

    echo"<br>";
    echo"<br>";
# Ülessanne 2
    $fname = "Mari";
    $lname = "Maasikas";
    $name = $fname." ".$lname;
    echo $fname." ".$lname;
    $age = 20;
    $height = 1.60;

echo "<p>".$name." on ".$age." aastane ja " .$height." pikk</p>";
// kui kasutan topelt", siis ei pea punkte panema
echo "<p> $name on $age aastane ja $height pikk</p>";

#ülessanne 1
    # tekst juttumärkidesse
        echo "<h1>Tere maailm</h1>";

    //    mitmerealine kommentaar Cnt+Ä
    

    echo "Dr.Alban - \"It's My Life\"";
    echo"<br>";
    echo 'Dr.Alban - "It\'s My Life"';

?>

</body>
</html>
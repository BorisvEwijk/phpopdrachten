<?php
/**
 * User: Boris van Ewijk
 * Date: 17-2-2020
 * Time: 14:30
 * File: Opdracht3.1.php
 */
?>
<!doctype html>
<html>
<head>
    <title>Index opdrachten</title>
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h2><a href="../index.php">Terug</a></h2>
</aside>
<main>
    <?php
    $evenement = "Elfstedentocht";
    $vertaling = "Alvestêdetocht";
    $afstand = "200";
    $tocht = "schaatstocht";
    $ijs = "natuurijs";
    $vereniging = "Koningklijke Vereniging De Friesche Elf Steden";
    $stad = "Leeuwarden";
    $provincie = "Friesland";
    $keergereden = "15";
    $eerstekeer = "1909";
    $aantal = "1";
    $verhaal1 = "De $evenement (Fries: $vertaling) is een $afstand kilometer
    lange $tocht over $ijs die wordt georganiseerd door de $vereniging. $stad, 
    de hoofdstad van $provincie, is start- en aankomstplaats. De $evenement is inmiddels 
    $keergereden maal verreden en werd voor het eerst in $eerstekeer gereden en wordt maximaal 
    $aantal keer per winter gehouden.";
    $verhaal2 = "De ".$evenement." (Fries: ".$vertaling.") is een ".$afstand." kilometer
    lange ".$tocht." over ".$ijs." die wordt georganiseerd door de ".$vereniging.". ".$stad.", 
    de hoofdstad van ".$provincie.", is start- en aankomstplaats. De ".$evenement." is inmiddels 
    ".$keergereden." maal verreden en werd voor het eerst in ".$eerstekeer." gereden en wordt maximaal 
    ".$aantal." keer per winter gehouden.";
    ?>

    <p><?php echo $verhaal1; ?></p>
    <p><?php echo $verhaal2; ?></p>
</main>
</body>
</html>
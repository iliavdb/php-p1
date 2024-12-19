<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Dobbelsteen</H1>
    
    <?php
$dobbelsteen = rand(1, 6);

if ($dobbelsteen == 6) {
    $resultaat = "Gefeliciteerd! Je hebt een 6 gegooid en een speciale prijs gewonnen!";
} elseif ($dobbelsteen >= 4) {
    $resultaat = "Je hebt een $dobbelsteen gegooid. Je hebt gewonnen!";
} else {
    $resultaat = "Je hebt een $dobbelsteen gegooid. Helaas, je hebt verloren.";
}
?>

</body>
</html>
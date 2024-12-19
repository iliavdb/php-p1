<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>dobbelsteenspel</center></h1>
    <?php
$spelResultaat = include('dobbelsteen.php');

echo "De waarde van de dobbelsteen: " . $spelResultaat['dobbelsteen'] . "<br>";
echo $spelResultaat['resultaat']; ?>

</body>
</html>
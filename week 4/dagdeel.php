<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$currentHour = date("H");
if ($currentHour >= 6 && $currentHour < 12) {
   echo "Het is ochtend.";
} elseif ($currentHour >= 12 && $currentHour < 18) {
   echo "Het is middag.";
} elseif ($currentHour >= 18 && $currentHour < 24) {
   echo "Het is avond.";
} else {
   echo "Het is nacht.";
}
?>
</body>
</html>
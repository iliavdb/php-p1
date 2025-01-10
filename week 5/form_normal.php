<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_form.php" method="POST">
        <label for="name">naam vliegtuig</label>
        <input type="text" id="name"> name="">
    <label for="available">ja</label>
    <input type="radio" id="available" name="available" value="ja">
    <label for="available">nee</label>
    <input type="radio" id="available" name="available" value="nee">
 
    <label for="stock">voorraad</label>
    <input type="number" id="stock" name="stock">
 
    <input type="submit" name="submit_form" value="toevoegen">
 
    </form>
 
    <?php
    if(isset)($_POST)["submit_form"]{
        $name = $_POST["name"];
        $stock = $_POST["stock"]
        $available = $_POST["available"]
?>
     <h1><?= $name?></h1>
     <p>><?= $stock?></p>
<p>><?=$available ?></p>
 
<?php
    }
</body>
 
</html>
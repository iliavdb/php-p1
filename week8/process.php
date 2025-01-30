<?php
session_start();
$errors = [];
$username = $email = $password = $gender = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"]) || strlen($_POST["username"]) < 3 || strlen($_POST["username"]) > 15) {
        $errors['username'] = "Gebruikersnaam moet tussen 3 en 15 tekens zijn";
    } else {
        $username = htmlspecialchars($_POST["username"]);
    }

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Ongeldig e-mailadres";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["password"]) || strlen($_POST["password"]) < 6) {
        $errors['password'] = "Wachtwoord moet minimaal 6 tekens zijn";
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }

    if (empty($_POST["gender"])) {
        $errors['gender'] = "Selecteer een geslacht";
    } else {
        $gender = htmlspecialchars($_POST["gender"]);
    }

    if (empty($_POST["country"])) {
        $errors['country'] = "Selecteer een land";
    } else {
        $country = htmlspecialchars($_POST["country"]);
    }

    if (empty($errors)) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    }
}
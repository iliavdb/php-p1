<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eenvoudig Contactformulier</title>
</head>
<body>
    <?php
    $nameError = $emailError = $messageError = "";
    $successMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"] ?? "");
        $email = htmlspecialchars($_POST["email"] ?? "");
        $message = htmlspecialchars($_POST["message"] ?? "");

        if (!$name) {
            $nameError = "Naam is verplicht.";
        }

        if (!$email) {
            $emailError = "E-mailadres is verplicht.";
        } elseif (!strpos($email, "@") || !strpos($email, ".")) {
            $emailError = "Ongeldig e-mailadres.";
        }

        if (!$message || strlen($message) < 10) {
            $messageError = "Bericht moet minimaal 10 tekens bevatten.";
        }

        if (!$nameError && !$emailError && !$messageError) {
            $successMessage = "Formulier succesvol verzonden!";
        }
    }
    ?>

    <form method="post" action="">
        <label>Naam:</label><br>
        <input type="text" name="name" value="<?php echo $_POST['name'] ?? ''; ?>"><br>
        <span style="color:red;"><?php echo $nameError; ?></span><br>

        <label>E-mailadres:</label><br>
        <input type="text" name="email" value="<?php echo $_POST['email'] ?? ''; ?>"><br>
        <span style="color:red;"><?php echo $emailError; ?></span><br>

        <label>Bericht:</label><br>
        <textarea name="message"><?php echo $_POST['message'] ?? ''; ?></textarea><br>
        <span style="color:red;"><?php echo $messageError; ?></span><br><br>

        <button type="submit">Verzenden</button>
    </form>

    <?php if ($successMessage): ?>
        <p style="color:green;"><?php echo $successMessage; ?></p>
    <?php endif; ?>
</body>
</html>

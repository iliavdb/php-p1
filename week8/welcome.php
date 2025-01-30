<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "U moet zich registreren.";
} else {
    echo "Welkom, " . htmlspecialchars($_SESSION['username']) . "!";
}
?>

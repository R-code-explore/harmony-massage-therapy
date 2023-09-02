<?php
session_start(); // Démarrer la session

// Détruire la session
session_destroy();

// Rediriger l'utilisateur vers la page de connexion
header("Location: ../admin.php");
exit;
?>
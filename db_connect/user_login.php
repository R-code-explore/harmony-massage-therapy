<?php
session_start(); // Démarrer la session

if(isset($_SESSION['user_id'])) {
    // Si l'utilisateur est déjà connecté, redirigez-le vers la page admin
    header("Location: admin-page.php");
    exit;
}

require("connect.php"); // Inclure le fichier de connexion à la base de données

// Fonction pour vérifier le nombre de tentatives de connexion
function checkLoginAttempts() {
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 0;
    }

    $max_attempts = 5; // Définissez le nombre maximal de tentatives

    if ($_SESSION['login_attempts'] >= $max_attempts) {
        return false; // L'utilisateur a dépassé le nombre maximal de tentatives
        
    }

    return true;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && checkLoginAttempts()) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Sélectionnez l'utilisateur à partir de la base de données
    $stmt = $db->prepare("SELECT id, `user-name`, pswd FROM users WHERE `user-name` = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['pswd'])) {
        // Si le nom d'utilisateur et le mot de passe correspondent, connectez l'utilisateur
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['login_attempts'] = 0; // Réinitialisation le compteur de tentatives en cas de connexion réussie
        header("Location: ../admin-page.php");
        exit;
    } else {
        // Sinon, la connexion a échoué
        $_SESSION['login_attempts']++;

        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
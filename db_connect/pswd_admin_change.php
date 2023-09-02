<?php
require_once 'connect.php'; // Inclure le fichier de connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer le nouveau mot de passe depuis le formulaire
    $newPassword = $_POST['pwd'];

    // Vérifier si le champ du mot de passe est vide
    if (empty($newPassword)) {
        echo "Le champ du mot de passe est vide. Veuillez le remplir.";
    } else {
        // Hacher le nouveau mot de passe
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Sélectionner l'ID de l'utilisateur avec le nom d'utilisateur "admin"
        $username = "admin"; // Nom d'utilisateur à rechercher

        $sql = "SELECT id FROM users WHERE `user-name` = :username";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                $userId = $row['id'];

                // PSWD UPDATE
                $updateSql = "UPDATE users SET pswd = :hashedPassword WHERE id = :userId";
                $updateStmt = $db->prepare($updateSql);
                $updateStmt->bindParam(':hashedPassword', $hashedPassword, PDO::PARAM_STR);
                $updateStmt->bindParam(':userId', $userId, PDO::PARAM_INT);

                if ($updateStmt->execute()) {
                    echo "Mot de passe mis à jour avec succès pour l'utilisateur 'admin'.";
                    echo '<br><br> <a href="../admin-page.php">HOME PAGE</a>';
                } else {
                    echo "Une erreur s'est produite lors de la mise à jour du mot de passe.";
                }
            } else {
                echo "L'utilisateur 'admin' n'a pas été trouvé.";
            }
        } else {
            echo "Une erreur s'est produite lors de la recherche de l'utilisateur.";
        }
    }
}
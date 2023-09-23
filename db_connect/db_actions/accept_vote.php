<?php
// Inclure le fichier de connexion à la base de données
require_once('../connect.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $coment = $_POST['coment'];
    $vote = $_POST['vote'];

    // Préparer la requête SQL pour insérer les données dans la table 'waiting_vote'
    $sql = "INSERT INTO `validate_vote` (image, name, coment, vote) VALUES (:image, :name, :coment, :vote)";

    // Préparer et exécuter la requête SQL
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':image', $image, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':coment', $coment, PDO::PARAM_STR);
    $stmt->bindParam(':vote', $vote, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Maintenant, nous pouvons supprimer l'enregistrement de la table 'waiting_vote'
        $sql_delete = "DELETE FROM `waiting_vote` WHERE `id` = :id";

    // Préparer et exécuter la requête de suppression
        $stmt_delete = $db->prepare($sql_delete);
        $stmt_delete->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt_delete->execute()) {
            // Rediriger l'utilisateur vers une page de succès si la suppression a réussi
            header('Location: ../../admin.php');
            exit;
        } else {
            // En cas d'erreur de suppression, afficher un message d'erreur
            echo "Une erreur est survenue lors de la suppression des données.";
    }
    } else {
        // En cas d'erreur, afficher un message d'erreur
        echo "Une erreur est survenue lors de l'enregistrement des données.";
    }
}
?>

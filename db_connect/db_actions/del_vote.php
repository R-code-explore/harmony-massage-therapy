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

    $sql_delete = "DELETE FROM `waiting_vote` WHERE `id` = :id";

    // Préparer et exécuter la requête de suppression
    $stmt_delete = $db->prepare($sql_delete);
    $stmt_delete->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt_delete->execute()) {
        header('Location: ../../admin.php');
        exit;
    }
    else {
        // En cas d'erreur, afficher un message d'erreur
        echo "Une erreur est survenue lors de la suppression des données.";
    }
}
?>
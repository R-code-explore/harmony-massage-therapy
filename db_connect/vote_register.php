<?php
// Inclure le fichier de connexion à la base de données
require_once('connect.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $comment = $_POST['advice_txt'];
    $vote = $_POST['option'];

    // Vérifier si une image a été uploadée
    if (isset($_FILES['imageToUpload']) && $_FILES['imageToUpload']['error'] === UPLOAD_ERR_OK) {
        $imageTmpName = $_FILES['imageToUpload']['tmp_name'];
        $imageExtension = pathinfo($_FILES['imageToUpload']['name'], PATHINFO_EXTENSION);

        // Générer un nom de fichier aléatoire pour l'image
        $imageName = uniqid() . '.' . $imageExtension;

        // Déplacer l'image vers le dossier 'users_images' à la racine du site
        $imageDestination = 'users_images/' . $imageName;
        move_uploaded_file($imageTmpName, $imageDestination);
    } else {
        // Aucune image n'a été uploadée, donc on utilise NULL pour la colonne 'image'
        $imageName = NULL;
    }

    // Préparer la requête SQL pour insérer les données dans la table 'waiting_vote'
    $sql = "INSERT INTO `waiting_vote` (image, name, coment, vote) VALUES (:image, :name, :coment, :vote)";

    // Préparer et exécuter la requête SQL
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':image', $imageName, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':coment', $comment, PDO::PARAM_STR);
    $stmt->bindParam(':vote', $vote, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // Rediriger l'utilisateur vers une page de succès si l'insertion a réussi
        header('Location: ../index.php');
        exit;
    } else {
        // En cas d'erreur, afficher un message d'erreur
        echo "Une erreur est survenue lors de l'enregistrement des données.";
    }
}
?>

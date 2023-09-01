<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du vote
    $selectedOption = $_POST["option"];

    // Vérifier si la valeur du vote est vide ou ne contient que des espaces
    if (empty(trim($selectedOption))) {
        echo "Veuillez sélectionner une option valide.";
    } else {
        // Connexion à la base de données (à ajuster avec vos informations)
        $servername = "localhost";
        $username = "votre_nom_d_utilisateur";
        $password = "votre_mot_de_passe";
        $dbname = "votre_base_de_donnees";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion à la base de données
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Échapper les données pour éviter les attaques d'injection SQL
        $selectedOption = $conn->real_escape_string($selectedOption);

        // Insérer le vote dans la base de données
        $sql = "INSERT INTO votes (option_selected) VALUES ('$selectedOption')";

        if ($conn->query($sql) === TRUE) {
            echo "Vote enregistré avec succès !";
        } else {
            echo "Erreur lors de l'enregistrement du vote : " . $conn->error;
        }

        // Fermer la connexion à la base de données
        $conn->close();
    }
}
?>

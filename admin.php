<?php
session_start(); // Démarrer la session

if(isset($_SESSION['user_id'])) {
    // Si l'utilisateur est déjà connecté, redirigez-le vers la page admin
    header("Location: admin-page.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Harmony Massage Therapy</title>
</head>
<body>
    
<form action="db_connect/user_login.php" method="post">

    <h1><strong>Login</strong><br>Harmony Massage Therapy</h1>

    <input type="text" name="name" id="name" placeholder="Login" required>

    <input type="password" name="password" id="password" placeholder="password" required>

    <button type="submit">Submit</button>

</form>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Roboto:wght@300&display=swap');

    body{margin: 0; background: blue;}

    h1, input, button{
        font-family: 'Roboto' , sans-serif;
    }

    h1{
        color: white;
        margin-top:100px;
        margin-bottom:100px;
        text-align: center;
    }

    input{
        display: block;
        margin: auto;
        margin-top:10px;
        font-size: 18px;
    }

    button{
        display: block;
        margin:auto;
        margin-top:20px;
        font-size: 18px;
        background: yellow;
        border:none;
        border-radius: 10px;
        padding: 10px;
        font-weight: 800;
        cursor: pointer;
    }

</style>

</body>
</html>
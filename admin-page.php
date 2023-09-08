<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Si l'utilisateur n'est pas connecté, redirection vers la page de connexion
    header("Location: admin.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    
<header>
    <form action="db_connect/logout.php" method="post"><button class="logoff_button" type="submit">Logout</button></form>
    <a href="index.php">Home Page</a>
</header>

<div class="pswd_change">
    <h3>Change password</h3>
    <form action="db_connect/pswd_admin_change.php" method="post">
        <input type="password" name="pwd" id="password" placeholder="New password" required>
        <button type="submit">Change</button>
    </form>
</div>

<div class="advices_section">

    <h3>Pareri si comentarii</h3>
    <div>
        <div class="advices" id="advices">
            <p class="prenum">Prenume</p>
            <p class="mesaj">Mesaj sau comentariu</p>
            <p class="nota">Nota : 4 / 5</p>
            <form action="" method="post">
                <button class="advices_button accept" type="submit">Accept</button>
            </form>
    
            <form action="" method="post">
                <button class="advices_button refuz" type="submit">Refuz</button>
            </form>
        </div>

        <div class="advices" id="advices">
            <p class="prenum">Prenume</p>
            <p class="mesaj">Mesaj sau comentariu</p>
            <p class="nota">Nota : 4 / 5</p>
            <form action="" method="post">
                <button class="advices_button accept" type="submit">Accept</button>
            </form>
    
            <form action="" method="post">
                <button class="advices_button clas
                refuz" type="submit">Refuz</button>
            </form>
        </div>
    </div>

</div>

<style>
    header{
        display: flex;
        width: 300px;
        justify-content: space-between;
        margin:auto;
        margin-top: 60px;
    }

    .advices_section{
        display: block;
        width: 80%;
        margin: auto;
        padding: 20px;
        margin-top:100px;
        border: 1px solid blue;
        border-radius: 10px;
    }

    .advices_section > h3{text-align: center; font-size: 18px; margin-bottom:40px;}

    .advices_section > div{
        display: flex;
        width: 100%;
        justify-content: space-around;
    }

    .advices_button{
        color: white;
        margin-top:20px;
        padding: 10px;
        font-size: 18px;
        cursor: pointer;
    }
    .accept{background-color: green}
    .refuz{background-color: red;}

</style>

</body>
</html>
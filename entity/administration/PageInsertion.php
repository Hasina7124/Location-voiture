<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Administration</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <form action="./Traitement.php" method= "POST">
        <p>E-mail</p>
        <input type="text" name="email">
        <p>Nom d'utilisateur</p>
        <input type="text" name="nom">
        <p>Sexe</p>
        <select name="sexe" id="">
            <option value="masculin">Masculin</option>
            <option value="feminin">Feminin</option>
        </select>
        <p>Statut</p>
        <select name="statut" id="">
            <option value="marie">Marie(e)</option>
            <option value="celibataire">Celibataire</option>
        </select>
        <p>Mots de passe</p>
        <input type="password" name="mdp">
        <p>Confirmation mots de passe</p>
        <input type="password" name="confmdp">
        <div><button type="submit" name="insertion">Envoyer</button></div>
    </form>
    <p>
        <?php 
        if(isset($_GET["execute"]) && $_GET["execute"] == "errinsertion"){
            echo "Mots de passe incorrect";
        }
        ?>
    </p>
</body>
</html>
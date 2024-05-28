<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Administration</title>
    <link rel="stylesheet" href="./style/PageInsertion.css">
</head>
<body>

    <?php include_once './Traitement.php'; ?>

    <form method= "POST">
        <div>
            <p>E-mail</p>
            <input type="email" name="email">
            <p class="erreur"><?php echo isset($emailError) ? $emailError : '';?></p>
        </div>
        <div>
            <p>Nom d'utilisateur</p>
            <input type="text" name="nom">
        </div>
        <div>
            <p>Sexe</p>
            <select name="sexe" id="">
                <option value="" ></option>
                <option value="masculin">Masculin</option>
                <option value="feminin">Feminin</option>
            </select>
        </div>
        <div>
        <p>Statut</p>
            <select name="statut" id="">
                <option value="marie">Marie(e)</option>
                <option value="celibataire">Celibataire</option>
            </select>
        </div>
        <div>
            <p>Mots de passe</p>
            <input type="password" name="mdp">
        </div>
        <div>
            <p>Confirmation mots de passe</p>
            <input type="password" name="confmdp">
        </div>
        <div><button type="submit" name="insertion">Envoyer</button></div>
        <div><p class="erreur"><?php echo isset($erreur) ? $erreur: '';?></p></div>
    </form>
    <p style="color :red;">
        <?php 
        if(isset($_GET["execute"]) && $_GET["execute"] == "errinsertion"){
            echo "Mots de passe incorrect";
        }
        ?>
    </p>
</body>
</html>
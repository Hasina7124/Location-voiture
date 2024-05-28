<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="../../style/reservation/PageInsertion.css">
</head>
<body>
    <!-- Pour les choix d'automobiles -->
    <div class="title"><p>Voitures</p></div>
    <?php
    // Appeller la classe connexion
    include_once '../../BaseDonne/Connexion.php';
    $connexion = new Connexion();
    $conn = $connexion->getconnexion();
    
    $sql = "SELECT * FROM voitures WHERE disponnibilite = 'disponnible'";
    $resultatvoiture = $conn->query($sql);
    ?>
    <div class="gallerie">
    <?php
    //Afficher les voitures disponible
    foreach($resultatvoiture as $resultat){
        echo '<div class ="sousgallerie">';
        echo '<div><img src="'. $resultat["picture"] . '"></div>';
        echo '<div><p>'.$resultat["details"].'</p></div>';
        echo '<div><button>Selectionner</button></div>';
        echo '</div>';
    }
    $conn = null;
    ?>
    </div>

    <!-- Pour l'insertion de pseudo -->
    <p class="title">Client</p>
    <div class ="client">
        <div class="client_element">
            <p>Nouveau client</p>
            <form action="" method="POST">
                <div>
                    <p>Nom</p>
                    <input type="text">
                </div>
                <div>
                    <p>Prenom</p>
                    <input type="text">
                </div>
                <div>
                    <p>Pseudo</p>
                    <input type="text">
                </div>
                <div>
                    <p>Sexe</p>
                    <select name="" id="">
                        <option value="">Masculin</option>
                        <option value="">Feminin</option>
                    </select>
                </div>
                <div>
                    <p>CIN</p>
                    <input type="text">
                </div>
                <div>
                    <p>Tel</p>
                    <input type="text">
                </div>
            </form>
        </div>

        <!-- Client déja inscrit-->
        <?php 
        // Appeller la classe connexion
        include_once '../../BaseDonne/Connexion.php';
        $connexion = new Connexion();
        $conn = $connexion->getconnexion();

        $sql = "SELECT pseudo FROM clients";
        $resultatclient = $conn->query($sql);
        ?>
        <div class="client_element">
            <p>Deja inscrit</p>
            <div class="client_ancien">
                <select name="" id="">
                    <option value="" selected disabled>RHHasina</option>
                   <?php
                   foreach($resultatclient as $resultat){
                    echo '<option value="'.$resultat["id_clients"].'">'.$resultat["pseudo"].'</option>';
                   }
                   $conn = null;
                   ?> 
                </select>
            </div>
        </div>
    </div>
</body>
</html>
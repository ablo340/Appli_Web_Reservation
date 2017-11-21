<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page de passagers</title>
    </head>
    <body>
        <?php
        if (isset($_GET['places']) AND isset($_GET['destination']))
        {
            //convertion des places en entier   
            $_GET['places'] = (int) $places;

            //le nombre de places est supérieur à 1
            if ($places >= 1 AND $places <= 10)
            {
                for($i = 1 ; $i <= $places ; $i++)
                {
                echo '<h1> Passager' . $i . '</h1>';
                echo '<form method ="get" action ="controleur_validation.php">
                <p>
                    <label>Nom: 
                        <input type="text" name="nom[]" />
                    </label>
                </p>
                <p>
                    <label>Prenom: 
                        <input type="text" name="prenom[]" />
                    </label>
                </p>
                <p>
                    <label>Age: 
                        <input type="text" name="age[]" />
                    </label>
                </p>
                </form>';
                }
                echo '<form method="post" action="controleur_validation.php"><p>
                <input type ="submit" value ="Etape suivante" /></p>
                </form>
                <form action="controleur_accueil.php"><p>
                <input type ="submit" value ="Retour à la page précédente" /></p>
                </form>
                <form action="controleur_accueil.php"><p>
                <input type ="submit" value ="Annuler la reservation" /></p>
                </form>';
            }
            else
            {
                echo '
                <P>Veuillez entrer une destination</br>
                Veuillez entrer un nombre supérieur à 0 et inférieur à 10</P>
                <P>Le prix de la place est de 10 euros jusqu\'a 12 ans et ensuite de 15 euros.</P>
                <p>Le prix de l\'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.
                </p>';
                include 'controleur_accueil.PHP';
            }
        }
        ?>

    </body>
</html>
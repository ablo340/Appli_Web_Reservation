<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page de passagers</title>
    </head>
    <body>
        <?php
        if (isset($_POST['places']) AND isset($_POST['destination']))
        {
            //convertion des places en entier   
            $_POST['places'] = (int) $_POST['places'];

            //le nombre de places est supérieur à 1
            if ($_POST['places'] >= 1 AND $_POST['places'] <= 10)
            {
                for($i = 1 ; $i <= $_POST['places'] ; $i++)
                {
                echo '<h1> Passager' . $i . '</h1>';
                echo '<form method ="post" action ="validation.php">
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
                echo '<form method="post" action="validation.php"><p>
                <input type ="submit" value ="Etape suivante" /></p>
                </form>
                <form action="accueil.php"><p>
                <input type ="submit" value ="Retour à la page précédente" /></p>
                </form>
                <form action="accueil.php"><p>
                <input type ="submit" value ="Annuler la reservation" /></p>
                </form>';
            }
            else
            {
                echo '<h1>RESERVATION</h1>
                <P>Veuillez entrer une destination</br>
                Veuillez entrer un nombre supérieur à 0 et inférieur à 10</P>
                <P>Le prix de la place est de 10 euros jusqu\'a 12 ans et ensuite de 15 euros.</P>
                <p>Le prix de l\'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.
                </p>';
                echo '<form method ="post" action="passager.php">
            <p>
                <label>Destination: 
                    <select name="destination">
                        <option value="Berlin">Berlin</option>
                        <option value="Bruxelles">Bruxelles</option>
                        <option value="Barcelone">Barcelone</option>
                        <option value="Paris">Paris</option>
                        <option value="Miami">Miami</option>
                        <option value="Lisbonne">Lisbonne</option>
                    </select>
                </label>
            </p>
            <p>
                <label>Nombre de place: 
                    <input type="text" name="places" />
                </label>
            </p>
            <p>
                <label>Assurance annulation: 
                    <input type="checkbox" name="assurance" id="assurance" />
                </label>
            </p>
            <input type ="submit" value ="Etape suivante" />
        </form>
        <form action="accueil.php">
            <p>
                <input type ="submit" value ="Annuler la reservation" />
            </p>
        </form>';
            }
        }
        ?>

    </body>
</html>
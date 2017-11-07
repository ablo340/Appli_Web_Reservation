<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <?php
        if (isset($_GET['places']))
        {
            //convertion des places en entier   
            $_GET['places'] = (int) $_GET['places'];

            //le nombre de places est supérieur à 1
            if ($_GET['places'] >= 1 AND $_GET['places'] <= 10)
            {
                for($i = 1 ; $i <= $_GET['places'] ; $i++)
                {
                echo '<h1> Passager' . $i . '</h1>';
                echo '<form method ="POST" action ="validaton.php">
                <p>
                    <label>Nom: 
                        <input type="text" name="nom' . $i . '" />
                    </label>
                </p>
                <p>
                    <label>Prenom: 
                        <input type="text" name="prenom' . $i . '" />
                    </label>
                </p>
                <p>
                    <label>Age: 
                        <input type="text" name="age' . $i . '" />
                    </label>
                </p>
                </form>';
                }
                echo '<p>
                <input type ="submit" value ="Etape suivante" />
                <input type ="submit" value ="Retour à la page précédente" />
                <input type ="submit" value ="Annuler la reservation" />
                </p>';
            }
            else
            {
                echo '<h1>RESERVATION</h1>
                <P>Veuillez entrer une destination</br>
                Veuillez entrer un nombre supérieur à 0 et inférieur à 10</P>
                <P>Le prix de la place est de 10 euros jusqu\'a 12 ans et ensuite de 15 euros.</P>
                <p>Le prix de l\'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.
                </p>';
                echo '<form method ="GET" action ="passager.php">
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
                    <p>
                        <input type ="submit" value ="Etape suivante" />
                        <input type ="submit" value ="Annuler la reservation" />
                    </p>
                    </form>';
            }
        }
        ?>

    </body>
</html>
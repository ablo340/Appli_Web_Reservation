<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <?php
        if (isset($_GET['places']))
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
               
        }
        else 
        {
            echo '<p>Choisissez votre destination et indiquez le nombre de places</p>';
        }
        ?>
        
    </body>
</html>
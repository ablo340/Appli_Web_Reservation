<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page de passagers</title>
    </head>
    <body>
        <form method ="get" action ="index.PHP?page=passager">
            <input type="hidden" name="page" value = "passager">
            <p>
                <label>Nom: 
                    <input type="text" name="nom" />                    
                </label>
            </p>
            <p>
                <label>Prenom: 
                    <input type="text" name="prenom" />
                </label>
            </p>
            <p>
                <label>Age: 
                    <input type="text" name="age" />
                </label>
            </p>
            <p>
                <input type ="submit" value ="Etape suivante" />
            </p>
        </form>
        <form action ="index.PHP?page=accueil">
            <input type ="submit" value ="Retour à la page précédente" />
        </form>
        <form action ="index.PHP?page= ">
            <input type ="submit" value ="Annuler la reservation" />
        </form>

    </body>
</html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page de passagers</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <form class="button" method ="get" action ="index.PHP?page=passager">
            <input type="hidden" name="page" value = "passager">
            <p>
                <label>Nom: 
                    <input type="text" name="nom"/>                    
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
            <table>
                <tr>
    <td>
            <input type ="submit" value ="Etape suivante" />
        </form>
    </td>
    <td>
        <form action ="index.PHP?page=passager">
            <input type="hidden" name="page" value = "passager">
            <input type ="submit" value ="Retour à la page précédente" />
        </form>
    </td>
    <td>
        <form action ="index.PHP?page= ">
            <input type ="submit" value ="Annuler la reservation" />
        </form>
    </td>
        </tr>
        </table>
    </body>
</html>
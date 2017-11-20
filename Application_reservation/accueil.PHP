<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma accueil</title>
    </head>
    <body>
        <h1>RESERVATION</h1>
        <P>Le prix de la place est de 10 euros jusqu'a 12 ans et ensuite de 15 euros.</P>
        <p>Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.</p>
        <form method ="post" action="passager.php">
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
        </form>
    </body>
</html>
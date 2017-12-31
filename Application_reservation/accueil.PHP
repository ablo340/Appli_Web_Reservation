<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Ma page web</title>
    </head>
    <body>
        <header>
            <img src ="rome.jpg" alt =" rome " width =" 150 " height =" 100 " />
            <img src ="budapest.jpg" alt =" budapest " width =" 150 " height =" 100 " />
            <img src ="barcelone.jpg" alt =" barcelone " width =" 150 " height =" 100 " />
            <img src ="berlin.jpg" alt =" berlin " width =" 150 " height =" 100 " />
            <img src ="paris.jpg" alt =" paris " width =" 150 " height =" 100 " />
        </header>
        <h1>RESERVATION</h1>
        <P>Le prix de la place est de 10 euros jusqu'a 12 ans et ensuite de 15 euros.</P>
        <p>Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.</p>
        <form  class="button" method ="get" action ="index.PHP?page=passager">
            <input type="hidden" name="page" value = "passager">
        	<p>
        		<label>Destination: 
        			<select name="destination">
        				<option value="Berlin">Berlin</option>
        				<option value="Budapest">Budapest</option>
    					<option value="Barcelone">Barcelone</option>
    					<option value="Paris">Paris</option>
    					<option value="Rome">Rome</option>
    					<option value="Lisbonne">Lisbonne</option>
					</select>
				</label>
			</p>
			<p>
				<label>Nombre de place: 
					<input type="text" name="places" value = ' <?php echo $reservation->getPlaces(); ?>' />
				</label>
			</p>
			<p>
				<label>Assurance annulation: 
					<input type="checkbox" name="assurance" id="assurance" />
				</label>
			</p>
            <table>
                <tr>
			<td>
				<input type ="submit" value ="Etape suivante" />
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
<div class="jumbotron">
<h3>POZOR! Tento formulár automaticky nevytvára objednávky. Formulár mi bude poslaný na mail <a href="mailto:kupim@gamesky.sk?Subject=Objednavka%20hry" target="_top">
kupim@gamesky.sk</a> a o potvrdení objednávky vám napíšem do 24 hodín. Ďakujem za pochopenie.</h3>

<form action="mailto:kupim@gamesky.sk?Subject=Objednavka%20hry" method="post" enctype="text/plain">
<br><br><fieldset>
	<legend>Nákup hry</legend>
	<table>
	<td><tr>Názov hry: <Input type="text" name="hra" value="" size="25"></tr></td><br>
	</table>
</fieldset>
<br><br><fieldset>
		<legend>Základné informácie</legend>
		<table>
			<td><tr><br>Meno: <Input type="text" name="meno" value="" size="25"></tr></td><BR>
			<td><tr>Priezvisko: <Input type="text" name="priezvisko" value="" size="25"></tr></td><br>
	
			<td><tr>Pohlavie: </tr>
				<tr><input type="radio" name="switch" value="muz"> Muž</tr>
				<tr><input type="radio" name="switch" value="zena"> Žena</tr>
				<tr><input type="radio" name="switch" value="ine" checked> Iné</tr></td><br>
		  
			<td><tr>Email: <input type="text" name="email" value="@" size="25" required></tr></td><br>
		
			<td><tr>Telefón: <input type="text" name="phone" value="+421" size="24"></tr></td><br>
		</table>
	</fieldset>
	
	<br><br><fieldset>
		<legend>Adresa bydliska:</legend>
		<table>
			<tr><td>Obec: <input type="text" name="bydlisko" value="" size="25"required></td></tr>
			<tr><td>Ulica: <input type="text" name="ulica" value="" size="25"></td>
			<td>č.d: <input type="text" name="cd" value="" size="5" required></tr>
			<tr><td>PSČ: <input type="text" name="PSC" value="" size="5" required></td></tr>
		</table>
	</fieldset>
	
	<br><br><fieldset>
		<legend>Doprava</legend>
		<b><i>Zvoľte spôsob dopravy*:</i></b><br>
			<input type="radio" name="doprava" checked>Na poštu (2€)<br>
			<input type="radio" name="doprava">Kuriérom na adresu (3€)<br>
			<input type="radio" name="doprava">Odberné miesta (1€)<br>
			<input type="radio" name="doprava">Osobný odber (0€)<br><br>
			
		* pri elektronickom kľúči, vám bude hra poslaná na email (zaškrtnite osobný odber)<br>
			
		<br><legend>Platba</legend>
		<b><i>Zvoľte spôsob platby: </i></b><br>
			<input type="radio" name="platba" checked>Prevod na účet (0€)<br>
			<input type="radio" name="platba">Dobierka (1€)**<br>
			<input type="radio" name="platba">Kartou online (0€)<br><br>
		
		** pri elektronickom kľúči, dobierka nieje možná<br>
	</fieldset>
	
<br><br>
  <P>Súhlasím so spracovaním osobných údajov: <input type="checkbox" name="zaskrtnute" value="suhlasi"></P>
</form>
<p><center><input align="center" type="submit" value="Odoslať"></center><br><br>
<input type="reset" value="Vymazať všetky údaje"></p><br><br>

</form>
</div>
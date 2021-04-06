<?php
if(isset($_POST["submit"])){
	mail("marco.hennermann@hotmail.com", "Kontaktformular", 'Name: '.$_POST["email"].'Nachricht: '.$_POST["message"]); 
	
}
?>
		
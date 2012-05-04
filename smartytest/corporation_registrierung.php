<?php

include '/smarty_php/corporation_registrierung_smarty.php';


/////////////////////////////////////////zur�ck eingabe und �berpr�fung ob in den variablen werte vorhanden sind//////////////////////////////////////////
session_start();


$tempo 			= 	array
					(
						'Firmenname',
						'Strasse',
						'PLZ',
						'Ort',
						'Telefon',
						'Telefax',
						'EMail',
						'Internet',
						'Produktportfolio',
						'Firmenausrichtung',
						'Dienstleistungen',
						'Praesenz',
						'Zielmaerkte',
						'Referenzen',
						'UnternehmensundFertigungsstandorte',
						'Qualitaetsmanagement',
						'Gruedungsjahr',
						'Mitarbeiter',
					);

$i=1;					
foreach
($tempo AS $value)
{ 			
		if (!isset($_SESSION[$value]))
		{
			$smarty->assign("zurueck".$i."", "");

		}
		else
		{
			$smarty->assign("zurueck".$i."", "".$_SESSION[$value]."");

		}
	
	$i++;
}


$smarty->display("corporation_registrierung.html");
?>
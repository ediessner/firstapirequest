<?php

include '/smarty_php/index_smarty.php';

session_start();


$tempo 			= 	array
					(
						'Server_Adresse',
						'User',
						'Password',
						'Datenbank',
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

					
foreach 
($tempo AS $value)
{ 			
$_SESSION[$value] = "";
}
$smarty->display("index.tpl");
?>
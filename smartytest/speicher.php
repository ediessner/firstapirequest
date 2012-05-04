<?php 

include '/smarty_php/speicher_smarty.php';


//aufbau der datenbankverbindung 


 
$mysqlhost = 'localhost';
$mysqluser = 'root';
$mysqlpwd = 'spenochoal';
$db = 'test db1';
$table= 'firma';

//verbindung zur db herstellen 
$connection=mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) 
or die("Verbindungsversuch fehlgeschlagen");

mysql_select_db($db); 
session_start();
$_SESSION["Time"] = date("Y.m.d-H:i");

//sql-befehl zum eintragen der daten in die tabelle firma
$eintrag = "INSERT INTO firma (Firmenname, Strasse, PLZ, 
Ort, Telefon, Telefax, EMail, Internet, Produktportfolio, Firmenausrichtung, Dienstleistungen, Praesenz, Zielmaerkte, Referenzen, UnternehmensundFertigungsstandorte, 
Qualitaetsmanagement, Gruendungsjahr, Mitarbeiter, Time, UserID, IP) VALUES ('".$_SESSION["Firmenname"]."', '".$_SESSION["Strasse"]."', 
'".$_SESSION["PLZ"]."', '".$_SESSION["Ort"]."','".$_SESSION["Telefon"]."', '".$_SESSION["Telefax"]." ', '".$_SESSION["EMail"]."', '".$_SESSION["Internet"]."', '".$_SESSION["Produktportfolio"]." ',
'".$_SESSION["Firmenausrichtung"]." ', '".$_SESSION["Dienstleistungen"]."', '".$_SESSION["Praesenz"]."', '".$_SESSION["Zielmaerkte"]."', '".$_SESSION["Referenzen"]."', 
'".$_SESSION["UnternehmensundFertigungsstandorte"]."', '".$_SESSION["Qualitaetsmanagement"]." ', '".$_SESSION["Gruendungsjahr"]." ', '".$_SESSION["Mitarbeiter"]."', 
'".$_SESSION["Time"]."', '', '".$_SESSION["IP"]."' )"; 

///////////////////////Ausgabe der Variablen Firmenname und IP Adresse in der Html Seite///////////////////////////////
$smarty->assign("Firma", "".$_SESSION["Firmenname"]."");
$smarty->assign("IP", "".$_SESSION["IP"]."");
$smarty->display("speicher.tpl");
///nun erfolgt der eintrag in die tabelle 
$eintragen = mysql_query($eintrag) or die (mysql_error()); 
//folgende anweisungen rufen die formularseite wieder auf, um  
//weitere daten eingeben zukönnen. 

//datenbank wieder schliessen 
mysql_close();
?> 



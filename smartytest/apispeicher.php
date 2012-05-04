<?php 

include '/smarty_php/apispeicher_smarty.php';


//aufbau der datenbankverbindung 
 
$mysqlhost = 'localhost';
$mysqluser = 'root';
$mysqlpwd = 'spenochoal';
$db = 'eveapi';
$table= 'api';

//verbindung zur db herstellen 
$connection = mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) 
or die("Verbindungsversuch fehlgeschlagen");

mysql_select_db($db); 
session_start();

//sql-befehl zum eintragen der daten in die tabelle firma
$eintrag = "INSERT INTO $table (userid, api, IP) VALUES ('".$_SESSION["userid"]."', '".$_SESSION["api"]."', '".$_SESSION["IP"]."' )"; 

///////////////////////Ausgabe der Variablen Firmenname und IP Adresse in der Html Seite///////////////////////////////
$smarty->assign("userid", "".$_SESSION["userid"]."");
$smarty->assign("IP", "".$_SESSION["IP"]."");
$smarty->display("apispeicher.html");
///nun erfolgt der eintrag in die tabelle 
$eintragen = mysql_query($eintrag) or die (mysql_error()); 

//Übergabe der User ID und der API an die Post Method Variablen 

$_POST ["userid"] = $_SESSION["userid"] ;
$_POST ["api"] = $_SESSION["api"] ;


//datenbank wieder schliessen 
mysql_close();
?> 



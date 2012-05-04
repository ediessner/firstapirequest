<!DOCTYPE HTML>

<?php 

include '/smarty_php/vorschau_smarty.php';


////////////////////////////////////////////Footer///////////////////////////////////////////////

$smarty->assign("footer_jear", "2011"); /// Jahr
$smarty->assign("footer_corp", "WEKA Fachmedien GmbH"); /// Firma
$smarty->assign("footer_area2", "Zertifikate"); /// Text f�r den 2. Bereich
$smarty->assign("footer_area3", "Kontakte"); /// Text f�r den 3. Bereich
$smarty->assign("footer_area4", "Impressum"); /// Text f�r den 4. Bereich

/**
 * Kommentar
 */

/////////////////////////////�bergabe der variablen ////////////////////////////// 
$mbFirmenname= $_POST["firmenname"]; 
$mbStrasse= $_POST["strasse"]; 
$mbPLZ= $_POST["plz"]; 
$mbOrt= $_POST["ort"]; 
$mbTelefon= $_POST["telefon"]; 
$mbTelefax= $_POST["telefax"]; 
$mbEMail= $_POST["email"]; 
$mbInternet= $_POST["internet"]; 
$mbProduktportfolio= $_POST["produktportfolio"]; 
$mbFirmenausrichtung= $_POST["firmenausrichtung"]; 
$mbDienstleistungen= $_POST["dienstleistungen"]; 
$mbPraesenz= $_POST["praesenz"]; 
$mbZielmaerkte= $_POST["zielmaerkte"]; 
$mbReferenzen= $_POST["referenzen"]; 
$mbUnternehmensundFertigungsstandorte= $_POST["unternehmensundfertigungsstandorte"]; 
$mbQualitaetsmanagement= $_POST["qualitaetsmanagement"]; 
$mbGruendungsjahr= $_POST["gruendungsjahr"]; 
$mbMitarbeiter= $_POST["mitarbeiter"];

//////////////////////////// Pr�fung der Werte///////////////////////////////////


$tempo 			= 	array
					(
						$mbFirmenname,
						$mbStrasse,
						$mbPLZ,
						$mbOrt,
						$mbTelefon,
						$mbTelefax,
						$mbEMail,
						$mbInternet,
						$mbProduktportfolio,
						$mbFirmenausrichtung,
						$mbDienstleistungen,
						$mbPraesenz,
						$mbZielmaerkte,
						$mbReferenzen,
						$mbUnternehmensundFertigungsstandorte,
						$mbQualitaetsmanagement,
						$mbGruendungsjahr,
						$mbMitarbeiter,
					);

					
$i = 0;		
while ($i <=18)

{
			
		if (empty($tempo[$i]))
		{
		$tempo[$i] = '<font color="#DC143C">ERROR</font>';
		}
		$i++;
}

$mbFirmenname = $tempo[0];
$mbStrasse = $tempo[1];
$mbPLZ = $tempo[2];
$mbOrt = $tempo[3];
$mbTelefon = $tempo[4];
$mbTelefax = $tempo[5];
$mbEMail = $tempo[6];
$mbInternet = $tempo[7];
$mbProduktportfolio = $tempo[8];
$mbFirmenausrichtung = $tempo[9];
$mbDienstleistungen = $tempo[10];
$mbPraesenz = $tempo[11];
$mbZielmaerkte = $tempo[12];
$mbReferenzen = $tempo[13];
$mbUnternehmensundFertigungsstandorte = $tempo[14];
$mbQualitaetsmanagement = $tempo[15];
$mbGruendungsjahr = $tempo[16];
$mbMitarbeiter = $tempo[17];

$tempo2 			= 	array
					(
					$mbTelefax,
					$mbTelefon,
					$mbPLZ,
					$mbGruendungsjahr,
					$mbMitarbeiter,
					);
 
 $i = 4;		
while ($i <=18)

{
			          //////// �berpr�fung des arrays auf Zahlen
		if (preg_match("=^[0-9]+$=i",$tempo[$i]))
		{

		}
		else
		{
				$tempo[$i] = '<font color="#DC143C">ERROR</font>';
		}
		$i++;
}
 
 /*if (preg_match("=^[0-9]+$=i",$_POST["Telefax"]))
{
    echo "";
}
else
{
    ( = '<font color="#DC143C">ERROR</font>');
}
 
 if (preg_match("=^[0-9]+$=i",$_POST["Telefon"]))          //////// �berpr�fung des Wertes auf Zahlen in Telefon
{
    echo "";
}
else
{
    ( = '<font color="#DC143C">ERROR</font>');
}
 
if (preg_match("=^[0-9]+$=i",$_POST["PLZ"]))          //////// �berpr�fung des Wertes auf Zahlen in PLZ
{
    echo "";
}
else
{
    ( = '<font color="#DC143C">ERROR</font>');
}
 
if (preg_match("=^[0-9]+$=i",$_POST["Gruendungsjahr"])) ///////// �berpr�fung des Wertes auf Zahlen in Gr�ndungsjahr
{
    echo "";
}
else
{
    ( = '<font color="#DC143C">ERROR</font>');
}
 

if (preg_match("=^[0-9]+$=i",$_POST["Mitarbeiter"]))    /////////// �berpr�fung des Wertes auf Zahlen in Mitarbeiter
{
    echo "";
}
else
{
    ( = '<font color="#DC143C">ERROR</font>');
}
*/


if ($mbFirmenname == '<font color="#DC143C">ERROR</font>' or            ///////////////�berpr�fung der Variabken auf ERROR, wenn ERROR dann  Wiederholung der eingabe sonst, Best�tigung
$mbStrasse == '<font color="#DC143C">ERROR</font>' or $mbPLZ == '<font color="#DC143C">ERROR</font>' or $mbOrt == '<font color="#DC143C">ERROR</font>' or
$mbTelefon == '<font color="#DC143C">ERROR</font>' or $mbTelefax == '<font color="#DC143C">ERROR</font>' or $mbEMail == '<font color="#DC143C">ERROR</font>' or
$mbInternet == '<font color="#DC143C">ERROR</font>' or $mbProduktportfolio == '<font color="#DC143C">ERROR</font>' or $mbFirmenausrichtung == '<font color="#DC143C">ERROR</font>' or
$mbDienstleistungen == '<font color="#DC143C">ERROR</font>' or $mbPraesenz == '<font color="#DC143C">ERROR</font>' or $mbZielmaerkte == '<font color="#DC143C">ERROR</font>' or
$mbReferenzen == '<font color="#DC143C">ERROR</font>' or $mbUnternehmensundFertigungsstandorte == '<font color="#DC143C">ERROR</font>' or
$mbQualitaetsmanagement == '<font color="#DC143C">ERROR</font>' or $mbGruendungsjahr == '<font color="#DC143C">ERROR</font>' or $mbMitarbeiter == '<font color="#DC143C">ERROR</font>')
{
 echo '<font size="5pt" color="#DC143C"><b><p align="center" >Bitte gehen Sie auf den Button zur�ck und bearbeiten Ihre Eingaben noch einmal!</b></font>';   
}
else
{
    echo '<font size="5pt"><b><p align="center">Bitte best�tigen Sie die eingegebenen Daten und klicken sie auf Eintragen</b></font>';
}
///////////////////////////////////�bergabe der Werte an die Session////////////////////////////////////////////
session_start();            /////////Start einer SESSION

$ipadresse = $_SERVER['REMOTE_ADDR'];


$_SESSION["IP"] = $ipadresse;
$_SESSION["Firmenname"] = $_POST["firmenname"];
$_SESSION["Strasse"] = $_POST["strasse"];
$_SESSION["PLZ"] = $_POST["plz"];
$_SESSION["Ort"] = $_POST["ort"];
$_SESSION["Telefon"] = $_POST["telefon"];
$_SESSION["Telefax"] = $_POST["telefax"];
$_SESSION["EMail"] = $_POST["email"];
$_SESSION["Internet"] = $_POST["internet"];
$_SESSION["Produktportfolio"] = $_POST["produktportfolio"];
$_SESSION["Firmenausrichtung"] = $_POST["firmenausrichtung"];
$_SESSION["Dienstleistungen"] = $_POST["dienstleistungen"];
$_SESSION["Praesenz"] = $_POST["praesenz"];
$_SESSION["Zielmaerkte"] = $_POST["zielmaerkte"];
$_SESSION["Referenzen"] = $_POST["referenzen"];
$_SESSION["UnternehmensundFertigungsstandorte"] = $_POST["unternehmensundfertigungsstandorte"];
$_SESSION["Qualitaetsmanagement"] = $_POST["qualitaetsmanagement"];
$_SESSION["Gruendungsjahr"] = $_POST["gruendungsjahr"];
$_SESSION["Mitarbeiter"] = $_POST["mitarbeiter"];

/////////////////////////////////////Ausgabe der Variablen in der HTML Seite /////////////////////////////////////

$smarty->assign("mbFirmenname", "$mbFirmenname");
$smarty->assign("mbStrasse", "$mbStrasse");
$smarty->assign("mbPLZ", "$mbPLZ");
$smarty->assign("mbOrt", "$mbOrt");
$smarty->assign("mbTelefon", "$mbTelefon");
$smarty->assign("mbTelefax", "$mbTelefax");
$smarty->assign("mbEMail", "$mbEMail");
$smarty->assign("mbInternet", "$mbInternet");
$smarty->assign("mbProduktportfolio", "$mbProduktportfolio");
$smarty->assign("mbFirmenausrichtung", "$mbFirmenausrichtung");
$smarty->assign("mbDienstleistungen", "$mbDienstleistungen");
$smarty->assign("mbPraesenz", "$mbPraesenz");
$smarty->assign("mbZielmaerkte", "$mbZielmaerkte");
$smarty->assign("mbReferenzen", "$mbReferenzen");
$smarty->assign("mbUnternehmensundFertigungsstandorte", "$mbUnternehmensundFertigungsstandorte");
$smarty->assign("mbQualitaetsmanagement", "$mbQualitaetsmanagement");
$smarty->assign("mbGruendungsjahr", "$mbGruendungsjahr");
$smarty->assign("mbMitarbeiter", "$mbMitarbeiter");



////////////////////////////////////////////php error///////////////////////////////////////////////////

 if ($mbFirmenname == '<font color="#DC143C">ERROR</font>' or ////// Wenn ERROR da, gibt er nichts aus, wenn kein ERROR da ist gibt er den HTML Code f�r den Button "Eintragen" aus
$mbStrasse == '<font color="#DC143C">ERROR</font>' or $mbPLZ == '<font color="#DC143C">ERROR</font>' or $mbOrt == '<font color="#DC143C">ERROR</font>' or
$mbTelefon == '<font color="#DC143C">ERROR</font>' or $mbTelefax == '<font color="#DC143C">ERROR</font>' or $mbEMail == '<font color="#DC143C">ERROR</font>' or
$mbInternet == '<font color="#DC143C">ERROR</font>' or $mbProduktportfolio == '<font color="#DC143C">ERROR</font>' or $mbFirmenausrichtung == '<font color="#DC143C">ERROR</font>' or
$mbDienstleistungen == '<font color="#DC143C">ERROR</font>' or $mbPraesenz == '<font color="#DC143C">ERROR</font>' or $mbZielmaerkte == '<font color="#DC143C">ERROR</font>' or
$mbReferenzen == '<font color="#DC143C">ERROR</font>' or $mbUnternehmensundFertigungsstandorte == '<font color="#DC143C">ERROR</font>' or
$mbQualitaetsmanagement == '<font color="#DC143C">ERROR</font>' or $mbGruendungsjahr == '<font color="#DC143C">ERROR</font>' or $mbMitarbeiter == '<font color="#DC143C">ERROR</font>')
{
 $error ='';   
}
else
{
    $error = '<input class="submit1" type="submit" value="Eintragen">';
} 

$smarty->assign("phperror", "$error");

//////nun der Absulute Footer, der Text der ganz unten steht
$smarty->assign("footer_area_foottext", 'Willst du mehr Wissen dann schau mal hier vorbei:<a href="http://www.elektroniknet.de">Elektroniknet.de</a>.');
$smarty->display("vorschau.html"); 

?> 

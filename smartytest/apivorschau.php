<!DOCTYPE HTML>

<?php 

include '/smarty_php/apivorschau_smarty.php';


////////////////////////////////////////////Footer///////////////////////////////////////////////

$smarty->assign("footer_jear", "2011"); /// Jahr
$smarty->assign("footer_corp", "WEKA Fachmedien GmbH"); /// Firma
$smarty->assign("footer_area2", "Zertifikate"); /// Text f�r den 2. Bereich
$smarty->assign("footer_area3", "Kontakte"); /// Text f�r den 3. Bereich
$smarty->assign("footer_area4", "Impressum"); /// Text f�r den 4. Bereich

/**
 * Kommentar
 */

/////////////////////////////Übergabe der variablen ////////////////////////////// 
$mbuserid= $_POST["userid"]; 
$mbapi= $_POST["api"]; 


//////////////////////////// Prüfung der Werte///////////////////////////////////


$tempo 			= 	array
					(
						$mbuserid,
						$mbapi,
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

$mbuserid = $tempo[0];
$mbapi = $tempo[1];


$tempo2 			= 	array
					(
					$mbuserid,
                                        $mbapi,
					);
 
 $i = 4;		
while ($i <=18)

{
			          //////// Überprüfung des arrays auf Zahlen
		if (preg_match("=^[0-9]+$=i",$tempo[$i]))
		{

		}
		else
		{
				$tempo[$i] = '<font color="#DC143C">ERROR</font>';
		}
		$i++;
}
 

////////////////////////////////Überprüfung der API Daten ////////////////////
$xml = simplexml_load_file('http://api.eve-online.com/account/Characters.xml.aspx?keyID='.$_POST["userid"].'&vCode='.$_POST["api"]);

if (empty($xml->error[0]))
		{
		
		}
            else 
                {
            $mbuserid = '<font color="#DC143C">ERROR</font>';           
            $mbapi = '<font color="#DC143C">ERROR</font>';
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
                
                ////////////////////Start einer SESSION/////////////////////
                
session_start();            

///////////////////////////////////�bergabe der Werte an die Session////////////////////////////////////////////


$ipadresse = $_SERVER['REMOTE_ADDR'];


$_SESSION["IP"] = $ipadresse;
$_SESSION["userid"] = $_POST["userid"];
$_SESSION["api"] = $_POST["api"];


                
                ///////////////�berpr�fung der Variabken auf ERROR, wenn ERROR dann  Wiederholung der eingabe sonst, Best�tigung

if ($mbuserid == '<font color="#DC143C">ERROR</font>' or            
$mbapi == '<font color="#DC143C">ERROR</font>')
{
 echo '<font size="5pt" color="#DC143C"><b><p align="center" >Bitte gehen Sie auf den Button zur�ck und bearbeiten Ihre Eingaben noch einmal!</b></font>';   
}
else
{
    echo '<font size="5pt"><b><p align="center">Bitte best�tigen Sie die eingegebenen Daten und klicken sie auf Eintragen</b></font>';
}


/////////////////////////////////////Ausgabe der Variablen in der HTML Seite /////////////////////////////////////

$smarty->assign("mbuserid", "$mbuserid");
$smarty->assign("mbapi", "$mbapi");


////////////////////////////////////////////php error///////////////////////////////////////////////////

 if ($mbuserid == '<font color="#DC143C">ERROR</font>' or ////// Wenn ERROR da, gibt er nichts aus, wenn kein ERROR da ist gibt er den HTML Code f�r den Button "Eintragen" aus
$mbapi == '<font color="#DC143C">ERROR</font>')
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
$smarty->display("apivorschau.html"); 

?>
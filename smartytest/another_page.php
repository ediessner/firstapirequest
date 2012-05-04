<?php

include '/smarty_php/another_page_smarty.php';


/////////////////////////////////////////zur�ck eingabe und �berpr�fung ob in den variablen werte vorhanden sind//////////////////////////////////////////
session_start();


$tempo 			= 	array
					(
						'userid',
						'api',
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


$smarty->display("another_page.html");
?>
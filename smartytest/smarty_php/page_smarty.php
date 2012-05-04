<?php
require_once('Smarty-3.1rc1/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = 'data/templates';
$smarty->compile_dir 	= 'data/templates_c';
$smarty->cache_dir 	= 'data/cache';
$smarty->config_dir 	= 'data/configs';

//////Der Text �ber dem Logo
$smarty->assign("seiten_titel", "Page");
$smarty->assign("site_logo_green", "Green");
$smarty->assign("site_logo_white", "IT");
$smarty->assign("text_under_logo", "That is the Future");

//////Main Men� Leiste
$smarty->assign("menue_path_1", "index.php"); $smarty->assign("menue_link_1", "Home");
$smarty->assign("menue_path_2", "examples.php"); $smarty->assign("menue_link_2", "Examples");
$smarty->assign("menue_path_3", "page.php"); $smarty->assign("menue_link_3", "Page");
$smarty->assign("menue_path_4", "another_page.php"); $smarty->assign("menue_link_4", "Another Page");
$smarty->assign("menue_path_5", "corporation_registrierung.php"); $smarty->assign("menue_link_5", "Corporation Regiestrierung");

////////////////////////////////////////////Rechte Sidebar///////////////////////////////////////////////

/////////////Rechte Sidebar 1. Area �berschrift
$smarty->assign("right_taria_1", "News");
/////////////////Right Sidebar 1. Box
$smarty->assign("right_tbox1_1_", "Lybien"); ////�berschrift
$smarty->assign("right_tbox1_1_second", "25.08.2011"); ////Datum der box
$smarty->assign("right_tbox1_1_text", "Die Hauptstadt wurde, von den Rebellen, eingenommen!"); //// Box Text
$smarty->assign("right_tbox1_1_link", "http://www.blick.ch/news/rebellen-haben-die-libysche-hauptstadt-tripolis-eingenommen-vid23557"); $smarty->assign("right_tbox1_1_linktext", "Mehr Info`s"); /////link,text

///////////////Right Sidebar 1. Area und 2. Box
$smarty->assign("right_tbox1_2", "Apple Inc."); ////�berschrift
$smarty->assign("right_tbox1_2_second", "25.08.2011"); ////Datum der box
$smarty->assign("right_tbox1_2_text", "Der Apple Chef tretet als CEO zur�ck. Er will aber dennoch bei Apple bleiben!"); //// Box Text
$smarty->assign("right_tbox1_2_link", "http://www.golem.de/1108/85971.html"); $smarty->assign("right_tbox1_2_linktext", "Mehr Info`s"); /////link,text
/////////////Right Sidebar 2. Area und 1. Box
$smarty->assign("right_taria_2", ""); ////�berschrift
$smarty->assign("right_tbox2_1_link", ""); $smarty->assign("right_tbox2_1_linktext", ""); /////link,text
$smarty->assign("right_tbox2_2_link", ""); $smarty->assign("right_tbox2_2_linktext", ""); /////link,text
$smarty->assign("right_tbox2_3_link", ""); $smarty->assign("right_tbox2_3_linktext", ""); /////link,text
$smarty->assign("right_tbox2_4_link", ""); $smarty->assign("right_tbox2_4_linktext", ""); /////link,text

////////////////////////////////////////////Main Content///////////////////////////////////////////////

$smarty->assign("main_content1_heading", "\"Ein bisschen Gold, bitte!\""); /// content 1 �berschrift
$smarty->assign("main_content1_text", "Vom ersten bis zum letzten Zeitalter in 30 Stunden statt 30 Minuten. Age of Empires Online stellt das Prinzip der Vorg�nger gr�ndlich auf den Kopf und vermischt das Echtzeitstrategiespiel mit einer geh�rigen Portion Onlinerollenspiel.<br/><br/>

Grundvoraussetzungen f�r das neue Age of Empires sind eine aktive Internetverbindung und ein Konto bei Microsofts Onlineservice Games for Windows Live. Offline l�sst sich das Programm nicht starten. Das ist allerdings auch nicht verwunderlich: World of Warcraft oder Herr der Ringe Online laufen ja auch nicht ohne das Netz. Und von diesen Onlinerollenspielen hat sich das neue Echtzeitstrategiespiel von Gas Powered Games viele Features abgeschaut. <br/><br/>
Spieler w�hlen zwischen zwei Nationen, den Griechen und �gyptern, und gr�nden eine Hauptstadt. Sie stellt im weiteren Verlauf sozusagen den Onlinecharakter dar. Die Hauptstadt verk�rpert das Inventar, die Tauschb�rse f�r Gegenst�nde und jede Menge Buffs f�r Einheiten in Form von Beratern oder Geb�uden.<br/> <br/>
Missionen werden vom Volk vergeben. Mal hat der Fischer ein pers�nliches Anliegen, mal der Stadtphilosoph oder der Herrscher einer Nachbarstadt. Besiegte Einheiten, zerst�rte Geb�ude und vollendete Missionsziele bescheren dem Spieler Erfahrungspunkte, die seine Zivilisation im Level aufsteigen lassen. Pro Levelaufstieg k�nnen drei Punkte im Technologiebaum verteilt werden. So spezialisieren sich Spieler auf eine Spielweise. Der eine baut seine Infanterie aus und kauft ihr noch einen besonders starken Schild, andere versuchen, so schnell es geht die Wirtschaft anzukurbeln, und investieren in effektivere Arbeiter.<br/> <br/>
Die ersten zehn Spielstunden verbringt der Spieler in den fr�hen zwei von vier Technologiezeitaltern. Das Aufleveln nimmt viel Zeit in Anspruch und nur Kunden, die sich mindestens eins der beiden Premiumv�lker gekauft haben, kommen so schnell voran, dass Age of Empires Online nicht langwierig wird. Dennoch dauert der Levelaufstieg auch mit den besseren Premiumeinheiten und gr��erem Inventar lange.
    Kein Skirmish, aber Zufallskarten <br />
    Grafik, Kosten und Fazit <br/>
In der klassischen Solokampagne st�rt das allerdings �berhaupt nicht. Schlie�lich bleibt das Programm auf diese Weise sehr einsteigerfreundlich und Spieler lernen es St�ck f�r St�ck. Manche Missionen sind sogar nur darauf ausgelegt, die ersten Spielminuten, das \"Early-Game\", zu trainieren. In zeitbeschr�nkten Herausforderungen m�ssen beispielsweise zehn Kornfelder so schnell wie m�glich errichtet werden. Der ideale Drill, um Hotkeys zu verinnerlichen."); /// der content 1 text

$smarty->assign("main_content2_heading", ""); /// content 2 �berschrift
$smarty->assign("main_content2_text", ""); /// der content 2 text

////////////////////////////////////////////Footer///////////////////////////////////////////////

$smarty->assign("footer_jear", "2011"); /// Jahr
$smarty->assign("footer_corp", "WEKA Fachmedien GmbH"); /// Firma
$smarty->assign("footer_area2", "Zertifikate"); /// Text f�r den 2. Bereich
$smarty->assign("footer_area3", "Kontakte"); /// Text f�r den 3. Bereich
$smarty->assign("footer_area4", "Impressum"); /// Text f�r den 4. Bereich
//////nun der Absulute Footer, der Text der ganz unten steht
$smarty->assign("footer_area_foottext", 'Willst du mehr Wissen dann schau mal hier vorbei:<a href="http://www.elektroniknet.de">Elektroniknet.de</a>.');


?>
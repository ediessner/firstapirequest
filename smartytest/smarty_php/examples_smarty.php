<?php
require_once('Smarty-3.1rc1/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = 'data/templates';
$smarty->compile_dir 	= 'data/templates_c';
$smarty->cache_dir 	= 'data/cache';
$smarty->config_dir 	= 'data/configs';

//////Der Text über dem Logo
$smarty->assign("seiten_titel", "Examples");
$smarty->assign("site_logo_green", "Green");
$smarty->assign("site_logo_white", "IT");
$smarty->assign("text_under_logo", "That is the Future");

//////Main Menü Leiste
$smarty->assign("menue_path_1", "index.php"); $smarty->assign("menue_link_1", "Home");
$smarty->assign("menue_path_2", "examples.php"); $smarty->assign("menue_link_2", "Examples");
$smarty->assign("menue_path_3", "page.php"); $smarty->assign("menue_link_3", "Page");
$smarty->assign("menue_path_4", "another_page.php"); $smarty->assign("menue_link_4", "Another Page");
$smarty->assign("menue_path_5", "corporation_registrierung.php"); $smarty->assign("menue_link_5", "Corporation Regiestrierung");

////////////////////////////////////////////Rechte Sidebar///////////////////////////////////////////////

/////////////Rechte Sidebar 1. Area Überschrift
$smarty->assign("right_taria_1", "News");
/////////////////Right Sidebar 1. Box
$smarty->assign("right_tbox1_1_", "Lybien"); ////Überschrift
$smarty->assign("right_tbox1_1_second", "25.08.2011"); ////Datum der box
$smarty->assign("right_tbox1_1_text", "Die Hauptstadt wurde, von den Rebellen, eingenommen!"); //// Box Text
$smarty->assign("right_tbox1_1_link", "http://www.blick.ch/news/rebellen-haben-die-libysche-hauptstadt-tripolis-eingenommen-vid23557"); $smarty->assign("right_tbox1_1_linktext", "Mehr Info`s"); /////link,text

///////////////Right Sidebar 1. Area und 2. Box
$smarty->assign("right_tbox1_2", "Apple Inc."); ////Überschrift
$smarty->assign("right_tbox1_2_second", "25.08.2011"); ////Datum der box
$smarty->assign("right_tbox1_2_text", "Der Apple Chef tretet als CEO zurück. Er will aber dennoch bei Apple bleiben!"); //// Box Text
$smarty->assign("right_tbox1_2_link", "http://www.golem.de/1108/85971.html"); $smarty->assign("right_tbox1_2_linktext", "Mehr Info`s"); /////link,text
/////////////Right Sidebar 2. Area und 1. Box
$smarty->assign("right_taria_2", ""); ////Überschrift
$smarty->assign("right_tbox2_1_link", ""); $smarty->assign("right_tbox2_1_linktext", ""); /////link,text
$smarty->assign("right_tbox2_2_link", ""); $smarty->assign("right_tbox2_2_linktext", ""); /////link,text
$smarty->assign("right_tbox2_3_link", ""); $smarty->assign("right_tbox2_3_linktext", ""); /////link,text
$smarty->assign("right_tbox2_4_link", ""); $smarty->assign("right_tbox2_4_linktext", ""); /////link,text

////////////////////////////////////////////Main Content///////////////////////////////////////////////

$smarty->assign("main_content1_heading", "Google versucht's mit etwas Transparenz"); /// content 1 Überschrift
$smarty->assign("main_content1_text", "Googles Suche ist eine Art Black Box. Niemand weiß genau, wie sie funktioniert. Eine ganze Industrie lebt davon, Websitebetreiber darüber zu beraten, wie sie dafür sorgen können, von Google besser gefunden zu werden. Meistens stellen die Kunden dann fest, dass Google den Tricks auf die Schliche kommt und seine Algorithmen anpasst - wie zuletzt mit Panda.<br/> <br/>
So werden die Vorwürfe lauter, Google habe bei den Änderungen seines Suchalgorithmus nur sein eigenes Wohl im Sinn, sprich: die eigenen Dienste besser zu ranken und Konkurrenten auf die hinteren Plätze zu verweisen. Und während \"Verlierer\" solche Algorithmus-Änderungen sehr deutlich zu spüren bekommen, <br/> <br/>sind die positiven Effekte, eine höhere Relevanz von Suchergebnissen, nur schwer zu quantifizieren.
Mit der weitgehenden Geheimhaltung seiner Suchtechnik fördert Google Spekulationen und Verschwörungstheorien. Dennoch bemüht sich das Unternehmen seit kurzem um ein klein wenig mehr Transparenz - nicht durch Offenlegung seiner Suchtechnik, sondern durch Erläuterung seiner Methoden zur Entscheidungsfindung."); /// der content 1 text

$smarty->assign("main_content2_heading", ""); /// content 2 Überschrift
$smarty->assign("main_content2_text", ""); /// der content 2 text

////////////////////////////////////////////Footer///////////////////////////////////////////////

$smarty->assign("footer_jear", "2011"); /// Jahr
$smarty->assign("footer_corp", "WEKA Fachmedien GmbH"); /// Firma
$smarty->assign("footer_area2", "Zertifikate"); /// Text für den 2. Bereich
$smarty->assign("footer_area3", "Kontakte"); /// Text für den 3. Bereich
$smarty->assign("footer_area4", "Impressum"); /// Text für den 4. Bereich
//////nun der Absulute Footer, der Text der ganz unten steht
$smarty->assign("footer_area_foottext", 'Willst du mehr Wissen dann schau mal hier vorbei:<a href="http://www.elektroniknet.de">Elektroniknet.de</a>.');


?>
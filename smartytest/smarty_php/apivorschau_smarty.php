<?php
require_once('Smarty-3.1rc1/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = 'data/templates';
$smarty->compile_dir 	= 'data/templates_c';
$smarty->cache_dir 	= 'data/cache';
$smarty->config_dir 	= 'data/configs';

//////Der Text über dem Logo
$smarty->assign("seiten_titel", "Vorschau");
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
$smarty->assign("right_tbox1_2_text", "Der Apple Chef tretet als CEO zur�ck. Er will aber dennoch bei Apple bleiben!"); //// Box Text
$smarty->assign("right_tbox1_2_link", "http://www.golem.de/1108/85971.html"); $smarty->assign("right_tbox1_2_linktext", "Mehr Info`s"); /////link,text
/////////////Right Sidebar 2. Area und 1. Box
$smarty->assign("right_taria_2", ""); ////Überschrift
$smarty->assign("right_tbox2_1_link", ""); $smarty->assign("right_tbox2_1_linktext", ""); /////link,text
$smarty->assign("right_tbox2_2_link", ""); $smarty->assign("right_tbox2_2_linktext", ""); /////link,text
$smarty->assign("right_tbox2_3_link", ""); $smarty->assign("right_tbox2_3_linktext", ""); /////link,text
$smarty->assign("right_tbox2_4_link", ""); $smarty->assign("right_tbox2_4_linktext", ""); /////link,text

//////////////////////////////////////////////Formular Corporation Registrieren///////////////////////////////////////////////////////////

$smarty->assign("Seitentitel", "Another Page");

//$smarty->assign("textfeld4", "Firmenname:");$smarty->assign("textfeldname5", "Firmenname");
//$smarty->assign("textfeld5", "Straße:");$smarty->assign("textfeldname6", "Strasse");
?>
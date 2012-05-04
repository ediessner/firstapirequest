<?php /* Smarty version Smarty 3.1-RC1, created on 2012-04-30 17:02:40
         compiled from "data/templates\vorschau.html" */ ?>
<?php /*%%SmartyHeaderCode:16114f9ea990783d03-20168848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07759e9147e4b3a6435559d6c0be67023806addd' => 
    array (
      0 => 'data/templates\\vorschau.html',
      1 => 1315307976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16114f9ea990783d03-20168848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seiten_titel' => 0,
    'site_logo_green' => 0,
    'site_logo_white' => 0,
    'text_under_logo' => 0,
    'menue_path_1' => 0,
    'menue_link_1' => 0,
    'menue_path_2' => 0,
    'menue_link_2' => 0,
    'menue_path_3' => 0,
    'menue_link_3' => 0,
    'menue_path_4' => 0,
    'menue_link_4' => 0,
    'menue_path_5' => 0,
    'menue_link_5' => 0,
    'right_taria_1' => 0,
    'right_tbox1_1_' => 0,
    'right_tbox1_1_second' => 0,
    'right_tbox1_1_text' => 0,
    'right_tbox1_1_link' => 0,
    'right_tbox1_1_linktext' => 0,
    'right_tbox1_2' => 0,
    'right_tbox1_2_second' => 0,
    'right_tbox1_2_text' => 0,
    'right_tbox1_2_link' => 0,
    'right_tbox1_2_linktext' => 0,
    'right_taria_2' => 0,
    'right_tbox2_1_link' => 0,
    'right_tbox2_1_linktext' => 0,
    'right_tbox2_2_link' => 0,
    'right_tbox2_2_linktext' => 0,
    'right_tbox2_3_link' => 0,
    'right_tbox2_3_linktext' => 0,
    'right_tbox2_4_link' => 0,
    'right_tbox2_4_linktext' => 0,
    'mbFirmenname' => 0,
    'mbStrasse' => 0,
    'mbPLZ' => 0,
    'mbOrt' => 0,
    'mbTelefon' => 0,
    'mbTelefax' => 0,
    'mbEMail' => 0,
    'mbInternet' => 0,
    'mbProduktportfolio' => 0,
    'mbFirmenausrichtung' => 0,
    'mbDienstleistungen' => 0,
    'mbPraesenz' => 0,
    'mbZielmaerkte' => 0,
    'mbReferenzen' => 0,
    'mbUnternehmensundFertigungsstandorte' => 0,
    'mbQualitaetsmanagement' => 0,
    'mbGruendungsjahr' => 0,
    'mbMitarbeiter' => 0,
    'phperror' => 0,
    'footer_jear' => 0,
    'footer_corp' => 0,
    'footer_area2' => 0,
    'footer_area3' => 0,
    'footer_area4' => 0,
    'footer_area_foottext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9ea99096a89',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9ea99096a89')) {function content_4f9ea99096a89($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

<head>
  <title><?php echo $_smarty_tpl->tpl_vars['seiten_titel']->value;?>
</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="data/templates/style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php"><span class="logo_colour"><?php echo $_smarty_tpl->tpl_vars['site_logo_green']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['site_logo_white']->value;?>
</a></h1>
          <h2><?php echo $_smarty_tpl->tpl_vars['text_under_logo']->value;?>
</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menue_link_1']->value;?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menue_link_2']->value;?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_3']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menue_link_3']->value;?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_4']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menue_link_4']->value;?>
</a></li>
          <li class="selected"><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_5']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menue_link_5']->value;?>
</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebarright">
        <!-- insert your sidebar items here -->
         <h3><?php echo $_smarty_tpl->tpl_vars['right_taria_1']->value;?>
</h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['right_tbox1_1_']->value;?>
</h4>
        <h5><?php echo $_smarty_tpl->tpl_vars['right_tbox1_1_second']->value;?>
</h5>
        <p><?php echo $_smarty_tpl->tpl_vars['right_tbox1_1_text']->value;?>
<br /><a href="<?php echo $_smarty_tpl->tpl_vars['right_tbox1_1_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['right_tbox1_1_linktext']->value;?>
</a></p>
        <p></p>
        <h4><?php echo $_smarty_tpl->tpl_vars['right_tbox1_2']->value;?>
</h4>
        <h5><?php echo $_smarty_tpl->tpl_vars['right_tbox1_2_second']->value;?>
</h5>
        <p><?php echo $_smarty_tpl->tpl_vars['right_tbox1_2_text']->value;?>
<br /><a href="<?php echo $_smarty_tpl->tpl_vars['right_tbox1_2_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['right_tbox1_2_linktext']->value;?>
</a></p>
        <h3><?php echo $_smarty_tpl->tpl_vars['right_taria_2']->value;?>
</h3>
        <ul>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['right_tbox2_1_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['right_tbox2_1_linktext']->value;?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['right_tbox2_2_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['right_tbox2_2_linktext']->value;?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['right_tbox2_3_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['right_tbox2_3_linktext']->value;?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['right_tbox2_4_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['right_tbox2_4_linktext']->value;?>
</a></li>
        </ul>
      </div>
	<form name="firma" action="speicher.php" method="post">
		<div align="center" >
		
		<br />
		<br />
			<table  bgcolor="#F0F0F0">
				<tr>
					<td>Firmenname</td> 						
					<td><?php echo $_smarty_tpl->tpl_vars['mbFirmenname']->value;?>
</td> <!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Staße</td> 							
					<td><?php echo $_smarty_tpl->tpl_vars['mbStrasse']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>PLZ</td> 								
					<td><?php echo $_smarty_tpl->tpl_vars['mbPLZ']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Ort</td> 								
					<td><?php echo $_smarty_tpl->tpl_vars['mbOrt']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Telefon</td> 							
					<td><?php echo $_smarty_tpl->tpl_vars['mbTelefon']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Telefax</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbTelefax']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>E-Mail:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbEMail']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Internet:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbInternet']->value;?>
</td>	<!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Produktportfolio:</td> 					
					<td><?php echo $_smarty_tpl->tpl_vars['mbProduktportfolio']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Firmenausrichtung:</td> 					
					<td><?php echo $_smarty_tpl->tpl_vars['mbFirmenausrichtung']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Dienstleistungen:</td>					
					<td><?php echo $_smarty_tpl->tpl_vars['mbDienstleistungen']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Präsenz:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbPraesenz']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Zielmärkte:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbZielmaerkte']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Referenzen:</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbReferenzen']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Unernehmens-/Fertigungsstandort(e)</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbUnternehmensundFertigungsstandorte']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Qualitätsmanagement</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbQualitaetsmanagement']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Gründungsjahr</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbGruendungsjahr']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
				<tr>
					<td>Mitarbeiter</td>
					<td><?php echo $_smarty_tpl->tpl_vars['mbMitarbeiter']->value;?>
</td><!-- Ausgabe der einzelnen Variable -->
				</tr>
					</table>
<?php echo $_smarty_tpl->tpl_vars['phperror']->value;?>

	<input class="submit2" name="zurueck" type="button" value="Zurück" onclick="history.back()">   <!-- Zurück Button mit js -->

		</div>
	</form>
	<br />
	</div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['footer_jear']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['footer_corp']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['footer_area2']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['footer_area3']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['footer_area4']->value;?>

    </div>
  </div>
<div style="text-align: center; font-size: 0.75em;"><?php echo $_smarty_tpl->tpl_vars['footer_area_foottext']->value;?>
</div></body>
</html><?php }} ?>
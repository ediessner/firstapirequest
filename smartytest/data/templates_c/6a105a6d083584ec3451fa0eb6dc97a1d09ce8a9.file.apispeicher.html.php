<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-01 23:54:32
         compiled from "data/templates\apispeicher.html" */ ?>
<?php /*%%SmartyHeaderCode:35494fa04f8b9e4c70-28489995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a105a6d083584ec3451fa0eb6dc97a1d09ce8a9' => 
    array (
      0 => 'data/templates\\apispeicher.html',
      1 => 1335908034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35494fa04f8b9e4c70-28489995',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fa04f8bb6623',
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
    'userid' => 0,
    'IP' => 0,
    'footer_jear' => 0,
    'footer_corp' => 0,
    'footer_area2' => 0,
    'footer_area3' => 0,
    'footer_area4' => 0,
    'footer_area_foottext' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa04f8bb6623')) {function content_4fa04f8bb6623($_smarty_tpl) {?><html> 
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
          <li class="selected"><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_4']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menue_link_4']->value;?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_5']->value;?>
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
        <div align="center">
                <form action="xml.php" name="firma" method="post">
                    <a href="index.php">Zur�ck zur Hauptseite</a>					
                    <table>
                        <tr>
                            <td ><br /> <br /> 
                                <b>
                                    Wir bedanken uns f�r Ihre Anmeldung und w�nschen Ihnen weiterhin viel Erfolg!<br />
                                                Sie haben die folgende User ID eingetragen: <?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
 
                                                Dies haben sie �ber die IP-Adresse <?php echo $_smarty_tpl->tpl_vars['IP']->value;?>
 eingetragen!<br/>
                                                Dr�cken Sie weiter um ihre xml Datei zu sehen.
                                </b>
                            </td>
                        </tr>
                    </table>
                    <input class="submit1" type="submit" value="XML">
                </form>
        </div>
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
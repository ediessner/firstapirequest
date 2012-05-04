<?php /* Smarty version Smarty 3.1-RC1, created on 2012-05-02 14:33:54
         compiled from "data/templates\another_page.html" */ ?>
<?php /*%%SmartyHeaderCode:143764f9eaa21b66396-91158032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03df37b5861bcb39b0ef624be8c7facb0c5c6463' => 
    array (
      0 => 'data/templates\\another_page.html',
      1 => 1335962016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143764f9eaa21b66396-91158032',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4f9eaa21cddee',
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
    'main_content1_heading' => 0,
    'main_content1_text' => 0,
    'main_content2_heading' => 0,
    'main_content2_text' => 0,
    'userid' => 0,
    'zurueck1' => 0,
    'api' => 0,
    'zurueck2' => 0,
    'footer_jear' => 0,
    'footer_corp' => 0,
    'footer_area2' => 0,
    'footer_area3' => 0,
    'footer_area4' => 0,
    'footer_area_foottext' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9eaa21cddee')) {function content_4f9eaa21cddee($_smarty_tpl) {?><!DOCTYPE HTML>
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
      <div id="content">
        <!-- insert the page content here -->
          <!-- insert the page content here -->
        <h1><?php echo $_smarty_tpl->tpl_vars['main_content1_heading']->value;?>
</h1>
        <?php echo $_smarty_tpl->tpl_vars['main_content1_text']->value;?>

		<br/>
        <h2><?php echo $_smarty_tpl->tpl_vars['main_content2_heading']->value;?>
</h2>
            <?php echo $_smarty_tpl->tpl_vars['main_content2_text']->value;?>

            <form action="apivorschau.php" name="firma" method="post">
                <div class="form_settings">
                    <label>
                    User ID<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
:
                    </label>
                    <p>
                        <input class="contact" type="text" name="userid" maxlength="60" value="<?php echo $_smarty_tpl->tpl_vars['zurueck1']->value;?>
" />
                    </p>
                    <label>
                    Full Access API Key<?php echo $_smarty_tpl->tpl_vars['api']->value;?>
:
                    </label>
                    <p>
                        <input class="contact" type="text" name="api" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['zurueck2']->value;?>
" />
                    </p>
                    <p>
                        <span>&nbsp;</span><input class="submit" type="reset" name="abbruch" value="Eingaben l&#246;schen">
                    </p>
                    <p>
                        <span>&nbsp;</span><input class="submit" type="submit" name="Zur Vorschau" value="submit" />
                    </p>
                </div>
            </form>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
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
</html>

<?php }} ?>
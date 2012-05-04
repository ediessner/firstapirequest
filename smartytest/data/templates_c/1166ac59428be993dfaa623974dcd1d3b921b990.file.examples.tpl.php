<?php /* Smarty version Smarty 3.1-RC1, created on 2011-08-30 16:59:52
         compiled from "data/templates\examples.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258534e5cfae835e7d7-59978736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1166ac59428be993dfaa623974dcd1d3b921b990' => 
    array (
      0 => 'data/templates\\examples.tpl',
      1 => 1314617713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258534e5cfae835e7d7-59978736',
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
    'main_content1_heading' => 0,
    'main_content1_text' => 0,
    'main_content2_heading' => 0,
    'main_content2_text' => 0,
    'footer_jear' => 0,
    'footer_corp' => 0,
    'footer_area2' => 0,
    'footer_area3' => 0,
    'footer_area4' => 0,
    'footer_area_foottext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4e5cfae8553fb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e5cfae8553fb')) {function content_4e5cfae8553fb($_smarty_tpl) {?><!DOCTYPE HTML>
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
          <li class="selected"><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menue_link_2']->value;?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_3']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menue_link_3']->value;?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['menue_path_4']->value;?>
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

        <h2>Headings</h2>
        <p>These are the different heading formats:</p>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
        <h2>Text</h2>
        <p>The following examples show how the text (within '&lt;p&gt;&lt;/p&gt;' tags) will appear:</p>
        <p><strong>This is an example of bold text</strong></p>
        <p><i>This is an example of italic text</i></p>
        <p><a href="#">This is a hyperlink</a></p>
        <h2>Lists</h2>
        <p>This is an unordered list:</p>
        <ul>
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
        </ul>
        <p>This is an ordered list:</p>
        <ol>
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
        </ol>
        <h2>Images</h2>
        <p>images can be placed on the left, in the center or on the right:</p>
        <span class="left"><img src="style/graphic.png" alt="example graphic" /></span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum.
        </p>
        <span class="center"><img src="style/graphic.png" alt="example graphic" /></span>
        <span class="right"><img src="style/graphic.png" alt="example graphic" /></span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </p>
        <h2>Tables</h2>
        <p>Tables should be used to display data and not used for laying out your website:</p>
        <table style="width:100%; border-spacing:0;">
          <tr><th>Item</th><th>Description</th></tr>
          <tr><td>Item 1</td><td>Description of Item 1</td></tr>
          <tr><td>Item 2</td><td>Description of Item 2</td></tr>
          <tr><td>Item 3</td><td>Description of Item 3</td></tr>
          <tr><td>Item 4</td><td>Description of Item 4</td></tr>
        </table>
        <h2>Form Elements</h2>
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>Form field example</span><input type="text" name="name" value="" /></p>
            <p><span>Textarea example</span><textarea rows="8" cols="50" name="name"></textarea></p>
            <p><span>Checkbox example</span><input class="checkbox" type="checkbox" name="name" value="" /></p>
            <p><span>Dropdown list example</span><select id="id" name="name"><option value="1">Example 1</option><option value="2">Example 2</option></select></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="button" /></p>
          </div>
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
</html>

<?php }} ?>
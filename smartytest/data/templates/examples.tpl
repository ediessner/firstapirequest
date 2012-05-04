<!DOCTYPE HTML>
<html>

<head>
  <title>{$seiten_titel}</title>
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
          <h1><a href="index.php"><span class="logo_colour">{$site_logo_green}</span>{$site_logo_white}</a></h1>
          <h2>{$text_under_logo}</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="{$menue_path_1}">{$menue_link_1}</a></li>
          <li class="selected"><a href="{$menue_path_2}">{$menue_link_2}</a></li>
          <li><a href="{$menue_path_3}">{$menue_link_3}</a></li>
          <li><a href="{$menue_path_4}">{$menue_link_4}</a></li>
          <li><a href="{$menue_path_5}">{$menue_link_5}</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebarright">
        <!-- insert your sidebar items here -->
         <h3>{$right_taria_1}</h3>
        <h4>{$right_tbox1_1_}</h4>
        <h5>{$right_tbox1_1_second}</h5>
        <p>{$right_tbox1_1_text}<br /><a href="{$right_tbox1_1_link}">{$right_tbox1_1_linktext}</a></p>
        <p></p>
        <h4>{$right_tbox1_2}</h4>
        <h5>{$right_tbox1_2_second}</h5>
        <p>{$right_tbox1_2_text}<br /><a href="{$right_tbox1_2_link}">{$right_tbox1_2_linktext}</a></p>
        <h3>{$right_taria_2}</h3>
        <ul>
          <li><a href="{$right_tbox2_1_link}">{$right_tbox2_1_linktext}</a></li>
          <li><a href="{$right_tbox2_2_link}">{$right_tbox2_2_linktext}</a></li>
          <li><a href="{$right_tbox2_3_link}">{$right_tbox2_3_linktext}</a></li>
          <li><a href="{$right_tbox2_4_link}">{$right_tbox2_4_linktext}</a></li>
        </ul>
      </div>
      <div id="content">
        <!-- insert the page content here -->
                <!-- insert the page content here -->
        <h1>{$main_content1_heading}</h1>
        {$main_content1_text}
		<br/>
        <h2>{$main_content2_heading}</h2>
        {$main_content2_text}
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
      Copyright &copy; {$footer_jear} {$footer_corp} | {$footer_area2} | {$footer_area3} | {$footer_area4}
    </div>
  </div>
<div style="text-align: center; font-size: 0.75em;">{$footer_area_foottext}</div></body>
</html>


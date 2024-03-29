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
          <li><a href="{$menue_path_2}">{$menue_link_2}</a></li>
          <li><a href="{$menue_path_3}">{$menue_link_3}</a></li>
          <li><a href="{$menue_path_4}">{$menue_link_4}</a></li>
          <li class="selected"><a href="{$menue_path_5}">{$menue_link_5}</a></li>
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
   <div class="homelink">
                    <td><img src="images/willkommen.gif" width="300" height="106 alt="Grafik"></td> 						
</div>
<a href="index.php"><font size="3px">Zur�ck zur Hauptseite</font></a>					

                <td align="center"><br /> <br /> <b>Wir bedanken uns f�r Ihre Anmeldung und w�nschen Ihnen weiterhin viel Erfolg!<br />
                                    Die Firma {$Firma} wurde von der IP {$IP} Fertig eingetragen!</b></td>
            </tr>

    </table>
	</div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; {$footer_jear} {$footer_corp} | {$footer_area2} | {$footer_area3} | {$footer_area4}
    </div>
  </div>
<div style="text-align: center; font-size: 0.75em;">{$footer_area_foottext}</div></body>
</html>
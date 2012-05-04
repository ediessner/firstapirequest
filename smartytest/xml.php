<?php
   include '/smarty_php/xml_smarty.php'; 
   
 ////aufbau der datenbankverbindung 
   session_start();

 /*   $mysqlhost = "localhost";

    $mysqluser = "root";

    $mysqlpwd = "spenochoal";

    $db = "eveapi";

    //verbindung zur db herstellen 
    $connection=mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) 
    or die
    ("Verbindungsversuch fehlgeschlagen");
    
    //Datenbank Wählen
    mysql_select_db($db); 
    
    //Abfrage in die Variable $query abspeichern
    $query = "SELECT userid,api FROM api";
    */
   
   /*$url = ('http://api.eve-online.com/char/WalletJournal.xml.aspx'); 
   $url2 = 'http://api.eve-online.com/account/Characters.xml.aspx?keyID='.$_SESSION["userid"].'&vCode='.$_SESSION ["api"];
   $url2 = fopen ($url2, 'r');
  

    echo 'hallo, ich bin der file-handle:'.$url2["characterID"];
  */
   
    $xml = simplexml_load_file('http://api.eve-online.com/account/Characters.xml.aspx?keyID='.$_SESSION["userid"].'&vCode='.$_SESSION ["api"]);
    //var_dump($xml);
    
    ///////////////Wenn die $xml->error[0] leer ist bearbeite weiter, andernfalls gib Error aus///////////////////////////
    if (empty($xml->error[0]))
        {   
        ////////////////// Übergabe der Character ID`s und Namen aus der simplaexml Variable $xml///////////////////////////////////
        $id0 = $xml->result->rowset->row[0]['characterID'];
        $name0 = $xml->result->rowset->row[0]['name'];
        $id1 = $xml->result->rowset->row[1]['characterID'];
        $name1 = $xml->result->rowset->row[1]['name'];
        $id2 = $xml->result->rowset->row[2]['characterID'];
        $name2 = $xml->result->rowset->row[2]['name'];
       
        //////////////////Überprüfung ob die Variable leer ist//////////////////////
        if (empty($id0))
        {   
            $wallet0 = "0";
            $wallet1 = "0"; 
            $wallet2 = "0";
        }
        else
        {
            //////////////////holen der xml und konvertieren in simplexml//////////////////////
            $char0 = simplexml_load_file('http://api.eve-online.com/char/AccountBalance.xml.aspx?keyID='.$_SESSION["userid"].'&characterID='.$id0.'&vCode='.$_SESSION ["api"]);
            //var_dump ($char0);
            $wallet0 = $char0->result->rowset->row['balance'];
            //var_dump ($wallet0);
                    //////////////////Überprüfung ob die Variable leer ist//////////////////////
            if (empty($id1))
            {
                $wallet1 = "0"; 
                $wallet2 = "0";
            }
            else
            {
                //////////////////holen der xml und konvertieren in simplexml//////////////////////
                $char1 = simplexml_load_file('http://api.eve-online.com/char/AccountBalance.xml.aspx?keyID='.$_SESSION["userid"].'&characterID='.$id1.'&vCode='.$_SESSION ["api"]);
                $wallet1 = $char1->result->rowset->row['balance'];
                        //////////////////Überprüfung ob die Variable leer ist//////////////////////
                if (empty($id2))
                {
                     $wallet2 = "0";
                }
                else
                {
                    //////////////////holen der xml und konvertieren in simplexml//////////////////////
                    $char2 = simplexml_load_file('http://api.eve-online.com/char/AccountBalance.xml.aspx?keyID='.$_SESSION["userid"].'&characterID='.$id2.'&vCode='.$_SESSION ["api"]);
                    $wallet2 = $char2->result->rowset->row['balance'];
                    
                    
                    
                    
                }
            }
        }
                    //////////////////////////Ausgabe der Namen und des Wallet//////////////////////////////

                                        $smarty->assign("name0", "$name0 :");
                                        $smarty->assign("xml0", "$wallet0 ISK");


                                        $smarty->assign("name1", "$name1 :");
                                        $smarty->assign("xml1", "$wallet1 ISK"); 


                                        $smarty->assign("name2", "$name2 :");
                                        $smarty->assign("xml2", "$wallet2 ISK"); 
        }
    else
        {
        echo 'ERROR. Der API Key hat sich geändert, bitte geben Sie ein aktuellen Key ein.';
        }

                
    
   // echo '<br>', $_SESSION["api"];
   // echo $_SESSION["userid"];

$smarty->display("xml.html");
?>
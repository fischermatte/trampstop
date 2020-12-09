<? 

session_start(); 

/*------------------------------------ Bei dem Anzeigen dieser Seite geht man davon aus, dass bei php.ini register_globals aktiviert ist-------------------------*/
?>


<html>
<head>
<title>Eintrag - www.trampstop.de</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="CSS_trampstop.css" type="text/css">

<meta name="keywords" content="trampen,trempen,anhalter,autostop,per anhalter, Deutschland, tramper,Trampen,Trampstop,hitchhiking,hitchiking,Hitchhiker,ortsdatenbank,datenbank,ortssuche,ortsuche ">
<meta name="description" content="Per Anhalter durch Deutschland. Trampstop - die Hilfe für Tramper im Netz.">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="800" border="0" cellspacing="0" cellpadding="0" align="left">
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" bgcolor="#FFFFFF" height="20"></td>
    <td nowrap align="left" valign="bottom" height="20" width="196"></td>
    <td width="4" nowrap height="0"></td>
    <td align="left" valign="bottom" nowrap height="20" width="559"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" height="20" width="20">&nbsp;</td>
  </tr>
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" bgcolor="#FFFFFF" height="60"></td>
    <td nowrap align="center" valign="middle" bgcolor="#000000" height="60" width="196"><a href="index.htm"><img src="images/logo.gif" width="173" height="60" border="0"></a> 
    </td>
    <td width="1" nowrap height="0" bgcolor="#000000">&nbsp;</td>
    <td nowrap bgcolor="#000000" height="60" align="right" valign="bottom" width="559"><img src="images/t_eintrag.gif" width="211" height="40"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" width="20" height="60"></td>
  </tr>
  <tr> 
    <td  nowrap align="left" valign="bottom" height="4" width="20"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"></td>
    <td width="1" nowrap height="1"></td>
    <td align="left" valign="bottom" nowrap height="1" width="559"></td>
    <td align="left" valign="bottom" nowrap height="1" width="20"> </td>
  </tr>
  <tr> 
    <td nowrap height="350" bgcolor="#9999FF" align="center" valign="top" width="20">&nbsp; 
    </td>
    <td nowrap height="350" bgcolor="#9999FF" align="center" valign="top" width="196"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="center">&nbsp;</td>
                <td align="left"> <a href="index.htm" target="_parent" class="hauptlinks">Home</a> 
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="center">&nbsp;</td>
                <td nowrap align="left"> <a href="suche.htm" class="hauptlinks"> 
                  Suche</a></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="right"><img src="images/marker.gif" width="5" height="10">&nbsp;&nbsp;</td>
                <td nowrap align="left" > <a href="eintrag.htm" class="hauptlinksAktiv">Eintrag</a></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100">&nbsp; </td>
                <td align="left"> <a HREF="Forum/index.php" class="hauptlinks">Forum</a> 
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="center">&nbsp;</td>
                <td align="left" > <a href="links.htm" class="hauptlinks">Links</a></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="right" valign="top"> 
                  <table width="60" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="40" height="19"><b><img src="images/kontakt.gif" width="26" height="15"></b></td>
                      <td width="20" align="right"><b>&nbsp; </b></td>
                    </tr>
                  </table>
                  
                </td>
                <td class="hauptlinks" align="left"> <a href="kontakt.htm" class="hauptlinks">Kontakt</a></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
    <td nowrap width="1" height="350"></td>
    <td valign="top" nowrap align="center" height="350" width="579" colspan="2"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#BEBEBE" height="350">
        <tr> 
          <td align="center" bgcolor="#FFFFFF" valign="top"> 
            <table border="0" cellspacing="0" cellpadding="10">
              <tr> 
                <td align="center" valign="middle" nowrap> <font size="2" color="#000066" face="Arial, Helvetica, sans-serif"> 
                  <?
/* --------------------- Falls es ein neuer Eintrag ist  ----------------------------*/

if (	
	session_is_registered("abfahrt") &&
	session_is_registered("richtung") &&   
	session_is_registered("norden") &&
	session_is_registered("sueden") &&
	session_is_registered("westen") &&
	session_is_registered("osten") &&
	session_is_registered("land") &&
	session_is_registered("absender") &&
	session_is_registered("bewertung") &&
	session_is_registered("datum") &&
	session_is_registered("beschreibung")) { 
	
/* ----------------------------------- ID ermitteln ---------------------------------------------*/  

$Server = mysql_pconnect ("localhost","web79","sahne24mist");
 
 if ($Server) {
 
  		$SQLString ="SELECT max(ID_Haupt) FROM haupt";
  		$Ergebnis = mysql_db_query("usr_web79_1",$SQLString);
  		$haupt_id = mysql_result($Ergebnis,0)+1;
  		
  	
	    
/* ------ Funktionen Kommasplittung und Eintrag in Tabelle richtung-----------*/
			
			function eintrag_richtung($richtung,$haupt_id,$Server) {
 
				if (strstr($richtung,',')) {
				     
					$richtungen = explode (",", $richtung);
					foreach ($richtungen as $teil) {
						$teil=ucfirst(trim($teil));
						$SQLString = "	INSERT INTO richtung 	(ID_Richt,Richtung)
										VALUES 					($haupt_id,'$teil')";
						mysql_db_query("usr_web79_1",$SQLString,$Server);
					}
					return true; }
					
				
		 		else 	{	
					$SQLString = "	INSERT INTO richtung 	(ID_Richt,Richtung) 
									VALUES 					($haupt_id,'$richtung')";
					if (!mysql_db_query("usr_web79_1",$SQLString,$Server)) {
						return false; }
					else { return true; }
				}
			
			}
		 	
/* ------------------------------------- Eintrag in Tabelle haupt und Checkkontrolle----------------------------------------------------*/ 
			
		$SQLString = "	INSERT INTO haupt (ID_Haupt,Abfahrt,Land,Bewertung,Beschreibung,Absender,Datum,Norden,Sueden,Westen,Osten)
						VALUES 			($haupt_id,'$abfahrt','$land','$bewertung','$beschreibung','$absender','$datum',$norden,$sueden,$westen,$osten)";
		
		if ( mysql_db_query("usr_web79_1",$SQLString,$Server)&& eintrag_richtung($richtung,$haupt_id,$Server)) {
			echo "<span class=\"Fehleranzeige\">Dein Eintrag wurde in die Datenbank &uuml;bernommen.</span><br><br>";
		    session_destroy();
			echo " <a href =\"javascript:location.replace('index.htm')\"class=\"AndereLinks\"> Zur&uuml;ck zur Startseite </a> <br><br>";
			echo " <a href =\"javascript:location.replace('eintrag.htm')\" class=\"AndereLinks\">  Neuer Eintrag </a> ";
			session_unregister("abfahrt");
			session_unregister("land");
			session_unregister("norden");
			session_unregister("sueden");
			session_unregister("westen");
			session_unregister("osten");
			session_unregister("datum");
			session_unregister("absender");
			session_unregister("beschreibung");
			session_unregister("bewertung");
			session_unregister("richtung");
		
			
		}
		else { 
			session_destroy();
			echo "<span class=\"Fehleranzeige\"> Bei der &Uuml;bertragung der Daten ist ein Fehler aufgetreten. </span><br><br>";
		}

    
	}
	
/* --------------------------- Wenn keine Verbindung zum Server -------------------------------*/
	else {
   			echo " <span class=\"Fehleranzeige\">Keine Verbindung zum MySQL-Server.</span><br><br>";
  			session_destroy();
		    echo "Versuch's sp&auml;ter noch ein mal."; 
		}
		
		
}
/* --------------------------- Wenn keine Variablenzugang -------------------------------*/
else {
 		echo "<span class=\"Fehleranzeige\">Ein Fehler ist aufgetreten. </span><br><br>";
		session_destroy();
		echo " <a href =\"javascript:location.replace('eintrag.htm')\" class=\"AndereLinks\"> Zur&uuml;ck. </a> ";
}	
		
	
 
?>
                  </font></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" height="4"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"> </td>
    <td nowrap height="1" width="1"></td>
    <td nowrap height="1" width="559"></td>
    <td align="left" valign="bottom" nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="60"></td>
    <td nowrap align="center" valign="middle" height="1" bgcolor="#000000" width="196"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#999999">&copy; 
      </font></b></font><font color="#999999"><b><font size="2"><font face="Arial, Helvetica, sans-serif" size="1">2002 
      Georg Ludewig</font></font></b></font></td>
    <td nowrap height="5" bgcolor="#000000" width="1"><font size="2">&nbsp;</font></td>
    <td align="center" valign="middle" nowrap height="1" bgcolor="#000000" width="559">&nbsp;</td>
    <td nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="20"></td>
    <td nowrap height="20" width="196">&nbsp;</td>
    <td nowrap height="20" width="1">&nbsp;</td>
    <td nowrap height="20" valign="bottom" width="559"><font size="1" face="Arial, Helvetica, sans-serif" color="#666666">&nbsp;&nbsp;&nbsp;Letzte &Auml;nderung: 10.10.2002</font></td>
    <td nowrap height="20" width="20"></td>
  </tr>
</table>
  
</body>
</html>

<? 



session_start();

?>
<html>
<head>
<title>Eintrag - www.trampstop.de </title>
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
    <td width="4" nowrap height="0" bgcolor="#000000"></td>
    <td nowrap bgcolor="#000000" height="60" align="right" valign="bottom" width="559"><img src="images/t_eintrag.gif" width="211" height="40"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" width="20" height="60"></td>
  </tr>
  <tr> 
    <td  nowrap align="left" valign="bottom" height="4" width="20"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"></td>
    <td width="4" nowrap height="1"></td>
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
                <td nowrap align="left"> <a href="suche.htm" class="hauptlinks">Suche</a></td>
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
    <td nowrap width="4" height="350"></td>
    <td height="350" width="579" colspan="2"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#BEBEBE" height="350">
        <tr> 
          <td align="center" bgcolor="#FFFFFF" valign="top"> 
            <form action="eintrag_store.php" method="get" name="dbEintrag" target="_self" >
              <br>
              <table border="0" cellspacing="1" cellpadding="10" bgcolor="#999999" width="90%" >
                <tr  valign="top"> 
                  <td  bgcolor="#E0E0E0"> 
                    <table border="0" cellspacing="0" cellpadding="0" width="100%">
                      <tr align="left" valign="bottom"> 
                        <td nowrap width="32"><span class="AndereLinks5">Von:&nbsp;</span> 
                          <br>
                        </td>
                        <td class="AndereLinks6">
                          <? $abfahrt = ucfirst(trim($abfahrt_));
					  echo $abfahrt;
					   ?>
                          </td>
                        <td nowrap width="40"><span class="AndereLinks5">&nbsp;Nach:&nbsp;</span> 
                        </td>
                        <td><span class="AndereLinks6"> 
                          <? $richtung = ucfirst(trim($richtung_)); 
						echo $richtung?><? 
						  
			$hrichtung = array(0,0,0,0);
			if (@$norden_)  $hrichtung[0] = 1;
			if (@$sueden_)  $hrichtung[1] = 1;
			if (@$westen_)  $hrichtung[2] = 1;
			if (@$osten_)  $hrichtung[3] = 1;
			
			$n=0;
			
			for($x=0;$x<4;$x++) {
			 if ($hrichtung[$x] == 1) {

			
				if ($n != 0 || $richtung != "") echo ", ";	

				if ($x==0) echo "Norden";
				if ($x==1) echo "S&uuml;den";
				if ($x==2) echo "Westen";
				if ($x==3) echo "Osten";
				$n=1;
				
			  }
			  
			 }
			
			 $norden = $hrichtung[0];
			 $sueden = $hrichtung[1];
			 $westen = $hrichtung[2];
			 $osten = $hrichtung[3];
			 
			
			
		   
	?>
                          </span></td>
                      </tr>
                    </table>
                   
                    <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="AndereLinks6"><font size="1">Land: 
                          <? 
						  $land = $land_;
						   echo $land;
									
						   ?>
                          </font></td>
                      </tr>
                    </table>
                    </td>
                </tr>
                <tr > 
                  <td valign="middle" bgcolor="#E0E0E0"> <span class="AndereLinks5">Beschreibung:</span><br>
                    <span class="AndereLinks6"> 
	<? 	$auslese = nl2br(trim($beschreibung_));
		$beschreibung = $beschreibung_;
		echo $auslese;
	?>
                    </span></td>
                </tr>
                <tr > 
                  <td nowrap valign="bottom" bgcolor="#E0E0E0"> <span class="AndereLinks5">Bewertung:</span> 
                    <span class="AndereLinks6"> 
                    <? 	if (@$bewertung_ < 1) {
			echo " --- ";
			$bewertung = 0;
		}
		else { 
			$bewertung = $bewertung_;
			echo $bewertung;
		}
	?>
                    </span> <span class="AndereLinks5">&nbsp;&nbsp;&nbsp;&nbsp;Dein 
                    Name/Email: </span><span class="AndereLinks6"> 
                    <? 	$absender = trim($absender_);
		if ( $absender == "") { 
			echo " --- ";
			$absender = "Keine Angaben";
		}	
		else { 
			echo $absender;
		}		
	?>
                    </span> </td>
                </tr>
                <tr > 
                  <td align="center" nowrap bgcolor="#E0E0E0" class="AndereLinks6"> 
                    <input type="button" name="Button2" value="Zur&uuml;ck" onClick ="history.back()" >
                    <input type="Button" name="ab" value="Ab damit !"  onClick ="location.replace('eintrag_store.php?<? echo SID?>')" >
					<?
				
					$date = date("d.m.Y");
					$time=(date("H:i:d"));
					$datum = $date." ".$time;
					
					session_register("abfahrt","richtung","norden","sueden","westen","osten","land","absender","bewertung","beschreibung","datum");
					
					
					?>
                  </td>
                </tr>
              </table>
             
              <br>
            </form>
			
		
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" height="4"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"> </td>
    <td nowrap height="1" width="4"></td>
    <td nowrap height="1" width="559"></td>
    <td align="left" valign="bottom" nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="60"></td>
    <td nowrap align="center" valign="middle" height="1" bgcolor="#000000" width="196"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#999999">&copy; 
      </font></b></font><font color="#999999"><b><font size="2"><font face="Arial, Helvetica, sans-serif" size="1">2002 
      Georg Ludewig</font></font></b></font></td>
    <td nowrap height="5" bgcolor="#000000" width="4"><font size="2">&nbsp;</font></td>
    <td align="center" valign="middle" nowrap height="1" bgcolor="#000000" width="559">&nbsp;</td>
    <td nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="20"></td>
    <td nowrap height="20" width="196">&nbsp;</td>
    <td nowrap height="20" width="4">&nbsp;</td>
    <td nowrap height="20" valign="bottom" width="559"><font size="1" face="Arial, Helvetica, sans-serif" color="#666666">&nbsp;&nbsp;&nbsp;Letzte &Auml;nderung: 10.10.2002</font></td>
    <td nowrap height="20" width="20"></td>
  </tr>
</table>
  
</body>
</html>

<?
$ok = 0;
if(@$HTTP_POST_VARS["submit"]) {
	require("conf.php");
	$ok = 1;
	if(empty($onderwerp))
		$err[] = "Du hast die \"Betreff\"-Angaben vergessen!";

	if(empty($naam))
		$err[] = "Du hast Deinen Namen vergessen anzugeben!";

	if(empty($bericht))
		$err[] = "Du hast keinen Beitrag geschrieben !";
	
	for($i=0;$i<sizeof($bad_words);$i++)
		if(ereg($bad_words[$i], $naam) || ereg($bad_words[$i], $onderwerp) || ereg($bad_words[$i], $bericht))
			$err[] = "Wir wollen dieses Forum sauber halten. Bitte benutze eine anständige Sprache!";

	if(sizeof(@$err) > 0) {
		?>
			<html>
			<head>
			<title>Trampstop - Die Tramphilfe im Netz - F O R U M</title>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<link rel="stylesheet" href="../CSS_trampstop.css" type="text/css">
			

<meta name="keywords" content="trampen,trempen,anhalter,autostop,per anhalter, Deutschland, tramper,Trampen,Trampstop,hitchhiking,hitchiking,Hitchhiker,ortsdatenbank,datenbank,ortssuche,ortsuche ">
<meta name="description" content="Per Anhalter durch Deutschland. Trampstop - die Hilfe für Tramper im Netz.">
</head>
			
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<table width="800" border="0" cellspacing="0" cellpadding="0" align="left">
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" bgcolor="#FFFFFF" height="20"></td>
    <td nowrap align="left" valign="bottom" height="20" width="196"></td>
    <td width="1" nowrap height="0"></td>
    <td align="left" valign="bottom" nowrap height="20" width="559"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" height="20" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" bgcolor="#FFFFFF" height="60"></td>
    <td nowrap align="center" valign="middle" bgcolor="#000000" height="60" width="196"><a href="../../index.htm"><img src="../images/logo.gif" width="173" height="60" border="0"></a> 
    </td>
   <td width="4" nowrap bgcolor="#000000">&nbsp; </td>
    <td align="right" valign="bottom" nowrap bgcolor="#000000" height="60" width="559"><img src="../images/t_forum.gif" width="161" height="39"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" width="20" height="60"></td>
  </tr>
  <tr> 
    <td  nowrap align="left" valign="bottom" height="4" width="20"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"></td>
    <td width="1" nowrap height="0"></td>
    <td align="left" valign="bottom" nowrap height="1" width="559"></td>
    <td align="left" valign="bottom" nowrap height="1" width="21"> </td>
  </tr>	
   <tr> 
    <td nowrap bgcolor="#FBBC00" align="center" valign="top" height="350">&nbsp; </td>
    <td nowrap bgcolor="#FBBC00" align="center" valign="top" width="196" height="350"> 
      <table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" ALIGN="right">&nbsp;&nbsp;</td>
                <td ALIGN="left"> <a HREF="../index.htm" target="_parent" CLASS="hauptlinks">Home</a> </td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" ALIGN="center">&nbsp;</td>
                <td nowrap ALIGN="left"> <a HREF="../Ortsdatenbank.htm" target="_parent" CLASS="hauptlinks">Ortsdatenbank</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" align="right"><img SRC="../images/marker.gif" WIDTH="5" HEIGHT="10">&nbsp;&nbsp; </td>
                <td ALIGN="left" background="index.php"> <a HREF="index.php" target="_parent" CLASS="hauptlinksAktiv">Forum</a> </td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" ALIGN="center">&nbsp;</td>
                <td ALIGN="left" background="../links.htm" > <a HREF="../links.htm" target="_parent" CLASS="hauptlinks">Links</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="70" align="right" valign="top">&nbsp; </td>
                <td align="left" background="../kontakt.htm" class="hauptlinks"> <a href="../kontakt.htm" target="_parent" class="hauptlinks">Kontakt</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="109"></td>
        </tr>
      </table></td>
    <td nowrap width="1" height="350"></td>
    <td valign="top" nowrap align="left" colspan="2" height="350"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="0" height="350" bgcolor="#BEBEBE">
        <tr> 
          <td height="30" align="center" bgcolor="#FBBC00" class="AndereLinks5" > 
            Beitrag schreiben. </td>
        </tr>
        <tr> 
          <td height="320" valign="top" bgcolor="#FFFFFF"> 
            <!-- Kommentar: Das Insert, START  -->
            <table width="580" border=0 cellspacing=0 cellpadding=0>
					<tr>
						<td class="MainTD">
							<table width="100%" border=0 cellspacing=1 cellpadding=3>
  								<tr>
          							<td class="HeaderText">Der Beitrag:</td>
 								</tr>
  								<tr>
   									<td valign="top" align="left" class="NormalText">
     								<form method="POST" action="<?=$PHP_SELF?>">
     									<input type="hidden" name="onderwerp" value="<?=$onderwerp?>">
     									<input type="hidden" name="naam" value="<?=$naam?>">
     									<input type="hidden" name="bericht" value="<?=$bericht?>">
     									<input type="hidden" name="reply" value="<?=@$reply?>">Error,<br>
              								<br>
              								Irgendwas ist schief gelaufen. Bitte beachte die unten aufgef&uuml;hrte(n) 
              								Fehlermeldung(en).<br>
              								<br>
										<?
											for($i=0;$i<sizeof($err);$i++)
												echo "\n\t<font class=\"Error\">".$err[$i]."</font><br>";
										?>
     									<input type="submit" value="Back">
     								</form>
   									</td>
  								</tr>
 							</table>
						</td>
					</tr>
			</table>
		  <!-- Kommentar: Das Insert, ENDE  -->          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" height="4"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"> </td>
    <td nowrap height="1" width="1"></td>
    <td nowrap height="1" width="559"></td>
    <td align="left" valign="bottom" nowrap height="1" width="21"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="60"></td>
    <td nowrap align="center" valign="middle" height="1" bgcolor="#000000" width="196" class="AndereLinksCopyrightHome">&copy; 
      2002 Georg Ludewig</td>
    <td nowrap height="5" bgcolor="#000000" width="4"><font size="2">&nbsp;</font></td>
    <td align="center" valign="middle" nowrap height="1" bgcolor="#000000" width="559"><&nbsp;</td>
    <td nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="20"></td>
    <td nowrap height="20" width="196">&nbsp;</td>
    <td nowrap height="20" width="4">&nbsp;</td>
    <td nowrap height="20" valign="bottom" width="559"><font size="1" face="Arial, Helvetica, sans-serif" color="#666666">&nbsp;&nbsp;&nbsp;Letzte &Auml;nderung: 06.12.2004</font></td>
    <td nowrap height="20" width="20"></td>
  </tr>
</table>
			</body>
			</html>
	<?
	} else {

		mysql_connect($host,$user,$pass);
		mysql_select_db($db);

		$date=(date("d.m.Y"));
		$time=(date("H:i:d")); 
		$op = $date." ".$time;

		$sql = "INSERT INTO forum (id, onderwerp, naam, bericht, optijd, op, replyop) VALUES ('', '$onderwerp', '$naam', '$bericht', '".time()."', '".$op."', '".$reply."')";
		mysql_query($sql) or die("<h1>Irgendwas lief schief</h1><hr>".mysql_error());
		
		
		if($reply <> 0) {
			$sql = "UPDATE forum SET replys = replys+1 WHERE id = '$reply'";
			mysql_query($sql) or die("<h1>Irgendwas lief schief</h1><hr>".mysql_error());
			
		}

		if($reply == 0)
			header("Location: ./index.php"); 
		else
			header("Location: ./read.php?id=$reply");
	}
} else {
	if(!isset($reply))
		$reply = 0;
	
	if($reply <> 0) 
		$title = "Auf Beitrag antworten";
	else $title = "Neuen Beitrag schreiben";
	
	?>
<html>
<head>
<title>Trampstop - Die Tramphilfe im Netz - F O R U M</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../CSS_trampstop.css" type="text/css">
<script language="JavaScript">
<!--

function legende () {

F4 = open("legende.htm","Legende","width=277,height=217");

}
function SubmitOnce(theform) {
	// if IE 4+ or NS 6+
	if (document.all || document.getElementById) {
		// hunt down "submit" and "reset"
		for (i=0;i<theform.length;i++) {
			var tempobj=theform.elements[i];
			if(tempobj.type.toLowerCase()=="submit"||tempobj.type.toLowerCase()=="reset") {
				//disable it
				tempobj.disabled=true;
			}
		}
	}
}
//-->
</script>
<meta name="keywords" content="trampen,trempen,anhalter,autostop,per anhalter, Deutschland, tramper,Trampen,Trampstop,hitchhiking,hitchiking,Hitchhiker,ortsdatenbank,datenbank,ortssuche,ortsuche ">
<meta name="description" content="Per Anhalter durch Deutschland. Trampstop - die Hilfe für Tramper im Netz.">
</head>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="800" border="0" cellspacing="0" cellpadding="0" align="left">
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" bgcolor="#FFFFFF" height="20"></td>
    <td nowrap align="left" valign="bottom" height="20" width="196"></td>
    <td width="1" nowrap height="0"></td>
    <td align="left" valign="bottom" nowrap height="20" width="559"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" height="20" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" bgcolor="#FFFFFF" height="60"></td>
    <td nowrap align="center" valign="middle" bgcolor="#000000" height="60" width="196"><a href="../index.htm"><img src="../images/logo.gif" width="173" height="60" border="0"></a> 
    </td>
    <td width="4" nowrap bgcolor="#000000">&nbsp; </td>
    <td align="right" valign="bottom" nowrap bgcolor="#000000" height="60" width="559"><img src="../images/t_forum.gif"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" width="20" height="60"></td>
  </tr>
  <tr> 
    <td  nowrap align="left" valign="bottom" height="4" width="20"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"></td>
    <td width="1" nowrap height="0"></td>
    <td align="left" valign="bottom" nowrap height="1" width="559"></td>
    <td align="left" valign="bottom" nowrap height="1" width="21"> </td>
  </tr>
  <tr> 
    <td nowrap bgcolor="#FBBC00" align="center" valign="top" height="350">&nbsp; </td>
    <td nowrap bgcolor="#FBBC00" align="center" valign="top" width="196" height="350"> 
 <table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" ALIGN="right">&nbsp;&nbsp;</td>
                <td ALIGN="left"> <a HREF="../index.htm" target="_parent" CLASS="hauptlinks">Home</a> </td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" ALIGN="center">&nbsp;</td>
                <td nowrap ALIGN="left"> <a HREF="../Ortsdatenbank.htm" target="_parent" CLASS="hauptlinks">Ortsdatenbank</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" align="right"><img SRC="../images/marker.gif" WIDTH="5" HEIGHT="10">&nbsp;&nbsp; </td>
                <td ALIGN="left" background="index.php"> <a HREF="index.php" target="_parent" CLASS="hauptlinksAktiv">Forum</a> </td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" ALIGN="center">&nbsp;</td>
                <td ALIGN="left" background="../links.htm" > <a HREF="links.htm" target="_parent" CLASS="hauptlinks">Links</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="70" align="right" valign="top">&nbsp; </td>
                <td align="left" background="../kontakt.htm" class="hauptlinks"> <a href="kontakt.htm" target="_parent" class="hauptlinks">Kontakt</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="109"></td>
        </tr>
      </table>
    </td>
    <td nowrap width="1" height="350"></td>
    <td valign="top" nowrap align="left" colspan="2" height="350"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="0" height="350" bgcolor="#BEBEBE">
        <tr> 
          
			  <td height="30" align="center" bgcolor="#FBBC00" class="AndereLinks5" > 
             <? echo @$title ?></td>
			  
			  
        </tr>
        <tr> 
          <td valign="top" bgcolor="#E1E1E1" height="320">

<!-- Kommentar: Das Insert, START  -->

<table width="580" border=0 cellspacing=0 cellpadding=0>
	<tr>
		<td class="MainTD">
			<table width="100%" border=0 cellspacing=0 cellpadding=6>
  
  				<tr>
   					<td valign="top" align="left" class="NormalText">
     				<form name="postform" onsubmit="SubmitOnce(this);" method="POST" action="<?=$PHP_SELF?>">
       						Dein Name:<br>
						<input type="text" name="naam" value="<?=@$naam?>"><br>
       						Den Betreff Deines Beitrages:<br>
       					<input type="text" name="onderwerp" value="<?=@$onderwerp?>"><br>
       						Dein Beitrag:<br>
       					<textarea name="bericht" rows="8" cols="40"><?=@$bericht?></textarea><br>
       					<input type="hidden" name="reply" value="<?=@$reply?>">
       					<input type="hidden" name="submit" value="true">
       					<input type="submit" value="Submit">
       					<input type="reset" value="Reset">
						 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/kiss.gif" onMouseUp="legende()">
     				</form>
					<?
						}
					?>
   					</td>
					
						
					
  				</tr>
				
 			</table>
		</td>
	</tr>
</table>

<!-- Kommentar: Das Insert, Ende  -->

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
    <td align="left" valign="bottom" nowrap height="1" width="21"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="60"></td>
    <td nowrap align="center" valign="middle" height="1" bgcolor="#000000" width="196" class="AndereLinksCopyrightHome">&copy; 
      2002 Georg Ludewig</td>
    <td nowrap height="5" bgcolor="#000000" width="4"><font size="2">&nbsp;</font></td>
    <td align="center" valign="middle" nowrap height="1" bgcolor="#000000" width="559"><&nbsp;</td>
    <td nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="20"></td>
    <td nowrap height="20" width="196">&nbsp;</td>
    <td nowrap height="20" width="4">&nbsp;</td>
    <td nowrap height="20" valign="bottom" width="559"><font size="1" face="Arial, Helvetica, sans-serif" color="#666666">&nbsp;&nbsp;&nbsp;Letzte &Auml;nderung: 09.09.2002</font></td>
    <td nowrap height="20" width="20"></td>
  </tr>
</table>

</body>
</html>
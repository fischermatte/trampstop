<html>
<head>
<title>Trampstop - Die Tramphilfe im Netz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../CSS_trampstop.css" type="text/css">
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
    <td width="1" nowrap height="0" bgcolor="#000000"></td>
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
        <!--DWLayoutTable-->
        <tr> 
          <td width="595" height="30" align="center" bgcolor="#FBBC00" > <span class="AndereLinks5"><strong>Nachricht 
            lesen</strong></span></td>
        </tr>
        <tr> 
          <td align="center" valign="top" bgcolor="#FFFFFF"> 
            <?
if(isset($id)){
?>
            <br>
            <table width="95%" border=0 cellspacing=0 cellpadding=0>
              <tr> 
                <td height="20" align="right"> <a href="./index.php" class="HeaderText">Zur&uuml;ck 
                  zum Index</a> <span class="HeaderText">|</span> <a href="./message.php?reply=<?=$id?>" class="HeaderText">Auf 
                  diesen Beitrag antworten | </a></td>
              </tr>
            </table>
           
            <table width="95%" border=0 cellpadding=0 cellspacing=1 bgcolor="#BEBEBE">
              <tr><td >
<table width="100%" border=0 cellpadding=3 cellspacing=0 class="HGFarbeFFDF7D">
                    <tr>
                      <td class="MainTD">Der Beitrag</td>
  </tr>
                    <?
	$farbe_hell ="#EEEEEE";
	$farbe_dunkel="#D2D2D2";
	require("conf.php");
	include("functions.php");
	$server = mysql_connect($host,$user,$pass);
	mysql_select_db($db,$server);
	$sql = "SELECT * FROM forum WHERE id = $id ORDER BY optijd DESC";
	$res = mysql_query($sql);	
	$row = mysql_fetch_array($res);
	echo "<tr bgcolor=\"$farbe_hell\">\n";
	echo "<td valign=top align=left class=\"NormalText\">\n";
	echo "<b>Betreff:</b> ".htmlspecialchars($row["onderwerp"])."<br>\n"; 
	echo "<b>Von:</b> ".htmlspecialchars($row["naam"])."<br>\n";
	echo "<b>Geschrieben am:</b> ".$row["op"]."<br>\n";
	echo "<b>Beitrag:</b><br><br><font size=\"2\">".MaakOp($row["bericht"])."</font></td>\n";
	echo "</tr>\n";
?>
                  </table>
</td></tr>
</table>

            <br>
            <table width="95%" border=0 cellpadding=0 cellspacing=1 bgcolor="#BEBEBE">
              <tr><td >
<table width="100%" border=0 cellpadding=3 cellspacing=0 class="HGFarbeFFDF7D">
                    <tr> 
                      <td height="20" class="MainTD">Die Antworten</td>
                    </tr>
                    <?
	$ond = $row["onderwerp"];    
	$sql = "SELECT * FROM forum WHERE replyop = $id ORDER BY optijd DESC";
	$res = mysql_query($sql);
	if(mysql_num_rows($res) == 0){
		echo "<tr bgcolor=\"#E8E8E8\">\n";
		echo "<td valign=top align=left class=\"NormalText\">\n";
		echo "Keine Antworten\n "; 
		echo "</tr>\n";
	} else {
		
		$wechsel=2;
		$farbe=$farbe_hell;
		while($row = mysql_fetch_object($res)){
			if ($wechsel % 2 == 0 ) $farbe = $farbe_hell;
			else $farbe = $farbe_dunkel; 
			echo "<tr bgcolor=\"$farbe\">\n";
			echo "<td valign=top align=left class=\"NormalText\">\n";
			echo "<b>Betreff:</b> ".htmlspecialchars($row->onderwerp)."<br>\n"; 
			echo "<b>Von:</b> ".htmlspecialchars($row->naam)."<br>\n";
			echo "<b>Geschrieben am:</b> $row->op<br>\n";
			echo "<b>Beitrag:</b><br><br><font size=\"2\"> ".MaakOp($row->bericht)."</font></td>\n";
			echo "</tr>\n";
			$wechsel++;
		}
	}
?>
                  </table>
</td></tr>
</table>
            <table width="95%" border=0 cellspacing=0 cellpadding=0>
              <tr>
	            <td height="20" align="right"> <a href="./index.php" class="HeaderText">Zur&uuml;ck 
                  zum Index</a> <span class="HeaderText">|</span> <a href="./message.php?reply=<?=$id?>" class="HeaderText">Auf 
                  diesen Beitrag antworten | </a></td>
</tr>
</table>
            <br>
            <?
}
else {
	header("Location: ./index.php");
}
?>
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
    <td nowrap height="20" valign="bottom" width="559"><font size="1" face="Arial, Helvetica, sans-serif" color="#666666">&nbsp;&nbsp;&nbsp;Letzte &Auml;nderung: 06.12.2004</font></td>
    <td nowrap height="20" width="20"></td>
  </tr>
</table>

  
  </body>
</html>

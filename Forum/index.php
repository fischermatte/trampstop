<?
require("./conf.php");
include("./functions.php");

mysql_connect($host,$user,$pass);
mysql_select_db($db);

if (!isset($page))
	$page = 0;

$aantal_per_page = $messages_per_page;

$x = $page * $aantal_per_page;

$sql = "SELECT * FROM forum WHERE replyop = 0 ORDER BY optijd DESC LIMIT $x, $aantal_per_page";
$res = mysql_query($sql) or die(mysql_error());

$que1 = "SELECT * FROM forum WHERE replyop = 0";
$out1 = mysql_query($que1) or die(mysql_error());

$num = mysql_num_rows($out1);
?>
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
          <td height="30" align="center" bgcolor="#FBBC00" class="AndereLinks5">&Uuml;bersicht</td>
        </tr>
        <tr> 
          <td width="601" height="320" align="center" valign="top" bgcolor="#FFFFFF"><br>
            <table width="95%" border=0 cellpadding=0 cellspacing=0>
              <tr> 
                <td width="68%" height="25" align="right"  ><font size="1"><a href="message.php" class="HeaderText"> 
                  </a></font> </td>
                <td width="32%" align="right" nowrap  ><font size="1"><a href="message.php" class="HeaderText">Neuen 
                  Beitrag hinzuf&uuml;gen</a> | 
                  <? 

			$bla = $aantal_per_page + $aantal_per_page * $page;
			if ($num > $bla) 
			{
				echo "<a href=\"./index.php?page=" . ($page + 1) . "\"><span class=\"HeaderText\">Folgende $aantal_per_page Beiträge</span></a> |";
			}
			else 
			{
				echo "<span class=\"HeaderText\">Folgende $aantal_per_page Beiträge |</span>";
			}


			if ($page > 0) 
			{
				echo "<a href=\"./index.php?page=" . ($page - 1) . "\"> <span class=\"HeaderText\">Letzte $aantal_per_page Beiträge</span></a>  ";
			}
			else 
			{
				echo "<span class=\"HeaderText\"> Letzte $aantal_per_page Beiträge</span>";
			}
		$farbe_hell ="#EEEEEE";
		$farbe_dunkel="#D2D2D2";
		?>
                  </font></td>
              </tr>
            </table>
            <table width="95%" border="0" cellpadding="0" cellspacing="1" bgcolor="#BEBEBE">
              <tr> 
                <td><table width="100%" border=0 cellpadding=3 cellspacing=0>
                    <tr  bgcolor="#FFDF7d" class="MainTD"> 
                      <td height="20">Betreff:</td>
                      <td height="20">Von:</td>
                      <td width="20%" >Datum:</td>
                      <td width="13%" height="20" > 
                        <p>Antworten:</p></td>
                    </tr>
                    <?
		
		$wechsel=2;
		$farbe=$farbe_hell;
		while($row = mysql_fetch_object($res)){
		if ($wechsel % 2 == 0 ) $farbe = $farbe_hell;
		else $farbe = $farbe_dunkel; 
	
	
	?>
                    <tr bgcolor="<?echo $farbe;?>" > 
                      <td width="35%" height="30" nowrap  ><a href="./read.php?id=<?=$row->id?>" class="HeaderText"> 
                        <strong> 
                        <?=(strlen($row->onderwerp) > $max_length) ? substr(htmlspecialchars($row->onderwerp),0,$max_length)."..." : htmlspecialchars($row->onderwerp)?>
                        </strong></a></td>
                      <td width="22%" height="30"   nowrap> <span class="NormalText"> 
                        <?=(strlen($row->naam) > $max_length) ? substr(htmlspecialchars($row->naam),0,$max_length)."..." : htmlspecialchars($row->naam)?>
                        </span></td>
                      <td height="30" align="left"  nowrap><span class="NormalText"> 
                        <? $datum=$row->op;
				     echo substr($datum,-19,-8);
					 ?>
                        </span></td>
                      <td  height="30" align="center"  nowrap><span class="NormalText"> 
                        <?=$row->replys?>
                        </span></td>
                    </tr>
                    <?
		$wechsel++;
		}
	?>
                  </table></td>
              </tr>
            </table>
            <table width="95%" border=0 cellspacing=0 cellpadding=0>
              <tr> 
                <td width="68%" height="25" align="right"  >&nbsp; </td>
                <td align="right"  ><a href="./message.php" class="HeaderText">Neuen 
                  Beitrag hinzuf&uuml;gen&nbsp; </a></td>
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

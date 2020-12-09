<?
$id = false;
	if (isset($HTTP_GET_VARS['id'])) $id = $HTTP_GET_VARS['id'];
	

?>

<html>
<head>
<title>Trampen in Deutschland - www.trampstop.de - Umfrage</title>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="keywords" content="trampen,trempen,anhalter,autostop,per anhalter, Deutschland, tramper,Trampen,Trampstop,hitchhiking,hitchiking,Hitchhiker,ortsdatenbank,datenbank,ortssuche,ortsuche ">
<meta name="description" content="Per Anhalter durch Deutschland. Trampstop - die Hilfe für Tramper im Netz.">
<link REL="stylesheet" HREF="CSS_trampstop.css" TYPE="text/css">


<style type="text/css" media="all">
.oldbrowser	{ 
display:	none;
}
</style>

<meta name="keywords" content="trampen,trempen,anhalter,autostop,per anhalter, Deutschland, tramper,Trampen,Trampstop,hitchhiking,hitchiking,Hitchhiker,ortsdatenbank,datenbank,ortssuche,ortsuche ">
<meta name="description" content="Per Anhalter durch Deutschland. Trampstop - die Hilfe für Tramper im Netz.">
</head>

<body BGCOLOR="#FFFFFF" TEXT="#000000" LEFTMARGIN="0" TOPMARGIN="0" marginwidth="0" marginheight="0" >

  
<table WIDTH="800" BORDER="0" CELLSPACING="0" CELLPADDING="0" ALIGN="left">
  <tr> 
      
    <td WIDTH="20" HEIGHT="20"></td>
      
    <td HEIGHT="20" WIDTH="196"></td>
      <td WIDTH="4" ></td>
      <td HEIGHT="20" WIDTH="560"><p class="oldbrowser"><font color="#FF0000" face="Arial, Helvetica, sans-serif">Ihr 
          Browser ist veraltet! Inhalte werden nicht ordnungsgemäss angezeigt.</font></p></td>
      <td HEIGHT="20" WIDTH="20"></td>
    </tr>
    <tr> 
      
    <td width="20" bgcolor="#FFFFFF" height="60"></td>
      
    <td nowrap align="center" valign="middle" bgcolor="#000000" height="60" width="196"><a href="index.htm" target="_parent"><img src="images/logo.gif" width="173" height="60" border="0"></a> 
    </td>
      <td width="4" nowrap bgcolor="#000000">&nbsp; </td>
      <td align="right" valign="bottom" nowrap bgcolor="#000000" height="60" width="560"><img src="images/t_home.gif" width="174" height="40"></td>
      <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" width="20" height="60"></td>
    </tr>
    <tr> 
      
    <td HEIGHT="4" WIDTH="20"></td>
      
    <td HEIGHT="1" WIDTH="196"></td>
      <td WIDTH="4" ></td>
      <td HEIGHT="1" WIDTH="560"></td>
      <td HEIGHT="1" WIDTH="20"> </td>
    </tr>
    <tr> 
      
    <td WIDTH="20" height="350" BGCOLOR="#FFFF00">&nbsp; </td>
      
    <td WIDTH="196" height="350" VALIGN="top" nowrap BGCOLOR="#FFFF00"> 
      <table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
          <tr> 
            <td VALIGN="middle" ALIGN="left" HEIGHT="50"> <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
                <tr> 
                  <td WIDTH="100" ALIGN="right"><img SRC="images/marker.gif" WIDTH="5" HEIGHT="10">&nbsp;&nbsp;</td>
                  <td ALIGN="left"> <a HREF="index.htm" target="_parent" CLASS="hauptlinksAktiv">Home</a> 
                  </td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td VALIGN="middle" ALIGN="left" HEIGHT="50"> <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
                <tr> 
                  <td WIDTH="100" ALIGN="center">&nbsp;</td>
                  <td nowrap ALIGN="left"> <a HREF="suche.htm" target="_parent" CLASS="hauptlinks">Suche</a></td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td VALIGN="middle" ALIGN="left" HEIGHT="50"> <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
                <tr> 
                  <td WIDTH="100" ALIGN="center" HEIGHT="19">&nbsp;</td>
                  <td nowrap ALIGN="left" HEIGHT="19" > <a HREF="eintrag.htm" target="_parent" CLASS="hauptlinks">Eintrag</a></td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td VALIGN="middle" ALIGN="left" HEIGHT="50"> <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
                <tr> 
                  <td WIDTH="100">&nbsp; </td>
                  <td ALIGN="left"> <a HREF="Forum/index.php" target="_parent" CLASS="hauptlinks">Forum</a> 
                  </td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td VALIGN="middle" ALIGN="left" HEIGHT="50"> <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
                <tr> 
                  <td WIDTH="100" ALIGN="center">&nbsp;</td>
                  <td ALIGN="left" > <a HREF="links.htm" target="_parent" CLASS="hauptlinks">Links</a></td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td VALIGN="middle" ALIGN="left" HEIGHT="50"> <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="right" valign="top"> 
                  <table width="60" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="40" height="19"><b><img src="images/kontakt.gif" width="26" height="15"></b></td>
                      <td width="20" align="right"><b>&nbsp; </b></td>
                    </tr>
                  </table>
                  
                </td>
                  <td class="hauptlinks" align="left"> <a href="kontakt.htm" target="_parent" class="hauptlinks">Kontakt</a></td>
              </tr>
            </table></td>
          </tr>
          <tr> 
            
          <td VALIGN="middle" ALIGN="left">&nbsp; </td>
          </tr>
        </table></td>
      
    <td WIDTH="4" height="350"></td>
      <td VALIGN="top" nowrap ALIGN="center" HEIGHT="350" COLSPAN="2"> <table WIDTH="580" height="100%" BORDER="0" CELLPADDING="5" CELLSPACING="1" BGCOLOR="#BEBEBE">
        <tr> 
          <td width="568" align="center" valign="top" nowrap BGCOLOR="#FFFFFF"> 
            <?php 
			  
			  
	include('Ortsdatenbank/or-ortsdatenbank.php'); 
	$db = new DB("usr_web79_1","localhost","web79","sahne24mist");

if (isset($voting)) {
	$query = "UPDATE trampstop_umfrage SET $voting = $voting + 1 
		WHERE ID = $id;";
	if (mysql_db_query("usr_web79_1", $query)) echo "Dein Eintrag wurde übernommen !";
	else echo "Dein Eintrag konnte n i c h t übernommen werden!!";
	
}

$query = "SELECT ja, nein, egal FROM trampstop_umfrage WHERE ID = $id";
$result = (mysql_db_query("usr_web79_1", $query));
$row = mysql_fetch_array($result);
$votes_ost = $row[0];


$votes_west = $row[1];

$votes_egal = $row[2];

$votes_all = $votes_ost + $votes_west + $votes_egal;
if ($votes_all == 0)
{
	$ost_percent = 0;
	$west_percent = 0;
	$egal_percent = 0;
}
else
{
	$ost_percent = (int) ($votes_ost*100/$votes_all);
	$west_percent = (int) ($votes_west*100/$votes_all);
	$egal_percent = (int) ($votes_egal*100/$votes_all);
}
$o=$ost_percent *3;
$w=$west_percent *3;
$e=$egal_percent *3;
?>
            <br>
            <table width="100" border="0" cellpadding="0" cellspacing="1" bgcolor="#000000">
              <tr>
                <td><table width="100" border="0" cellspacing="0" cellpadding="5">
                    <tr> 
                      <td nowrap bgcolor="#E5E5E5" class="AndereLinks5"> <p><font size="4">Umfrage<br>
                          </font><font color="#888888">Wo trampt es sich besser?</font><br>
                        </p></td>
                    </tr>
                    <tr> 
                      <td bgcolor="#E5E5E5"> <table border="0" cellpadding="5" cellspacing="0" class="AndereLinks5">
                          <tr valign="middle"> 
                            <td nowrap>Neue Bundesl&auml;nder</td>
                            <td nowrap> 
                              <?php 
				echo "<img src=\"images/blue.jpg\" width=$o height=10> $ost_percent% ($votes_ost)";
				?>
                            </td>
                          </tr>
                          <tr valign="middle"> 
                            <td>Alte Bundesl&auml;nder</td>
                            <td nowrap> 
                              <? 
				  echo "<img src=\"images/blue.jpg\" width=$w height=10> $west_percent% ($votes_west)";
				   ?>
                            </td>
                          </tr>
                          <tr valign="middle"> 
                            <td nowrap>Egal, kein Unterschied</td>
                            <td nowrap> 
                              <?
				  echo "<img src=\"images/blue.jpg\" width=$e height=10> $egal_percent% ($votes_egal)";
				   ?>
                            </td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
            <br>
            <form name="form1" method="post" action="">
              <input name="button" type="button" id="button" value="Zur&uuml;ck" onClick="history.back();">
            </form> </td>
        </tr>
      </table></td>
    </tr>
    <tr> 
      
    <td WIDTH="20" HEIGHT="4"></td>
      
    <td HEIGHT="1" WIDTH="196"> </td>
      <td HEIGHT="1" WIDTH="4"></td>
      <td HEIGHT="1" WIDTH="560"></td>
      <td HEIGHT="1" WIDTH="20"></td>
    </tr>
    <tr> 
      
    <td WIDTH="20" HEIGHT="60"></td>
      
    <td nowrap ALIGN="center" HEIGHT="1" BGCOLOR="#000000" WIDTH="196"> <a HREF="javascript:window.copyright();" CLASS="AndereLinksCopyrightHome">&copy; 
      2002 Georg Ludewig</a></td>
      <td HEIGHT="5" BGCOLOR="#000000" WIDTH="4">&nbsp; </td>
      <td HEIGHT="1" BGCOLOR="#000000" WIDTH="560">&nbsp;</td>
      <td HEIGHT="1" WIDTH="20"></td>
    </tr>
    <tr> 
      
    <td WIDTH="20" HEIGHT="20"></td>
      
    <td HEIGHT="20" WIDTH="196">&nbsp;</td>
      <td HEIGHT="20" WIDTH="4">&nbsp;</td>
      <td HEIGHT="20" WIDTH="560"><font SIZE="1" FACE="Arial, Helvetica, sans-serif" COLOR="#666666">&nbsp;&nbsp;&nbsp;Letzte &Auml;nderung: 06.12.2004</font></td>
      <td HEIGHT="20" WIDTH="20"></td>
    </tr>
    <tr>
      
    <td width="20" HEIGHT="20"></td>
      
    <td width="196" HEIGHT="20">&nbsp;</td>
      <td HEIGHT="20">&nbsp;</td>
      <td HEIGHT="20"></td>
      <td HEIGHT="20"></td>
    </tr>
  </table>

  </body>
</html>


<? 	
	include('./or-ortsdatenbank.php'); 
	include ("./Languages/language.php");
	include('./utils.php');
	
	$db = new DB();
	
	$abfrage = false;
	if (isset($HTTP_GET_VARS['abfrage'])) $abfrage = $HTTP_GET_VARS['abfrage'];
	
	?><html>
<head>
<title>Ortsdatenbank - www.trampstop.de</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../CSS_trampstop.css" type="text/css">
<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">
<script language="javascript" src="utils.js"></script>
<meta name="keywords" content="trampen,trempen,anhalter,autostop,per anhalter, Deutschland, tramper,Trampen,Trampstop,hitchhiking,hitchiking,Hitchhiker,ortsdatenbank,datenbank,ortssuche,ortsuche ">
<meta name="description" content="Per Anhalter durch Deutschland. Trampstop - die Hilfe für Tramper im Netz.">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="800" border="0" cellspacing="0" cellpadding="0" align="left">
  <tr> 
    <td width="20" bgcolor="#FFFFFF" height="20"></td>
    <td nowrap height="20" width="196"></td>
    <td width="1" nowrap height="0"></td>
    <td height="20" width="560"></td>
    <td nowrap bgcolor="#FFFFFF" height="20" width="20"></td>
  </tr>
  <tr> 
    <td width="20" bgcolor="#FFFFFF" height="60"></td>
    <td nowrap align="center" valign="middle" bgcolor="#000000" height="60" width="196"><a href="../index.htm"><img src="../images/logo.gif" width="173" height="60" border="0"></a> 
    </td>
    <td width="4" nowrap height="0" bgcolor="#000000">&nbsp; </td>
    <td align="right" valign="bottom" nowrap bgcolor="#000000" height="60" width="560"><img src="../images/t_odb.gif" width="300" height="39"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" width="20" height="60"></td>
  </tr>
  <tr> 
    <td height="4" width="20"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"></td>
    <td width="4" nowrap height="0"></td>
    <td align="left" valign="bottom" nowrap height="1" width="560"></td>
    <td align="left" valign="bottom" nowrap height="1" width="20"> </td>
  </tr>
  <tr> 
    <td width="20" height="350" class="bgColor7">&nbsp; </td>
    <td width="196" align="center" valign="top" nowrap class="bgColor7"> 
      <table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" ALIGN="right">&nbsp;</td>
                <td ALIGN="left"> <a HREF="../index.htm" target="_parent" CLASS="hauptlinks">Home</a> </td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" ALIGN="right"><img SRC="../images/marker.gif" WIDTH="5" HEIGHT="10">&nbsp;&nbsp;</td>
                <td nowrap ALIGN="left"> <a HREF="Ortsdatenbank.php" target="_parent" CLASS="hauptlinksAktiv">Ortsdatenbank</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70">&nbsp; </td>
                <td ALIGN="left"> <a HREF="../Forum/index.php" target="_parent" CLASS="hauptlinks">Forum</a> </td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
              <tr>
                <td WIDTH="70" ALIGN="center">&nbsp;</td>
                <td ALIGN="left" > <a HREF="../links.htm" target="_parent" CLASS="hauptlinks">Links</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left" HEIGHT="50">
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="70" align="right" valign="top">&nbsp; </td>
                <td class="hauptlinks" align="left"> <a href="../kontakt.htm" target="_parent" class="hauptlinks">Kontakt</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td VALIGN="middle" ALIGN="left"> </td>
        </tr>
    </table></td>
    <td width="4" height="350" nowrap></td>
    <td colspan="2" align="center" valign="top" nowrap> 
      <table width="580" border="0" cellpadding="10" cellspacing="1" bgcolor="#BEBEBE">
        <tr bgcolor="#D2D2D2"> 
          <td  align="center" valign="top" bgcolor="#FFFFFF">
		  
		 <form action="<?=$HTTP_SERVER_VARS['PHP_SELF'];?>" method="get" name="myform" id="myform" onSubmit="send(true)">

 <? include ("inc_header.php")?><br>
<table width="500"  border="0" cellpadding="1" cellspacing="0">
  <tr>
    <td align="center"><? include("inc_suche.php");?>
<br>     
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="center" valign="top" bgcolor="0677BD" class="backgroundcolor3"><img src="bilder/eintrag.gif" width="30" height="150"></td>
    <td align="center" valign="top" bgcolor="0677BD" class="rahmenEintrag"><table width="100%"  border="0" cellpadding="4" cellspacing="0">
        <tr>
          <td height="30" align="center" class="textEintrag"><?=@$_titel_neu?>
          </td>
        </tr>
        <tr>
          <td align="center"><br>
              <a href="neue_trampstelle.php?LANG=<?=@$LANG?>" class="KommentarLink">
              <?=@$_link_index_neu_sub?>
            </a></td>
        </tr>
    </table></td>
    <td width="30" align="center" valign="middle" class="backgroundcolor3"   ><img src="bilder/eintrag2.gif" width="30" height="150"></td>
  </tr>
</table><p>&nbsp;</p></td>
  </tr>
</table>
<br>
<? if ($LANG == "ger")
{
?> <?
}?>
</form>        </td>
        </tr>
      </table> </td>
  </tr>
  <tr> 
    <td width="20" height="4"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"> </td>
    <td nowrap height="1" width="4"></td>
    <td nowrap height="1" width="560"></td>
    <td align="left" valign="bottom" nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" height="60"></td>
    <td nowrap align="center" valign="middle" height="1" bgcolor="#000000" width="196"><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#999999">&copy; 
      </font></b></font><font color="#999999"><b><font size="2"><font face="Arial, Helvetica, sans-serif" size="1">2002 
      Georg Ludewig</font></font></b></font></td>
    <td nowrap height="5" bgcolor="#000000" width="4"><font size="2">&nbsp;</font></td>
    <td align="center" valign="middle" nowrap height="1" bgcolor="#000000" width="560">&nbsp; 
    </td>
    <td nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" height="20"></td>
    <td height="20" width="196">&nbsp;</td>
    <td height="20" width="1">&nbsp;</td>
    <td height="20" width="560"><font size="1" face="Arial, Helvetica, sans-serif" color="#666666">&nbsp;&nbsp;&nbsp;Letzte &Auml;nderung: 06.12.2004</font></td>
    <td height="20" width="20"></td>
  </tr>
</table>

  
</body>
</html>

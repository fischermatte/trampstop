<? 	
	include('or-ortsdatenbank.php'); 
	include ("Languages/language.php");
	include('utils.php');
	
	$db = new DB();
	
	$abfrage = false;
	if (isset($HTTP_GET_VARS['abfrage'])) $abfrage = $HTTP_GET_VARS['abfrage'];
	
	?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$_titel_index_1." ".$_titel_index_2?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">
<script language="javascript" src="utils.js"></script>

<meta name="keywords" content="Trampen, Tramper,Tramperin, per Anhalter, Ortsdatenbank, Autostop">
<meta name="keywords" content="hitchhiking, database of places">
<meta name="keywords" content="????????">



</head>

<body align ="left">        <form action="<?=$HTTP_SERVER_VARS['PHP_SELF'];?>" method="get" name="myform" id="myform" onSubmit="send(true)">
  <? include ("inc_header.php")?>
<br>
 
<table width="550"  border="0" cellpadding="1" cellspacing="0">
  <tr>
    <td align="center"><? include("inc_suche.php");?><br>
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
                    <a href="neue_trampstelle.php?LANG=<?=@$LANG?>" class="KommentarLink"> <?=@$_link_index_neu_sub?>
</a></td>
              </tr>
          </table></td>
          <td width="30" align="center" valign="middle" class="backgroundcolor3"   ><img src="bilder/eintrag2.gif" width="30" height="150"></td>
        </tr>
      </table>
      <br>
      <? include("inc_copyright.php");?>
      <br>
      <br></td>
  </tr>
</table>
<br>
<? if ($LANG == "ger")
{
?> <?
}?>
</form> 
</body>
</html>

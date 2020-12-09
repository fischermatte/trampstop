<?
	session_start();
 	include ("or-ortsdatenbank.php");
	include ("Languages/language.php");
	include ("utils.php");
	
    $db = new DB();
	
	if (!isset($HTTP_GET_VARS['kommentar']))
		die ("<br>Fehler: Es wurden keine Parameter übergeben.<br>");
	else
		$kommentar= $HTTP_GET_VARS['kommentar'];
	

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=@$_headline_kommentar?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">

</head>

<body align="left">

   <? include("inc_header.php");?>
   <br>
<? showHeaderTable("Eintrag",$_kommentar." - ".$_zusammenfassung,"500"); ?><br>
<span class="ergebnisseLink">    </span></div>
<form action="neuer_kommentar_controller.php" method="get" name="form1">
    <table width="550"  border="0" cellspacing="0" cellpadding="1">
      <tr>
        <td align="center"><table border="0" cellpadding="3" cellspacing="1" bgcolor="#000000">
          <tr bgcolor="#FFFFFF">
            <td colspan="2" align="left" valign="top" nowrap class="bgColor9">&nbsp;</td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td align="left" valign="top" nowrap class="bgColor6"> <span class="neuerEintragTitle">
              <?=@$_deinKommentar?>
            </span></td>
            <td align="left" class="bgColor6"> <span class="Stil2">
              <?=nl2br(stripslashes(htmlentities($kommentar['beschreibung'])))?>
            </span></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td align="left" nowrap class="bgColor6"> <span class="neuerEintragTitle">
              <?=@$_deineBewertung?>
            </span></td>
            <td align="left" class="bgColor6"> <span class="Stil2">
              <?
	showBewertung ($kommentar['bewertung'],$_bewertung_0,$_bewertung_1,$_bewertung_2,$_bewertung_3 );
	
	?>
            </span></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td align="left" nowrap class="bgColor6"> <span class="neuerEintragTitle">
              <?=@$_deineEmail?>
            </span></td>
            <td align="left" class="bgColor6"> <span class="Stil2">
              <?=stripslashes($kommentar['absender'])?>
            </span></td>
          </tr>
          <tr align="center" valign="middle" bgcolor="#FFFFFF" class="bgColor9">
            <td colspan="2" nowrap><input name="reset2" type="button" id="reset2" value=" <?= @$_zurueck ?>" onClick="history.back();">              <input name="submit" type="submit" id="submit" value="<?= @$_weiter ?>" ></td>
          </tr>
        </table></td>
      </tr>
    </table>
    <input name="kommentar[beschreibung]" type="hidden" id="kommentar[beschreibung]" value="<?=stripslashes(htmlentities($kommentar['beschreibung']));?>">
    <input name="kommentar[bewertung]" type="hidden" id="kommentar[bewertung]" value="<?=$kommentar['bewertung'];?>">  
    <input name="kommentar[absender]" type="hidden" id="kommentar[absender]" value="<?=htmlentities(stripslashes($kommentar['absender']));?>"> 
      <input name="kommentar[t_id_fk]" type="hidden" id="kommentar[t_id_fk]" value="<?=$kommentar['t_id_fk'];?>">  
	 <input name="zielseite" type="hidden"  value="ergebnisse.php?LANG=<?=@$LANG?>">
</form>

</body>
</html>

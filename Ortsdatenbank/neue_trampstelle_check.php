<?
	session_start();
$MySID = "&".session_name()."=".session_id();
//echo $MySID;
	

    include ("or-ortsdatenbank.php");
	include ("Languages/language.php");
	include ("utils.php");
	
    $db = new DB();
	if (!isset($HTTP_GET_VARS['trampstelle']))
		die ("<br>Fehler: Es wurden keine Parameter übergeben.<br>");
	else
		$trampstelle = $HTTP_GET_VARS['trampstelle'];

	
	?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?=@$_neuer_eintrag?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">
	<script language="JavaScript" type="text/JavaScript" src="utils.js"></script>
</head>

<body>

  <? include ("inc_header.php");?>
  <br>
 
     
<table width="550">
  <tr><td align="center">
<? 
	if (!isset($HTTP_GET_VARS['zielorte_mit_laendern'])&& $trampstelle['zielorte'] != "")
	{
		showHeaderTable("Eintrag",  $_zielorte_land,"500");
?>
<br>  
<br>
<form action="<?=$HTTP_SERVER_VARS['PHP_SELF']?>" method="get" name="form2" id="form2">
<?

if (strstr($trampstelle['zielorte'],',')) 
		$zielorte = explode (",", $trampstelle['zielorte']);
		
else $zielorte[] = $trampstelle['zielorte'];

$laender = Land::alle(array('order'=>'name'));
for($i=0;$i<count($zielorte);$i++) {
	//	$zielorte[$i]=ucfirst(trim($zielorte[$i]));
			?>
  	<input name="trampstelle[zielorte][<?=$i?>][ort]" type="text" value="<?=ucwords(strtolower(trim($zielorte[$i])))?>">
	<select name="trampstelle[zielorte][<?=$i?>][land]" >
        <option value="-1" <? if ($trampstelle==false) echo "selected"; ?>><?=$_land?></option>
    	<? foreach ($laender as $land) { ?>
     	<option value="<?= $land->l_id?>"
	 	<? if ($trampstelle['land'] != "-1" && $land->l_id == $trampstelle['land']) echo " selected " ;?>
		>
        <? echo ucwords(strtolower($land->name)) ?>
     </option>  
                          <? 
} ?>
  </select>
	    <br>
   
		<?
		}
		
		
?> <br>

  
  
 
        <input name="zurueck" type="button" id="zurueck" value="<?=$_zurueck?>" onClick="geturl('neue_trampstelle.php','<?=$HTTP_SERVER_VARS['QUERY_STRING'];?>',true)">
        <input type="submit" name="Submit2" value="<?= @$_weiter ?>">
    <br>
    <input name="zielorte_mit_laendern" type="hidden" value="true">
		<input name="trampstelle[bezeichnung]" type="hidden" value="<?=htmlentities(stripslashes($trampstelle['bezeichnung']))?>">
		<input name="trampstelle[beschreibung]" type="hidden" value="<?=htmlentities(stripslashes($trampstelle['beschreibung']))?>">
		<input name="trampstelle[hr][nord]" type="hidden" value="<?=empty($trampstelle['hr']['nord'])?"0": $trampstelle['hr']['nord'];?>">
		<input name="trampstelle[hr][sued]" type="hidden" value="<?=empty($trampstelle['hr']['sued'])?"0": $trampstelle['hr']['sued'];?>">
		<input name="trampstelle[hr][west]" type="hidden" value="<?=empty($trampstelle['hr']['west'])?"0": $trampstelle['hr']['west'];?>">
		<input name="trampstelle[hr][ost]" type="hidden" value="<?=empty($trampstelle['hr']['ost'])?"0": $trampstelle['hr']['ost'];?>">
		<input name="trampstelle[strassennamen]" type="hidden" value="<?=$trampstelle['strassennamen']?>">
		<input name="trampstelle[startort]" type="hidden" value="<?=ucfirst(trim($trampstelle['startort']))?>">
		<input name="trampstelle[bewertung]" type="hidden" value="<?=$trampstelle['bewertung']?>">
		<input name="trampstelle[land]" type="hidden" value="<?=$trampstelle['land']?>">
		<input name="trampstelle[absender]" type="hidden" value="<?=htmlentities(stripslashes($trampstelle['absender']))?>">
		<input name="LANG" type="hidden"  value="<?=$LANG?>">
		<input name="zielseite" type="hidden"  value="index.php">
</form>

<? } 


else  // Wenn Länder der Zielorte ausgewählt
{

	showHeaderTable("Eintrag",  $_neuer_eintrag." - ".$_zusammenfassung,"500");

?> 


<br> 
<form action="neue_trampstelle_controller.php" method="get"   name="form1" id="form1">
  <table width="550" border="0" cellpadding="5" cellspacing="1" class="backgroundcolor3">
    <tr valign="top" bgcolor="#FFFFFF" class="Stil2">
      <td width="160" align="left" nowrap class="backgroundcolor1">
        <span class="NormalFett">
        <?= @$_abfahrtsort ?> 
        :
        </span> </td>
      <td align="left" class="backgroundcolor1"><?=$trampstelle['startort']?></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF" class="Stil2">
      <td width="160" align="left" nowrap class="backgroundcolor1"><strong>
        <?=$_land?> :
      </strong></td>
      <td align="left" class="backgroundcolor1"><?
	  $land = Land::get($trampstelle['land']);
	  echo cutAtEnd($land->name,20);
	  ?></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF" class="Stil2">
      <td width="160" align="left" nowrap class="backgroundcolor1">
        <strong>
        <?= @$_name?>
        :        </strong> </td>
      <td align="left" class="backgroundcolor1"> <?=@stripslashes($trampstelle['bezeichnung'])?>&nbsp;  </td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF" class="Stil2">
      <td width="160" align="left" nowrap class="backgroundcolor1">
        <strong>
        <?= @$_richtung?>
        :        </strong> </td>
      <td align="left" class="backgroundcolor1"><?
		
	//Orte filtern - utils.php
	if (isset($trampstelle['zielorte']))
	{
		$filter_zielorte = filterArray ($trampstelle['zielorte']);
		for ($x=0;$x<count($filter_zielorte);$x++) 
		{	  	
			$objLand = Land::get($filter_zielorte[$x][1]);
			echo $filter_zielorte[$x][0]." ($objLand->name)<br>";
		}
	}
	
	//Himmelsrichtung
	$count = 0;
	for($x=0;$x<sizeof($trampstelle['hr']);$x++) 
	{ 
  		if (current($trampstelle['hr']) != "0")
		{
			$count++;
			if ($count>1) echo ", ";
			$hr = key($trampstelle['hr']);
			$s = "echo \$_"."$hr;";
			eval($s);			
		}
  		next($trampstelle['hr']);
	}
	  
	  
	  ?></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF" class="Stil2">
      <td width="160" align="left" nowrap class="backgroundcolor1">
        <strong>
        <?= @$_strassennummer ?>
        :        </strong> </td>
      <td align="left" class="backgroundcolor1"><?=$trampstelle['strassennamen']?>        &nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF" class="Stil2">
      <td width="160" align="left" nowrap class="backgroundcolor1">
        <strong>
        <?= @$_beschreibung?>
        :        </strong></td>
      <td align="left" class="backgroundcolor1"><?=nl2br(stripslashes($trampstelle['beschreibung']))?></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF" class="Stil2">
      <td width="160" align="left" nowrap class="backgroundcolor1">
        <strong>
        <?= @$_bewertung ?>
        :        </strong> </td>
      <td align="left" class="backgroundcolor1"><?
	showBewertung ($trampstelle['bewertung'],$_bewertung_0,$_bewertung_1,$_bewertung_2,$_bewertung_3 );
	
	?>	</td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF" class="Stil2">
      <td width="160" align="left" nowrap class="backgroundcolor1">
        <strong>
        <?= @$_absender?>
        :        </strong> </td>
      <td align="left" class="backgroundcolor1"><?=stripslashes($trampstelle['absender'])?>&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF" class="backgroundcolor2">
      <td width="160" align="right" nowrap><input name="reset2" type="button" id="reset2" value="<?= @$_zurueck ?>" onClick="history.back();"></td>
      <td align="left"><input name="submit" type="submit" id="submit" value="<?= @$_weiter ?>" ></td>
    </tr>
  </table>
  <?
 for ($x=0;$x<count($filter_zielorte);$x++) {
 ?>
  <input name="trampstelle[zielorte][<?=$x?>][ort]" type="hidden" value="<?=trim($filter_zielorte[$x][0])?>">
 <input name="trampstelle[zielorte][<?=$x?>][land]" type="hidden" value="<?=trim($filter_zielorte[$x][1])?>">
  
  <?
  }
  ?>
  <input name="zielorte_mit_laendern" type="hidden" value="true">
  <input name="trampstelle[bezeichnung]" type="hidden" value="<?=htmlentities(stripslashes($trampstelle['bezeichnung']))?>">

  <input name="trampstelle[beschreibung]" type="hidden" value="<?=htmlentities(stripslashes($trampstelle['beschreibung']))?>">
  <input name="trampstelle[hr][nord]" type="hidden" value="<?=empty($trampstelle['hr']['nord'])?"0": $trampstelle['hr']['nord'];?>">
  <input name="trampstelle[hr][sued]" type="hidden" value="<?=empty($trampstelle['hr']['sued'])?"0": $trampstelle['hr']['sued'];?>">
  <input name="trampstelle[hr][west]" type="hidden" value="<?=empty($trampstelle['hr']['west'])?"0": $trampstelle['hr']['west'];?>">
  <input name="trampstelle[hr][ost]" type="hidden" value="<?=empty($trampstelle['hr']['ost'])?"0": $trampstelle['hr']['ost'];?>">
  <input name="trampstelle[strassennamen]" type="hidden" value="<?=$trampstelle['strassennamen']?>">
  <input name="trampstelle[startort]" type="hidden" value="<?=ucfirst(trim($trampstelle['startort']))?>">
  <input name="trampstelle[bewertung]" type="hidden" value="<?=$trampstelle['bewertung']?>">
  <input name="trampstelle[land]" type="hidden" value="<?=$trampstelle['land']?>">
  <input name="trampstelle[absender]" type="hidden" value="<?=htmlentities(stripslashes($trampstelle['absender']))?>">
  <input name="LANG" type="hidden"  value="<?=$LANG?>">
  <input name="zielseite" type="hidden"  value="ergebnisse.php?LANG=<?=@$LANG?>">
<br>
  <br>
  <? } ?>
  <br>
</form>
<? include("inc_copyright.php");?>
</td></tr></table>
</body>
</html>

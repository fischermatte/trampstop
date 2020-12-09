<? 
		session_start();
		


	$fehler = Array ("beschreibung"=> true,	"bewertung"=> true);
	
	$kommentar = false;
	if (isset($HTTP_GET_VARS['kommentar'])) $kommentar = $HTTP_GET_VARS['kommentar'];
	
	$utilsincl = false;
	if ($kommentar)
	{	
		include ('utils.php');
		$utilsincl = true;
		if (check_kommentar($kommentar) && !isset($HTTP_GET_VARS['kontrolle']))
		{
			header ("Location: neuer_kommentar_check.php?".$HTTP_SERVER_VARS['QUERY_STRING']);
		}
	}								
	include('or-ortsdatenbank.php');
	include ("Languages/language.php");
	if ($utilsincl == false)
		include ("utils.php");
	$db = new DB();
?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=@$_headline_kommentar?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">


</head>

<body algin="left">
<?

	$T_ID= false;
	if (isset($HTTP_GET_VARS['t_id'])) $T_ID = $HTTP_GET_VARS['t_id'];
	else die("Fehler: Falsche Kennung! ");
	
	
	?>
 <? include("inc_header.php");?>
<? 
$trampstelle = Trampstelle::GetTrampstelle($T_ID); 

?>
<br>
<? showHeaderTable("Eintrag",@$_headline_kommentar,"500"); ?><br>
  <form name="form1" method="get" action="<?=$HTTP_SERVER_VARS['PHP_SELF']?>">
            
<table width="550" border="0" cellpadding="0" cellspacing="1" class="bgColor8">
  <tr>
    <td class="bgColor9">
      <table width="100%" border="0" cellpadding="1" cellspacing="0">
        <tr align="right" valign="top">
          <td align="left" nowrap >
            <table width="100%" border="0" cellpadding="1" cellspacing="0">
              <tr align="left" valign="baseline">
                <td width="7%" nowrap class="ergebnisseAbfahrtsort" >                  <?
	 $startort = $trampstelle->getStartort();
	 echo $startort->name;?>                  </td>
                <td width="93%" class="Stil5" >                  <?=$startort->land;?>                </td>
              </tr>
          </table></td>
        </tr>
        <tr align="right" valign="top">
          <td align="left" nowrap ><table width="100%" border="0" cellpadding="1" cellspacing="0">
              <tr align="left">
                <td nowrap class="Stil2" ><? echo $trampstelle->bezeichnung;?></td>
                <td align="right" nowrap ><span class="ergebniss_startland"><span class="Stil2">
                  <?=showBewertung($trampstelle->getBewertung(),$_bewertung_0,$_bewertung_1,$_bewertung_2,$_bewertung_3 )?>
                </span></span></td>
              </tr>
          </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="bgColor9"><table width="100%" border="0" cellpadding="3" cellspacing="0">
        <tr align="right">
          <td width="5%" align="left" nowrap class="Stil2" ><?=@$_richtung?>
            :</td>
          <td align="left" nowrap class="Stil2"> &nbsp;&nbsp;
              <? 
	$zielorte = $trampstelle->getZielorte();
	$orte = array();
	$hr = array();
	foreach($zielorte as $ort) 
	{
		if ($ort->land =="-")
		{
			$hr[] = $ort->name;
		}
		else
		{
			$orte[] = $ort->name;  //." (".$ort->land.")";
		}
	}
	$countorte = count($orte);
	if ($countorte > 0) 
	{
		for ($i=0;$i<$countorte;$i++) 
		{
			if ($i > 0 && $countorte > 1)
				echo ", ";
			echo $orte[$i];
		}
	}
	$counthr = count($hr);
	if ($counthr > 0) 
	{
		if ($countorte > 0) echo " (";
		for ($i=0;$i<$counthr;$i++) 
		{
			if ($i > 0 && $counthr > 1)
			 echo ", ";
			$s = "echo \$_"."$hr[$i];";
			eval($s);	
		}
		if ($countorte > 0) echo ")";
	}
	
	
	?></td>
          <td align="left" nowrap class="Stil2"><?=$trampstelle->strassennamen?></td>
          <td width="95%" align="right" nowrap><span class="Stil2"> </span> </td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FFFFFF"> <SPAN class="Stil5" > </SPAN>
        <table width="100%" border="0" cellpadding="3" cellspacing="0">
          <?
				$kommentare = $trampstelle->getKommentare();
				$count = count($kommentare);
				if ($count==0) echo "<tr><td>---</td></tr>";
				else
				{
					for ($a=0;$a<$count;$a++)
					{?>
						<tr>
						 <td class="bgColor6">						   <span class="Stil2" >
								<?= $kommentare[$a]->beschreibung?>
								
								<br> 
								</span> 
								<span class="Stil6">
									<?= $kommentare[$a]->absender;?>
									<?= $kommentare[$a]->datum;?>								
						  </span>						</td>
						</tr>
							<?
					}
				}
					 ?>
      </table></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF" class="bgColor6"><a href="neuer_kommentar.php?LANG=<?=$LANG?>&t_id=<?=$trampstelle->t_id?>">
    </a>       
  
                  <table border="0" cellpadding="4" cellspacing="0">
                    <tr>
                      <td   align="left" valign="bottom"><a name="kom" class="neuerEintragTitle"><?=@$_deinKommentar?></a></td>
                    </tr>
                    <tr>
                      <td align="center">
		              
		<textarea name="kommentar[beschreibung]" cols="50" rows="6" id="kommentar[beschreibung]"><?=@trim(stripslashes($kommentar['beschreibung']));?></textarea></td>
                    </tr>
                    <tr>
                      <td align="left">
		                <table  border="0" cellspacing="0" cellpadding="2">
                          <tr align="center" valign="middle">
                            <td width="60%" align="left"><span class="neuerEintragTitle">
                              <?=@$_deineBewertung?>
                            </span></td>
                          </tr>
                          <tr>
                            <td align="left"><?
		
		if (!$fehler['bewertung']) {
			?>
                              <span class="FormularFehler">
                              <?=$f_1;?>
                              </span>
                              <? }
			?>
                              <table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td nowrap valign="bottom" height="20">
                                    <input name="kommentar[bewertung]" type="radio" value="3" <?  if (@ $kommentar['bewertung'] == "3") echo "checked";?>>
                                  </td>
                                  <td align="left" valign="bottom" nowrap class="Stil2" ><img src="bilder/hand.gif" width="10" height="14"><img src="bilder/hand.gif" width="10" height="14"><img src="bilder/hand.gif" width="10" height="14">
                                    <?= @$_bewertung_3 ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td nowrap valign="bottom" height="20">
                                    <input type="radio" name="kommentar[bewertung]" value="2" <?  if (@ $kommentar['bewertung'] == "2") echo "checked";?>>
                                  </td>
                                  <td align="left" valign="bottom" nowrap class="Stil2" ><img src="bilder/hand.gif" width="10" height="14"><img src="bilder/hand.gif" width="10" height="14">
                                    <?= @$_bewertung_2 ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td nowrap valign="bottom" height="20"><input type="radio" name="kommentar[bewertung]" value="1" <?  if (@ $kommentar['bewertung'] == "1") echo "checked";?>>
                                  </td>
                                  <td align="left" valign="bottom" class="Stil2" ><img src="bilder/hand.gif" width="10" height="14">
                                    <?= @$_bewertung_1 ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td nowrap valign="bottom" height="20">
                                    <input type="radio" name="kommentar[bewertung]" value="0" <?  if (@ $kommentar['bewertung'] == "0") echo "checked";?>>
                                  </td>
                                  <td align="left" valign="bottom" class="Stil2" ><img src="bilder/hand2.gif" width="10" height="14">
                                    <?= @$_bewertung_0 ?>
                                  </td>
                                </tr>
                            </table></td>
                          </tr>
                      </table>
	                  </td>
                    </tr>
                    <tr>
                      <td align="left"><span class="Stil7"><span class="neuerEintragTitle">
                        <?=@$_deineEmail?>
                      </span>
                      </span></td>
                    </tr>
                    <tr>
                      <td align="left"><input name="kommentar[absender]" type="text" id="kommentar[absender]2" value="<?=stripslashes(htmlentities($kommentar['absender']))?>"></td>
                    </tr>
                    <tr>
                      <td align="left"><span class="Stil7">
                        <?=@$_optional?>
                      </span></td>
                    </tr>
                  </table>
              
      </td>
  </tr>
  <tr>
    <td height="30" align="center" bgcolor="#FFFFFF" class="bgColor9"><input type="reset" name="Submit" value="<?= @$_loeschen ?>" onClick="formReset('<?=$HTTP_SERVER_VARS['PHP_SELF']?>','<?=$LANG."&t_id=$T_ID"?>')"> 
      <input type="submit" name="Submit2" value="<?= @$_weiter ?>">
      <input name="LANG" type="hidden"  value="<?=$LANG?>">
      <input type="hidden" name="zielseite" value="index.php">
      <input name="kommentar[t_id_fk]" type="hidden" id="kommentar[t_id_fk]" value="<?=$T_ID?>">
      <input name="t_id" type="hidden" id="t_id" value="<?=$T_ID?>"></td>
  </tr>
</table>
  </form>

</body>
</html>

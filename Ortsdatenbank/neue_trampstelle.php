<? 
	session_start();
	if (session_is_registered("done") && !isset($HTTP_GET_VARS['trampstelle']))
		session_unregister("done");
$MySID = "&".session_name()."=".session_id();
//echo $MySID;



$fehler = Array (	"startort"=> true,
						"land"=> true,
						"zielorte"=> true,
						"bezeichnung"=> true,
						"beschreibung"=>true,
						"bewertung"=>true,
						"alles"=>true);

$trampstelle = false;
if (isset($HTTP_GET_VARS['trampstelle'])) $trampstelle = $HTTP_GET_VARS['trampstelle'];

$utilsincl = false;
if ($trampstelle)
{	
	include ('utils.php');
	$utilsincl = true;
	if (check_eintrag($trampstelle) && !isset($HTTP_GET_VARS['kontrolle'])){
		header ("Location: neue_trampstelle_check.php?".$HTTP_SERVER_VARS['QUERY_STRING']);
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
<title><?=@$_neuer_eintrag." - ".@$_titel_index_1;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript" src="utils.js">

</script>
<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">
</head>

<body align="center">

   <? include("inc_header.php");?>
  <br> 
        <? showHeaderTable("Eintrag",@$_titel_neu,"600");?>
     
  <br>
  <table width="550"  border="0" align="left" cellpadding="1" cellspacing="0">
     <tr>
      <td align="center"><form action="<?=$HTTP_SERVER_VARS['PHP_SELF']?>" method="get" name="eintrag" target="_self" >
        <table width="550" border="0" align="left" cellpadding="5" cellspacing="1" class="backgroundcolor3" >
          <tr align="left">
            <td height="30" colspan="3" class="backgroundcolor2" > 
			<?
				if (!$fehler['alles'])
		   			echo "<span class=\"FormularFehler\">$_must</span>";
				else
					echo "<span class=\"textEintrag\"><span class=\"neuerEintragTitle\">*$_must</span>"?>
       </td>
          <tr bgcolor="#FFFFFF">
            <td width="170" align="left" valign="top" bgcolor="#FFFFFF" class="backgroundcolor1" > <span class="neuerEintragTitle">
              <?= @$_abfahrtsort ?>
        : *</span></td>
            <td width="150" align="left" class="backgroundcolor1" >
              <? 
			if (!$fehler['startort']) {
			?>
              <span class="FormularFehler">
              <?=$f_1;?>
              </span>
              <? }
			?>
            <input name="trampstelle[startort]" type="text" id="trampstelle[startort]" maxlength="30" value="<?= @ trim($trampstelle['startort']) ?>"></td>
            <td class="backgroundcolor1" ><? 
			if (!$fehler['land']) {
				?>
                <span class="FormularFehler">
                <?=$f_1;?>
                </span>
                <? }
				?>
                <select name="trampstelle[land]" id="select">
                  <option  value="-1" <? if ($trampstelle==false) echo "selected"; ?>>
                  <?=$_land?>
                  </option>
                  <? foreach (Land::alle(array('order'=>'name')) as $land) 
					{ 
						//267 == Himmelsrichtung
						if ($land->l_id != "267") 
						{
	 						?>
                  <option value="<?= $land->l_id?>"
	 							<? if ($trampstelle['land'] != "-1" && $land->l_id == $trampstelle['land']) echo " selected " ;?>>
                  <? 
								echo cutAtEnd($land->name, 20);
								?>
                  </option>
                  <? 
						}
					}
					?>
            </select></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="170" align="left" valign="top" bgcolor="#FFFFFF" class="backgroundcolor1" > <span class="neuerEintragTitle">
              <?= @$_name?>
        :</span><br>
        <span class="Stil7"><br>
        <?= @$_name_2 ?>
      </span> </td>
            <td colspan="2" align="left" valign="top" class="backgroundcolor1"  >
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td >
                    <input name="trampstelle[bezeichnung]" type="text" id="trampstelle[bezeichnung]" value="<?= @ trim(stripslashes(htmlentities($trampstelle['bezeichnung']))) ?>" size="20" maxlength="50" >
                  </td>
                </tr>
                <tr>
                  <td height="30" class="Stil7" >
                    <?= $_name_3 ?>
                  </td>
                </tr>
            </table></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="170" rowspan="2" align="left" valign="top" bgcolor="#FFFFFF" class="backgroundcolor1" > <span class="neuerEintragTitle">
              <?= @$_richtung?>
        : *</span><br>
        <span class="Stil7"><br>
        <?= @$_richtung_2 ?>
      </span> </td>
            <td colspan="2" align="left" valign="top" class="backgroundcolor1" ><table width="100%" border="0" cellpadding="3" cellspacing="1">
                <tr>
                  <td width="50%" align="left" valign="top"><? 
			if (!$fehler['zielorte']) {
			?>
                      <span class="FormularFehler">
                      <?=$f_1a;?>
                      </span>
                      <? }
			?>
                      <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="20" valign="top" class="Stil2" >
                            <?= @$_richtung_3 ?>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top">
                            <input name="trampstelle[zielorte]" type="text" id="trampstelle[zielorte]2" value="<?= @ trim($trampstelle['zielorte']) ?>" size="20" maxlength="100" >
                          </td>
                        </tr>
                        <tr>
                          <td height="30" class="Stil7">
                            <?= @$_richtung_4 ?>
                          </td>
                        </tr>
                    </table></td>
                  <td width="50%" align="left"><table width="150" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="20" colspan="5" align="center" class="Stil2" ><?=$_nord?></td>
                      </tr>
                      <tr>
                        <td width="45">&nbsp;</td>
                        <td width="25" height="25">&nbsp;</td>
                        <td width="25" height="25" align="center" valign="middle"><input name="trampstelle[hr][nord]" type="checkbox" id="trampstelle[hr][nord]3" value="1" <? if (isset($trampstelle['hr']['nord'])) echo "checked";?>></td>
                        <td width="25" height="25">&nbsp;</td>
                        <td width="45" class="Stil2">&nbsp;</td>
                      </tr>
                      <tr align="center" valign="middle">
                        <td width="45" align="right" class="Stil2" ><?=$_west?></td>
                        <td width="25" height="25"><input name="trampstelle[hr][west]" type="checkbox" id="trampstelle[hr][west]3" value="3" <? if (isset($trampstelle['hr']['west'])) echo "checked";?>></td>
                        <td width="25" height="25" align="center" valign="middle"><img src="bilder/komp.gif" width="25" height="25"> </td>
                        <td width="25" height="25"><input name="trampstelle[hr][ost]" type="checkbox" id="trampstelle[hr][ost]3" value="4" <? if (isset($trampstelle['hr']['ost'])) echo "checked";?> ></td>
                        <td width="45" align="left" class="Stil2" ><?=$_ost?></td>
                      </tr>
                      <tr>
                        <td width="45">&nbsp;</td>
                        <td width="25" height="25">&nbsp;</td>
                        <td width="25" height="25" align="center" valign="middle"><input name="trampstelle[hr][sued]" type="checkbox" id="trampstelle[hr][sued]3" value="2" <? if (isset($trampstelle['hr']['sued'])) echo "checked";?>></td>
                        <td width="25" height="25">&nbsp;</td>
                        <td width="45" class="Stil2">&nbsp;</td>
                      </tr>
                      <tr align="center" class="Stil2">
                        <td height="20" colspan="5" ><?=$_sued?></td>
                      </tr>
                  </table></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top" class="backgroundcolor1" ><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="20" valign="top" nowrap class="Stil2" >
                    <?= @$_strassennummer ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input name="trampstelle[strassennamen]" type="text" id="trampstelle[strassennamen]" value="<?= @ trim($trampstelle['strassennamen']) ?>" size="20" maxlength="30" ></td>
                </tr>
                <tr>
                  <td height="30" class="Stil7" >
                    <?= @$_strassennummer_2 ?>
                  </td>
                </tr>
            </table></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="170" align="left" valign="top" bgcolor="#FFFFFF" class="backgroundcolor1" > <span class="neuerEintragTitle">
              <?= @$_beschreibung?>
        : *</span><br>
        <br>
        <span class="Stil7">
        <?= @$_beschreibung_2 ?>
      </span> </td>
            <td colspan="2" align="left" valign="top" class="backgroundcolor1" >
              <? 
			if (!$fehler['beschreibung']) {
			?>
              <br>
              <span class="FormularFehler">
              <?=$f_1;?>
              </span>
              <? }
			?>
              <textarea name="trampstelle[beschreibung]" cols="40" rows="5" id="textarea"><?= @trim(stripslashes($trampstelle['beschreibung'])); ?></textarea></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="170" align="left" valign="top" bgcolor="#FFFFFF" class="backgroundcolor1" > <span class="neuerEintragTitle">
              <?= @$_bewertung ?>
        : * </span></td>
            <td colspan="2" align="left" class="backgroundcolor1" >
              <? 
			if (!$fehler['bewertung']) {
			?>
              <span class="FormularFehler">
              <?=$f_1;?>
              </span>
              <? }
			?>
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="25" nowrap valign="bottom" height="20">
                    <input name="trampstelle[bewertung]" type="radio" value="3" <?  if (@ $trampstelle['bewertung'] == "3") echo "checked";?>>
                  </td>
                  <td width="200" valign="bottom" nowrap class="Stil2" ><img src="bilder/hand.gif" width="10" height="14"><img src="bilder/hand.gif" width="10" height="14"><img src="bilder/hand.gif" width="10" height="14">
                      <?= @$_bewertung_3 ?>
                  </td>
                </tr>
                <tr>
                  <td width="25" nowrap valign="bottom" height="20">
                    <input type="radio" name="trampstelle[bewertung]" value="2" <?  if (@ $trampstelle['bewertung'] == "2") echo "checked";?>>
                  </td>
                  <td width="200" valign="bottom" nowrap class="Stil2" ><img src="bilder/hand.gif" width="10" height="14"><img src="bilder/hand.gif" width="10" height="14">
                      <?= @$_bewertung_2 ?>
                  </td>
                </tr>
                <tr>
                  <td width="25" nowrap valign="bottom" height="20">
                    <input type="radio" name="trampstelle[bewertung]" value="1" <?  if (@ $trampstelle['bewertung'] == "1") echo "checked";?>>
                  </td>
                  <td width="200" valign="bottom" class="Stil2" ><img src="bilder/hand.gif" width="10" height="14">
                      <?= @$_bewertung_1 ?>
                  </td>
                </tr>
                <tr>
                  <td nowrap valign="bottom" height="20">
                    <input type="radio" name="trampstelle[bewertung]" value="0" <?  if (@ $trampstelle['bewertung'] == "0") echo "checked";?>>
                  </td>
                  <td valign="bottom" class="Stil2" ><img src="bilder/hand2.gif" width="10" height="14">
                      <?= @$_bewertung_0 ?>
                  </td>
                </tr>
            </table></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td width="170" bgcolor="#FFFFFF" class="backgroundcolor1" > <span class="neuerEintragTitle">
              <?= @$_absender?>
        : </span></td>
            <td colspan="2" align="left" class="backgroundcolor1" >
              <input name="trampstelle[absender]" type="text" id="trampstelle[absender]" value="<?= @ trim(stripslashes(htmlentities($trampstelle['absender']))) ?>"  size="20" maxlength="30" ></td>
          </tr>
          <tr >
            <td width="170" align="right" class="backgroundcolor2" >
            <input name="reset" type="button" id="reset" value="<?= @$_loeschen ?>" onClick="formReset('<?=$HTTP_SERVER_VARS['PHP_SELF']?>','<?=$LANG?>')"></td>
            <td colspan="2" align="left" class="backgroundcolor2"  >
              <input name="Submit" type="submit" id="Submit" value="<?= @$_weiter ?>"></td>
          </tr>
        </table>
        <input type="hidden" name="zielseite" value="index.php">
        <input name="LANG" type="hidden"  value="<?=$LANG?>">
      </form></td>
    </tr>
    <tr>
      <td align="center"><br>
      <br>
      <? include("inc_copyright.php");?></td>
    </tr>
</table>
  <br>      
      	<br>
</body>
</html>

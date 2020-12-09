<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">
<table width="550"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="30" align="left" valign="middle" class="bgColor7"><img src="bilder/suche.gif" width="30" height="150"></td>
    <td align="center" valign="middle" class="rahmenSuche"><table  border="0" cellpadding="4" cellspacing="0">
      <tr>
        <td height="30" align="center" class="textSearchTitle">
          <?=@$_titel_suche?> </td>
      </tr>
      <tr>
        <td align="center"><table width="250" border="0" cellpadding="0" cellspacing="5">
            <tr>
              <td align="center">
                <table width="100%" border="0" cellpadding="3" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr align="left" valign="bottom" >
                    <td align="right" valign="middle" nowrap class="Stil2"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td align="left" valign="middle" nowrap class="Stil2">
                      <?=$_von?>
                    </td>
                    <td align="left" valign="middle" nowrap class="Stil2"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td align="left" nowrap class="Stil2"  ><?=$_nach?></td>
                  </tr>
                  <tr align="left" valign="bottom" >
                    <td width="25" align="right" valign="middle" nowrap class="Stil2"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="77" align="left" valign="middle" nowrap>
                      <select name="abfrage[startort]" class="comboBreite" onChange="send(false)">
                        <option value="-1" <? if ($abfrage==false || $abfrage['startort']== "-1") echo "selected"; ?>>
                        <?=$_alleOrte?>
                        </option>
                        <? foreach (Ort::alleStartorte(array('order'=>'name','condition_zielort'=>$abfrage['zielort'],'condition_zielland'=>$abfrage['zielland'],'condition_startland'=>$abfrage['startland'])) as $ort) { ?>
                        <option value="<?= $ort->o_id?>"
	 			<? if ($abfrage['startort'] != "-1" && $ort->o_id == $abfrage['startort']) echo " selected " ;?>> <? echo $ort->name; ?> </option>
                        <? } ?>
                      </select>
                    </td>
                    <td width="33" align="left" valign="middle" nowrap><!--DWLayoutEmptyCell-->&nbsp; </td>
                    <td width="77" align="left" nowrap  >
					<select name="abfrage[zielort]" class="comboBreite"  onChange="send(false)">
                        <option value="-1" <? if ($abfrage==false || $abfrage['zielort']== "-1") echo "selected"; ?>>
                        <?=$_alleOrte?>
                        </option>
                        <? 
						$orte = Array();
						$hr = Array();
						foreach (Ort::alleZielorte(array('order'=>'name','condition_startort'=>$abfrage['startort'],'condition_zielland'=>$abfrage['zielland'],'condition_startland'=>$abfrage['startland'])) as $ort) 
						{ 
							if($ort->o_id < 5)
								array_push($hr,$ort);
							else
								array_push($orte,$ort);
						}
						foreach($hr as $ort)
						{	?>
                        	<option value="<?= $ort->o_id?>"<? 
							if ($abfrage['zielort'] != "-1" && $ort->o_id == $abfrage['zielort']) 
								echo " selected " ;	?>><? 
							$s = "echo \$_"."$ort->name;";
							eval($s);			?></option><? 
						} 						
						foreach($orte as $ort)
						{	?><option value="<?= $ort->o_id?>"<? 
							if ($abfrage['zielort'] != "-1" && $ort->o_id == $abfrage['zielort']) 
								echo " selected " ;	?>><? 					
							echo $ort->name; ?></option> <?
						}	?>  
                      </select>
                    </td>
                  </tr>
                  <tr align="left" valign="bottom" >
                    <td align="right" valign="middle" nowrap><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td align="left" valign="middle" nowrap>
                      <select name="abfrage[startland]" class="comboBreite"  onChange="send(false)">
                        <option value="-1" <? if ($abfrage==false || $abfrage['startland']== "-1")  echo "selected"; ?>>
                        <?=$_land?>
                        </option>
                        <? foreach (Land::alleStartLaender(array('order'=>'name','condition_startort'=>$abfrage['startort'])) as $land) { 
						 //267 == Himmelsrichtung
	 if ($land->l_id != "267") {
						?>
                        <option value="<?= $land->l_id?>"
	 	<? if ($abfrage['startland'] != "-1" && $land->l_id == $abfrage['startland']) echo " selected " ;?>> <? echo cutAtEnd($land->name,20); ?> </option>
                        <? }} ?>
                      </select>
                    </td>
                    <td align="left" valign="middle" nowrap></td>
                    <td align="left" nowrap  >
                      <select name="abfrage[zielland]" class="comboBreite"  onChange="send(false)">
                        <option value="-1" <? if ($abfrage==false || $abfrage['zielland']== "-1")  echo "selected"; ?>>
                        <?=$_land?>
                        </option>
                        <? foreach (Land::alleZielLaender(array('order'=>'name','condition_startort'=>$abfrage['startort'],'condition_startland'=>$abfrage['startland'],'condition_zielort'=>$abfrage['zielort'])) as $land) { 
						 //267 == Himmelsrichtung
	 if ($land->l_id != "267") {
						?>
                        <option value="<?= $land->l_id?>"
	 	<? if ($abfrage['zielland'] != "-1" && $land->l_id == $abfrage['zielland']) echo " selected " ;?>> <? echo cutAtEnd($land->name,20); ?> </option>
                        <? } }?>
                      </select>
                    </td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td align="center" valign="bottom" ><input type="button" name="MySubmit" value="<?=@$_suchen ?>" onClick="send(true)"></td>
            </tr>
        </table></td>
      </tr>
    </table>
    <img src="bilder/spacer.gif" width="300" height="1"></td>
    <td width="30" align="left" valign="middle" class="bgColor7"><img src="bilder/suche2.gif" width="30" height="150"></td>
  </tr>
</table>
<span class="backgroundcolor1">
<input name="LANG" type="hidden" class="backgroundcolor1"  value="<?=$LANG?>">
</span>


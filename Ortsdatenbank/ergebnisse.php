<? 
	session_start();
	include('or-ortsdatenbank.php'); 
	include ("Languages/language.php");
	include ("utils.php");
	$db = new DB();
	if (isset($HTTP_GET_VARS['abfrage']))
		$abfrage = $HTTP_GET_VARS['abfrage'];
	else
	{
		$abfrage['startort'] = -1;
		$abfrage['zielort'] = -1;
		$abfrage['startland'] = -1;
		$abfrage['zielland'] = -1;
	}
	
	if(!isset($HTTP_GET_VARS['page'])){ 
		$page = 1; 
	} else { 
		$page = $HTTP_GET_VARS['page']; 
	} 
	
	$proseite=10;
	$start = (($page * $proseite) - $proseite); 
	$limit = $start.",".$proseite;
	
	
	?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$_titel_index_1?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">
</head>

<body align="center">

  <? include("inc_header.php");?>
 <?
	//Falls eine Konkrete Trampstelle ausgegeben werden soll
	if (isset($HTTP_GET_VARS['t_id']))
	{		
		if (isset($HTTP_GET_VARS['success']))
		{
			if ($HTTP_GET_VARS['success'] == true)
			{
				?><br>
					
				<?
					showHeaderTable("Eintrag", $_erfolg,"500");
				?><br>
				<?
				$trampstelle = Trampstelle::GetTrampstelle($HTTP_GET_VARS['t_id']);
				$type="Trampstelle";
				if (isset($HTTP_GET_VARS['type'])) $type = $HTTP_GET_VARS['type'];
				foreach (Administrator::alleAdmins() as $admin)
					$admin->SendNewEntry(getTrampstelleAsHTML($trampstelle),$type);
				include("inc_trampstelle.php");
			}
			else
			{
				?><br>
				<table width="500" border="0" cellpadding="3" cellspacing="0">
					  <tr><td align="center" class="ergebnisseLinkRot">
				<?
				echo $f_5;
				?>
  </td>
					  </tr></table>
				<br></form>
				<?
			}
		}
		else 
		{
			echo "<br>";
			$trampstelle = Trampstelle::GetTrampstelle($HTTP_GET_VARS['t_id']);
			include("inc_trampstelle.php");
		}
	}
	else
	//alle Suchergebnisse anzeigen 
	{
	
		?><?
		$trampstellen = Trampstelle::getTrampstellen(array(	'order'=>'oos.name',
													'condition_startort'=>$abfrage['startort'],
 													'condition_zielort'=>$abfrage['zielort'],
													'condition_zielland'=>$abfrage['zielland'],
													'condition_startland'=>$abfrage['startland'],
													'limit'=>$limit));
		
		$tcount = DB::num_results();
		$tcountcurrent = count($trampstellen);
		if($tcount==0) 
			echo "<br> Kein Eintrag!";
		else
		{
			?> <br><? showHeaderTable("Suche",@$_ergebnisse,"500") ?>
                   
				
				<table width="500" height="25" border="0" cellpadding="0" cellspacing="0">
  					<tr>
    					<td align="left" valign="bottom" class="ergebnisseAnzahl"><?=$start+1?>-<?=$start+$tcountcurrent?> of <?=$tcount?> Results </td>
  					</tr>
  				</table>
 
			<?
			foreach ($trampstellen as $trampstelle)
			{	
				include("inc_trampstelle.php");
				?> <br><?
			} //Ende foreach schleife ?>			
                               
			<table width="500">
			  <tr>
			    <td align="left" class="pageAktiv">Result Page:&nbsp;			
				<?
					$pages = ceil($tcount/$proseite);
					for ($y=1;$y<=$pages;$y++)
					{	
						?> 
							&nbsp;
						<? 
						if ($page != $y) 
						{
							?>
						 		<a href="ergebnisse.php?LANG=<?= @$LANG."&abfrage[startort]=".$abfrage['startort']."&abfrage[zielort]=".$abfrage['zielort']."&abfrage[startland]=".$abfrage['startland']."&abfrage[zielland]=".$abfrage['zielland']."&page=".$y;?>" 
									class="pages"><?=$y?></a>
							<? 
						}
						else
						{
							?>
								<span class="pageAktiv"><?=$y?></span>
							<?
						}
					} 
				?>
			  </td>
			  </tr>
  </table>
			  <?
  			}//Ende else (mehr als ein Eintrag)
		}//Ende else 2
	?>
    <br>
    <? include("inc_copyright.php");?>
    <br>

</body>
</html>

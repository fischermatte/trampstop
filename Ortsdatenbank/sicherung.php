<?
$message ="<table width=\"450\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\" class=\"backgroundcolor3\">
	  <tr>
		<td bgcolor=\"#FFFFFF\">    <table width=\"100%\" border=\"0\" cellpadding=\"1\" cellspacing=\"0\" class=\"backgroundcolor2\">
		  <tr align=\"right\" valign=\"top\">
			<td align=\"left\" nowrap >
			  <table width=\"100%\" border=\"0\" cellpadding=\"1\" cellspacing=\"0\">
				<tr align=\"left\" valign=\"baseline\">
				  <td width=\"7%\" nowrap class=\"ergebnisseAbfahrtsort\" >";
$startort = $trampstelle->getStartort();
$message .= $startort->name;
$message.= "  <span class=\"ergebniss_startland\"> </span></td>
				  <td width=\"93%\" class=\"Stil7\" >					".$startort->land."				  </td>
				</tr>
			  </table>          </td>
		  </tr>
		  <tr align=\"right\" valign=\"top\">
			<td align=\"left\" nowrap ><table width=\"100%\" border=\"0\" cellpadding=\"1\" cellspacing=\"0\">
			  <tr align=\"left\">
				<td nowrap class=\"Stil2\" >".$trampstelle->bezeichnung."</td>
				<td align=\"right\" nowrap ><span class=\"ergebniss_startland\"><span class=\"Stil2\">";
				
$message.= showBewertung($trampstelle->getBewertung(),$_bewertung_0,$_bewertung_1,$_bewertung_2,$_bewertung_3 );
$message .=		"</span></span></td>
			  </tr>
			</table></td>
		  </tr>
		</table>      </td>
	  </tr>
	  <tr>
		<td bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"backgroundcolor2\">
			<tr align=\"right\">
			  <td width=\"5%\" align=\"left\" nowrap class=\"Stil2\" >".$_richtung."</td>
			  <td align=\"left\" class=\"Stil2\"> &nbsp;&nbsp;";
			   
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
				$orte[] = $ort->name;  //." (\".$ort->land.")";
			}
		}
		$countorte = count($orte);
		if ($countorte > 0) 
		{
			for ($x=0;$x<$countorte;$x++) 
			{
				if ($x > 0 && $countorte > 1)
					$message .= ", ";
				$message. $orte[$x];
			}
		}
		$counthr = count($hr);
		if ($counthr > 0) 
		{
			if ($countorte > 0) $message .= " (";
			for ($z=0;$z<$counthr;$z++) 
			{
				if ($z > 0 && $counthr > 1)
				 $message .=", ";
				$s = "\$message .= \$_"."$hr[$z];";
				eval($s);	
			}
			if ($countorte > 0) $message .=")";
		}
		
$message .= $trampstelle->strassennamen
$message .="                </td>
		    </tr>
		  </table></td>
	  </tr>
	  <tr>
		<td align=\"left\" bgcolor=\"#FFFFFF\">      <SPAN class=\"Stil5\" >    </SPAN>
		  <table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"backgroundcolor1\">
			";
				$kommentare = $trampstelle->getKommentare();
				$count = count($kommentare);
				if ($count==0) $message .="<tr><td>---</td></tr>";
				else
				{
					for ($a=0;$a<$count;$a++)
					{
					$message .="
						<tr>
						 <td>						   <span class=\"Stil2\" >
 $kommentare[$a]->beschreibung								
<br> </span> 
								<span class=\"Stil6\">
									 $kommentare[$a]->absender;
									 $kommentare[$a]->datum;								
							</span>
						</td>
						</tr>";
					}
				}
	$message .="
		  </table>      </td>
	  </tr>
	  <tr>
		<td align=\"right\" bgcolor=\"#FFFFFF\" class=\"Stil2\"><table width=\"100%\"  border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"backgroundcolor2\">
          <tr>
            <td align=\"right\">&nbsp;			
						</td>
          </tr>
        </table>		  </td>
	  </tr>
  </table>";
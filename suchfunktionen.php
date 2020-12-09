
<?
/*----------------------------------------------------Start Funktion suche_alles--------------*/
function suche($suche) 
{
  if (@mysql_pconnect ("localhost","web79","sahne24mist")) 
  {

	$suche = trim ($suche);
  	$Wert= 	Array();
	$SQLString = "	SELECT Abfahrt
     			    FROM haupt
					WHERE Abfahrt like '".$suche."%'";
 				
	$Ergebnis = @mysql_db_query("usr_web79_1", $SQLString);
	
 	$row=mysql_fetch_row($Ergebnis);
    /* ---- Hier wird dem Array $Wert1 alle Abfahrtsortsnamen übergeben ---- */	
	while ($row)  
	{
    	$Wert[] = $row[0];
		$row=mysql_fetch_row($Ergebnis);
		
	}
	
	/* ---- Hier wird dem Array $Wert2 alle Abfahrtsortsnamen übergeben ---- */
	
	
	
	// ----- Arrayund sortieren
	
	sort($Wert);
	
	/* --- Jetzt wird geguckt wie oft($val) ein Ortsname($key) vorkommt ---- */
	
	$Wert=array_count_values($Wert);
	
	/* --- Jetzt wird das in ein ganz normalen Array geschrieben ($newWert)---- */
	while(list($key, $val) = each($Wert))
	{
  		$newWert[]= $key;
		$newWert[]= $val;
	}
  	if (isset($newWert))  $Anzahl=count($newWert);
  	else $Anzahl=0;
	
	if ($Anzahl >0 ) 
   	{ 
		?>
		<link REL="stylesheet" HREF="CSS_trampstop.css" TYPE="text/css">
	 	
		
<table  border="0" CELLSPACING="0" CELLPADDING="10" WIDTH="579">
  <tr> 
    	
    <td HEIGHT="10" ALIGN="left" BGCOLOR="#A9FE76" class="TextResult"> <strong>W&auml;hle 
      eins der folgenden Suchergebnisse: </strong></td>
  		</tr>
 		 <tr> 
    	
    <td HEIGHT="10" ALIGN="left" BGCOLOR="#FFFFFF" VALIGN="top"> 
      <table BORDER="0" CELLSPACING="0" CELLPADDING="3" WIDTH="100%">
        <tr> 
          <td WIDTH="120" VALIGN="top" HEIGHT="41">&nbsp;</td>
          <td WIDTH="459"> 
            <table  border="0" CELLPADDING="3" CELLSPACING="0" class="TextResult">
              <?  // --- Ausgabe ------------------------------------ 
		for ($n=0;$n<=$Anzahl;$n=$n+2) 
		{
 			?>
              <tr> 
         	    <td ALIGN="left"> <a   href="suche_zus.php?funktion=one_town_view&var=<? echo @$newWert[$n] ;?>" target="_self"> 
                  
                  <?
			if (@$newWert[$n] != "")  
			{
    			echo $newWert[$n];
				echo " (";
				echo @$newWert[$n+1] ;
				echo ")";
			}
			?>
                  </a></td>
        	<?
		}
		?>
             </tr>
			
            </table>
            
          </td>
       		 </tr>
      		</table>
		    	
      <br>
      <table BORDER="0" CELLSPACING="0" CELLPADDING="4" WIDTH="574">
        <tr VALIGN="middle"> 
          <td nowrap HEIGHT="25" WIDTH="28%"><a HREF="javascript:window.scrollTo(0,0);" CLASS="AndereLinksSuche"><img SRC="images/pfeil.gif" BORDER="0" WIDTH="9" HEIGHT="10"> 
            Zum Seitenanfang</a> </td>
          <td nowrap HEIGHT="25" WIDTH="20%"><a  href="javascript:history.back();" CLASS="AndereLinksSuche"><img SRC="images/pfeil_l.gif"  border="0" WIDTH="10" HEIGHT="9"> 
            &nbsp; Zur&uuml;ck</a> <a  href="javascript:history.back();" CLASS="AndereLinksSuche">&nbsp;</a></td>
          <td nowrap HEIGHT="25" WIDTH="27%"><a  href="suche.htm" CLASS="AndereLinksSuche"><img SRC="images/pfeil_r.gif"  border="0" WIDTH="10" HEIGHT="9"> 
            &nbsp; Neue Suche </a></td>
          <td nowrap HEIGHT="25" WIDTH="25%"><a HREF="index.htm" CLASS="AndereLinksSuche"><img SRC="images/hand_gelb.gif" WIDTH="11" HEIGHT="14" BORDER="0">&nbsp; 
            Home</a></td>
        </tr>
      </table></td>
  			</tr>
		</table>

		<?
  		}
		else
		{
			
					keinEintrag();
			
		}
	}	
	else 
	{
	?>
	
		
<table BORDER="0" CELLSPACING="0" CELLPADDING="10" WIDTH="579">
  <tr>
    	<td  align="center"><span CLASS="Fehleranzeige">Im Moment keine Verbindung zum Datenbankserver. 
      	Versuch es sp&auml;ter noch einmal.</span><br>
      	<br>
      <a HREF="index.htm" CLASS="AndereLinks">Zurueck zur Startseite</a> </td>
  		</tr>
		</table>
	
<?
	}
}
/*
----------------------------------------------------Ende Funktion suche_alles--------------
*/
?>
<?
/*
----------------------------------------------------Start Funktion one_town_view--------------
*/ 
	function one_town_view($var) 
	{
		$server = @mysql_pconnect ("localhost","web79","sahne24mist") or die(mysql_error());
		$suche = trim ($var);
		$SQLString =	"SELECT ID_Haupt,Abfahrt, Land, Beschreibung, Bewertung, Absender, Datum, Norden, Sueden, Westen, Osten
     			           	FROM haupt
							INNER JOIN richtung ON ID_Haupt=ID_Richt
							WHERE Abfahrt like '$var' 
							GROUP BY ID_Haupt
							ORDER BY Abfahrt, Bewertung DESC";
								
		$SQLString2 =	"SELECT ID_Haupt, Richtung
     			           	FROM haupt
							INNER JOIN richtung ON ID_Haupt=ID_Richt
							WHERE Abfahrt like '$var' ";
	    			
							
		$Ergebnis = mysql_db_query("usr_web79_1", $SQLString);
 		$Ergebnis2 = mysql_db_query("usr_web79_1", $SQLString2);
	
		$row=mysql_fetch_row($Ergebnis);
		tabellen($row, $Ergebnis, $Ergebnis2,$var) ;		

}

?>
<?
function suche_detail($abfahrt, $land,$richtung,$bewertung)
{		
			
		   	$server = @mysql_pconnect ("localhost","web79","sahne24mist") or die(mysql_error());
		
			$SQLString =	"SELECT ID_Haupt,Abfahrt, Land, Beschreibung, Bewertung, Absender, Datum, Norden, Sueden, Westen, Osten
     			    	       	FROM haupt
								INNER JOIN richtung ON ID_Haupt=ID_Richt
								WHERE Abfahrt like '".$abfahrt."%' $richtung $bewertung  $land
								GROUP BY ID_Haupt
								ORDER BY Abfahrt, Bewertung DESC";
								
			$SQLString2 =	"SELECT ID_Haupt, Richtung
     			           	FROM haupt
							INNER JOIN richtung ON ID_Haupt=ID_Richt
							WHERE Abfahrt like '".$abfahrt."%' $richtung $bewertung  $land ";
		
		
		$Ergebnis = mysql_db_query("usr_web79_1", $SQLString);
		$Ergebnis2 = mysql_db_query("usr_web79_1", $SQLString2);
		$menge = @mysql_num_rows($Ergebnis);
		if ($menge==0) keinEintrag();
		else 
		{
			$row=mysql_fetch_row($Ergebnis);
			tabellen($row, $Ergebnis, $Ergebnis2,$var="") ;
		}
}


?>
<?
function tabellen ($row,$Ergebnis,$Ergebnis2,$var)

{
?>
<table WIDTH="579" BORDER="0" CELLSPACING="0" CELLPADDING="0" HEIGHT="3">
  <tr>
    <td></td>
  </tr>
</table>

<?
	while ($row)  
	{ 
			
			?>
<table WIDTH="574" BORDER="0" CELLSPACING="0" CELLPADDING="0">
  <tr>
    <td WIDTH="574">
      <table WIDTH="574" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#BEBEBE">
        <tr > 
          <td BGCOLOR="#A9FE76"> 
            <table WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="0" class="TextResult">
              <tr> 
                <td WIDTH="140" VALIGN="top"><strong>Von:</strong> 
                  <? 
		  	if ($var == $row[1]) echo "<font color=\"FF0000\">",$row[1],"</font>";
			else echo $row[1];
		 	?>
                  <br>
                  Land: 
                  <?
			echo $row[2];;
			?>
                </td>
                <td width="70" VALIGN="top" nowrap><strong>In Richtung:</strong> 
                  &nbsp; </td>
                <td VALIGN="top"> 
                  <?
			$i=0;
			$komma=0;
			while ($i<mysql_num_rows ($Ergebnis2)) 
			{
					if ($row[0] == mysql_result($Ergebnis2,$i,0) && mysql_result($Ergebnis2,$i,1 != "" ))
					{
						if ($komma==1) echo ", ";
						$dir =mysql_result($Ergebnis2,$i,1);
						if ($var == $dir) echo "<font color=\"FF0000\">",$dir,"</font>";
						else echo $dir;
						if ($dir != "") $komma =1;
					}
					$i++	;
			}	
		 	?>
                  <?
			for ($x=7;$x<=10;$x++)
			{
			 	if ($row[$x] == 1) 
				{
					if ($komma ==1) echo ", ";	
					if ($x==7) echo "Norden";
					if ($x==8) echo "S&uuml;den";
					if ($x==9) echo "Westen";
					if ($x==10) echo "Osten";
					
					$komma=1; 
				}
			}	 
			if ($komma==0) echo "keine Angaben";
			?>
                </td>
              </tr>
              <tr> </tr>
            </table>
          </td>
        </tr>
        <tr > 
          <td VALIGN="bottom"> 
            <table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5" BGCOLOR="#EAFFDF">
              <tr> 
                <td class="TextResult"> 
                  <?
			/*------------------ Handbildschleife -------------*/
			if($row[4]==1)
			{
				?>
                  <img SRC="images/hand2.gif" WIDTH="10" HEIGHT="14"> 
                  <?
			}
			else if ($row[4]>1)
			{
		 		for ($i=1;$i<=$row[4];$i++)
				{
					?>
                  <img SRC="images/hand.gif"> 
                  <?
				}
			}
			else echo "&nbsp;";
			/*------------------------------------------------------*/		 
			?>
                  &nbsp; </td>
              </tr>
              <tr> 
                <td class="TextResult"> 
                  <?
				
				  
			echo $row[3];
			?>
                </td>
              </tr>
              <tr> 
                <td class="TextResult"> <i> 
                  <?
			echo $row[5];
			?>
                  , 
                  <?
			echo $row[6];
			?>
                  </i></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td HEIGHT="5" WIDTH="574"></td>
  </tr>
</table>
<?
			$row=mysql_fetch_row($Ergebnis);
	}
	?>
<table BORDER="0" CELLSPACING="0" CELLPADDING="4" WIDTH="574">
  <tr VALIGN="middle"> 
    <td nowrap HEIGHT="25" WIDTH="28%"><a HREF="javascript:window.scrollTo(0,0);" CLASS="AndereLinksSuche"><img SRC="images/pfeil.gif" BORDER="0" WIDTH="9" HEIGHT="10"> 
      Zum Seitenanfang</a> </td>
    <td nowrap HEIGHT="25" WIDTH="20%"><a  href="javascript:history.back();" CLASS="AndereLinksSuche"><img SRC="images/pfeil_l.gif"  border="0" WIDTH="10" HEIGHT="9"> 
      Zur&uuml;ck</a> <a  href="javascript:history.back();" CLASS="AndereLinksSuche">&nbsp;</a></td>
    <td nowrap HEIGHT="25" WIDTH="27%"><a  href="suche.htm" CLASS="AndereLinksSuche"><img SRC="images/pfeil_r.gif"  border="0" WIDTH="10" HEIGHT="9"> 
      Neue Suche </a></td>
    <td nowrap HEIGHT="25" WIDTH="25%"><a HREF="index.htm" CLASS="AndereLinksSuche"><img SRC="images/hand_gelb.gif" WIDTH="11" HEIGHT="14" BORDER="0"> 
      &nbsp;Home</a></td>
  </tr>
</table>
<?
}


?>
<?
function keinEintrag ()
{
?>
<table WIDTH="579" BORDER="0" CELLSPACING="0" CELLPADDING="10">
  <tr> 
    <td ALIGN="center" BGCOLOR="#A9FE76" class="AndereLinks5">Keine Eintr&auml;ge.</td>
  </tr>
  <tr> 
    <td ALIGN="center" HEIGHT="20" > 
      <table BORDER="0" CELLSPACING="0" CELLPADDING="0">
        <tr> 
          <td nowrap HEIGHT="30"><a  href="javascript:history.back();" CLASS="AndereLinksSuche"><img SRC="images/pfeil_l.gif"  border="0" WIDTH="10" HEIGHT="9"> 
            &nbsp;&nbsp;Zur&uuml;ck</a></td>
        </tr>
        <tr> 
          <td nowrap HEIGHT="30"><a  href="suche.htm" CLASS="AndereLinksSuche"><img SRC="images/pfeil_r.gif"  border="0" WIDTH="10" HEIGHT="9"> 
            &nbsp;&nbsp;Neue Suche </a></td>
        </tr>
        <tr> 
          <td nowrap HEIGHT="30"><a HREF="index.htm" CLASS="AndereLinksSuche"><img SRC="images/hand_gelb.gif" WIDTH="11" HEIGHT="14" BORDER="0" HSPACE="2">&nbsp;&nbsp;Home</a></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
			<?
			}


?>
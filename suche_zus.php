 
<html>
<head>
<title>Suche - www.trampstop.de</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="CSS_trampstop.css" type="text/css">
<meta name="keywords" content="trampen,trempen,anhalter,autostop,per anhalter, Deutschland, tramper,Trampen,Trampstop,hitchhiking,hitchiking,Hitchhiker,ortsdatenbank,datenbank,ortssuche,ortsuche ">
<meta name="description" content="Per Anhalter durch Deutschland. Trampstop - die Hilfe für Tramper im Netz.">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="#006699" vlink="#000066">
<table width="800" border="0" cellspacing="0" cellpadding="0" align="left">
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" bgcolor="#FFFFFF" height="20"></td>
    <td nowrap align="left" valign="bottom" height="20" width="196"></td>
    <td width="1" nowrap height="0"></td>
    <td align="left" valign="bottom" nowrap height="20" width="559"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" height="20" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" bgcolor="#FFFFFF" height="60"></td>
    <td nowrap align="center" valign="middle" bgcolor="#000000" height="60" width="196"><a href="index.htm"><img src="images/logo.gif" width="173" height="60" border="0"></a> 
    </td>
     <td width="4" nowrap bgcolor="#000000">&nbsp; </td>
    <td align="right" valign="bottom" nowrap bgcolor="#000000" height="60" width="559"><img src="images/t_suche.gif" width="177" height="39"></td>
    <td align="left" valign="bottom" nowrap bgcolor="#FFFFFF" width="20" height="60"></td>
  </tr>
  <tr> 
    <td  nowrap align="left" valign="bottom" height="4" width="20"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"></td>
    <td width="4" nowrap height="0"></td>
    <td align="left" valign="bottom" nowrap height="1" width="559"></td>
    <td align="left" valign="bottom" nowrap height="1" width="20"> </td>
  </tr>
  <tr> 
    <td nowrap width="20" bgcolor="#99FF00" height="350">&nbsp; </td>
    <td nowrap bgcolor="#99FF00" align="center" valign="top" width="196" height="350"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="center">&nbsp;</td>
                <td align="left"> <a href="index.htm" target="_parent" class="hauptlinks">Home</a> 
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="right"><img src="images/marker.gif" width="5" height="10">&nbsp;&nbsp;</td>
                <td nowrap align="left"> <a href="suche.htm" class="hauptlinksAktiv">Suche</a></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="center">&nbsp;</td>
                <td nowrap align="left" > <a href="eintrag.htm" class="hauptlinks"> 
                  Eintrag</a></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100">&nbsp; </td>
                <td align="left"> <a HREF="Forum/index.php" class="hauptlinks">Forum</a> 
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="center">&nbsp;</td>
                <td align="left" > <a href="links.htm" class="hauptlinks">Links</a></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td valign="middle" align="left" height="50"> 
            <table border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="100" align="right" valign="top"> 
                  <table width="60" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="40" height="19"><b><img src="images/kontakt.gif" width="26" height="15"></b></td>
                      <td width="20" align="right"><b>&nbsp; </b></td>
                    </tr>
                  </table>
                  
                </td>
                <td class="hauptlinks" align="left"> <a href="kontakt.htm" class="hauptlinks">Kontakt</a></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
    <td nowrap width="4"></td>
    <td valign="top" nowrap align="center" height="350" colspan="2"> 
      <table width="579" border="0" cellspacing="1" cellpadding="0" height="350" bgcolor="#BEBEBE">
        <tr bgcolor="#D2D2D2"> 
          <td valign="top" bgcolor="#FFFFFF" width="579" height="350" align="center"> 
            <? 
	
	require("suchfunktionen.php"); 
	if (@$index == "abri")
	{ 
		suche($suche);
  	}
	else if (@$index == "detail") 
	{	
		/*----------------------Bewertung-----------------------------------------*/
		$bewertung="";
		if (isset($bewertung1) || isset($bewertung2) || isset($bewertung3) || isset($bewertung4) || isset($bewertung5))
		{	$var = array(0,0,0,0,0,0);
			if (isset($bewertung1))  $var[1] = 1;
			if (isset($bewertung2))  $var[2] = 1;
			if (isset($bewertung3))  $var[3] = 1;
			if (isset($bewertung4))  $var[4] = 1;
			if (isset($bewertung5)) $var[5] = 1;
			$or=0;
			for ($i=1;$i<6;$i++)
			{
				if ($var[$i] ==1)
				{   	
					if ($or==0) $bewertung .=" && (";
					if ($or>0) $bewertung .=" || ";
					$bewertung .= " Bewertung = ".$i;
					$or ++;
				}
			
			}	 		
		     $bewertung .= " )";
		
		}
		
		/*----------------------------Richtung-------------------------------*/
		$ri=trim($ri) ;
		$orichtung="";
		if ($ri != "")	
		{
			$orichtung = " Richtung = '".$ri."'";
		}
			
		$hrichtung="";
		if ($hr != "x")	
		{
			$hrichtung = $hr." = 1 ";
		}
		
		if			($orichtung !="" && $hrichtung != "") $richtung = " && (".$orichtung." || ".$hrichtung." ) ";
		else if	($orichtung =="" && $hrichtung != "") $richtung = " && ".$hrichtung;
		else if	($orichtung !="" && $hrichtung == "") $richtung = " && ".$orichtung;
		else 		  $richtung = " "; 
		
		/*------------------Land------------------------*/
		$land="";
		if ($rg != "x")
		{
		$land = " &&  Land = '".$rg."'";
		}	
		
		
			
		suche_detail($abfahrt, $land,$richtung,$bewertung) ;
    }		
		
	else if (@$funktion == "one_town_view")
	{
		one_town_view($var);
		
	}
	else  if (@$funktion == "all_town_view")
	{
		all_town_view($var);
		
	}
	
	
	?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td width="20" nowrap align="left" valign="bottom" height="4"></td>
    <td nowrap align="left" valign="bottom" height="1" width="196"> </td>
    <td nowrap height="1" width="4"></td>
    <td nowrap height="1" width="559"></td>
    <td align="left" valign="bottom" nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="60"></td>
    <td nowrap align="center" valign="middle" height="1" bgcolor="#000000" width="196" class="AndereLinksCopyrightHome">&copy; 
      2002 Georg Ludewig</td>
    <td nowrap height="5" bgcolor="#000000" width="4"><font size="2">&nbsp;</font></td>
    <td align="center" valign="middle" nowrap height="1" bgcolor="#000000" width="559">&nbsp; 
    </td>
    <td nowrap height="1" width="20"></td>
  </tr>
  <tr> 
    <td width="20" nowrap height="20"></td>
    <td nowrap height="20" width="196">&nbsp;</td>
    <td nowrap height="20" width="1">&nbsp;</td>
    <td nowrap height="20" valign="bottom" width="559"><font size="1" face="Arial, Helvetica, sans-serif" color="#666666">&nbsp;&nbsp;&nbsp;Letzte &Auml;nderung: 10.10.2002</font></td>
    <td nowrap height="20" width="20"></td>
  </tr>
</table>

  
  </body>
</html>

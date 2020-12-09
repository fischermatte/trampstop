<html>
<head>
<title>Datenbank Trampstop erzeugen</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="30">&nbsp;</td>
    <td width="133"> <font size="2" face="Arial, Helvetica, sans-serif"><b>Tabelle 
      erstellen !</b></font></td>
  </tr>
  <tr> 
    <td width="30">&nbsp;</td>
    <td width="133"><font size="2" face="Arial, Helvetica, sans-serif" color="#FF0000"><b> 
      <?
 	
   	$Server = mysql_connect ("localhost","web79","sahne24mist") or die ("Could not connect!");
	$db = mysql_select_db ("usr_web79_1") or die ("Falscher dbName?");
	
							
	$SQLString= "	INSERT INTO umfrage (ID,JA,NEIN,EGAL) 
					VALUES 				 (1,0,0,0)";
												
	
	 
		if (mysql_db_query("usr_web79_1",$SQLString)) {
	  		echo " Erste Daten eingefügt <br>";
			}
		else  {		echo " Daten nicht eingefügt <br>";								
  			}
   
  
?>
      </b></font></td>
  </tr>
</table>

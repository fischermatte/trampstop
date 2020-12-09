<html>
<head>
<title>Datenbank Trampstop erzeugen</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords" content="trampen,trempen,anhalter,autostop,per anhalter, Deutschland, tramper,Trampen,Trampstop,hitchhiking,hitchiking,Hitchhiker,ortsdatenbank,datenbank,ortssuche,ortsuche ">
<meta name="description" content="Per Anhalter durch Deutschland. Trampstop - die Hilfe für Tramper im Netz.">
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
    $SQLString = "	CREATE TABLE forum (
   							id mediumint(9) NOT NULL auto_increment,
   							onderwerp varchar(100) NOT NULL,
   							naam varchar(100) NOT NULL,
   							bericht text NOT NULL,
   							optijd int(11) DEFAULT '0' NOT NULL,
   							op varchar(19) NOT NULL,
   							replyop mediumint(9) DEFAULT '0' NOT NULL,
   							replys int(11) DEFAULT '0' NOT NULL,
   							PRIMARY KEY (id),
   							UNIQUE id (id)
					)";
												
	mysql_db_query("usr_web79_1",$SQLString) or die ("Konnte nicht Tabelle Anlegen! ") 
	  		
			
	 
   
  
?>
      </b></font></td>
  </tr>
</table>

<html>
<head>
<title>Datenbank Trampstop Abfragen</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<font size="2" face="Arial, Helvetica, sans-serif" color="#FF0000"><b> 
<?
 $Server = mysql_connect ("localhost","web79","sahne24mist");

//-------HAUPTTABELLE---------------------------------------------------
   $SQLString = "SELECT *
                 FROM haupt";
   $Ergebnis = mysql_db_query("usr_web79_1", $SQLString,
                              $Server);
   $Spaltenzahl = mysql_num_fields($Ergebnis);
  
   echo "<table  border=\"0\" cellspacing=\"1\" cellpadding=\"3\"> <tr>";

   //--- Tabellenkopf definieren -------------
   $i = 0;
   while ($i < $Spaltenzahl) {
      echo "<td bgcolor=\"#000066\"><font color=\"#FFFFFF\">";
      echo mysql_field_name($Ergebnis, $i);
      echo "</font></td>";
      $i++;
   }
   echo "</tr>";

   //--- Daten in Tabelle ausgeben ------------
   $n = 0;
   while ($n < mysql_num_rows($Ergebnis)) {
      
      echo "<tr>";
      $i = 0;
      while ($i < $Spaltenzahl) {
         echo "<td bgcolor=\"#999999\">";
         echo mysql_result($Ergebnis,$n,$i);
         echo "</td>";
         $i++;
      }
      mysql_fetch_row($Ergebnis, $n++);
	  echo "</tr>";
   }
   echo "</table> <br>";

//-------RICHTUNGSTABELLE---------------------------------------------------
   $SQLString = "SELECT *
                 FROM richtung";
   $Ergebnis = mysql_db_query("usr_web79_1", $SQLString,
                              $Server);
   $Spaltenzahl = mysql_num_fields($Ergebnis);
  
   echo "<table  border=\"0\" cellspacing=\"1\" cellpadding=\"3\"> <tr>";

   //--- Tabellenkopf definieren -------------
   $i = 0;
   while ($i < $Spaltenzahl) {
      echo "<td bgcolor=\"#000066\"><font color=\"#FFFFFF\">";
      echo mysql_field_name($Ergebnis, $i);
      echo "</font></td>";
      $i++;
   }
   echo "</tr>";

   //--- Daten in Tabelle ausgeben ------------
   $n = 0;
   while ($n < mysql_num_rows($Ergebnis)) {
      
      echo "<tr>";
      $i = 0;
      while ($i < $Spaltenzahl) {
         echo "<td bgcolor=\"#999999\">";
         echo mysql_result($Ergebnis,$n,$i);
         echo "</td>";
         $i++;
      }
      mysql_fetch_row($Ergebnis, $n++);
	  echo "</tr>";
   }
   echo "</table><br>";

//-------HAUPTTABELLE---------------------------------------------------
   $SQLString = "SELECT *
                 FROM forum";
   $Ergebnis = mysql_db_query("usr_web79_1", $SQLString,
                              $Server);
   $Spaltenzahl = mysql_num_fields($Ergebnis);
  
   echo "<table  border=\"0\" cellspacing=\"1\" cellpadding=\"3\"> <tr>";

   //--- Tabellenkopf definieren -------------
   $i = 0;
   while ($i < $Spaltenzahl) {
      echo "<td bgcolor=\"#000066\"><font color=\"#FFFFFF\">";
      echo mysql_field_name($Ergebnis, $i);
      echo "</font></td>";
      $i++;
   }
   echo "</tr>";

   //--- Daten in Tabelle ausgeben ------------
   $n = 0;
   while ($n < mysql_num_rows($Ergebnis)) {
      
      echo "<tr>";
      $i = 0;
      while ($i < $Spaltenzahl) {
         echo "<td bgcolor=\"#999999\">";
         echo mysql_result($Ergebnis,$n,$i);
         echo "</td>";
         $i++;
      }
      mysql_fetch_row($Ergebnis, $n++);
	  echo "</tr>";
   }
   echo "</table> <br>";

   //-------HAUPTTABELLE---------------------------------------------------
   $SQLString = "SELECT *
                 FROM umfrage";
   $Ergebnis = mysql_db_query("usr_web79_1", $SQLString,
                              $Server);
   $Spaltenzahl = mysql_num_fields($Ergebnis);
  
   echo "<table  border=\"0\" cellspacing=\"1\" cellpadding=\"3\"> <tr>";

   //--- Tabellenkopf definieren -------------
   $i = 0;
   while ($i < $Spaltenzahl) {
      echo "<td bgcolor=\"#000066\"><font color=\"#FFFFFF\">";
      echo mysql_field_name($Ergebnis, $i);
      echo "</font></td>";
      $i++;
   }
   echo "</tr>";

   //--- Daten in Tabelle ausgeben ------------
   $n = 0;
   while ($n < mysql_num_rows($Ergebnis)) {
      
      echo "<tr>";
      $i = 0;
      while ($i < $Spaltenzahl) {
         echo "<td bgcolor=\"#999999\">";
         echo mysql_result($Ergebnis,$n,$i);
         echo "</td>";
         $i++;
      }
      mysql_fetch_row($Ergebnis, $n++);
	  echo "</tr>";
   }
   echo "</table> <br>";

?>


</b></font>
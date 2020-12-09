<? 
	include('or-ortsdatenbank.php'); 
	include ("Languages/language.php");
	include('utils.php');
	$db = new DB();
	
	$abfrage = false;
	if (isset($HTTP_GET_VARS['abfrage'])) $abfrage = $HTTP_GET_VARS['abfrage'];
	
	?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$_headline_suche." - ".$_titel_index_1;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">

</head>

<body align="left">        <form action="<?=$HTTP_SERVER_VARS['PHP_SELF'];?>" method="get" name="myform" id="myform">
    
   <? include("inc_header.php");?><br>
  <? include("inc_suche.php");?>
<br>
 <br><br><br>
      <? include("inc_copyright.php");?>
      <br>
</form> 
</body>
</html>

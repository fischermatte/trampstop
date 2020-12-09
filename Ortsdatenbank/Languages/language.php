<?
	
	
		$defaultlanguage = "ger";
		$LANG="";
		if (!isset($HTTP_GET_VARS['LANG'])) 	
			$LANG = $defaultlanguage;
		else
			$LANG = $HTTP_GET_VARS['LANG'];
		@include ($LANG.".php");
	


	function getLanguageLink($query,$self)
	{
		$result ="";
		if (strpos($query,"&LANG") != 0 )
		{ 
			$pos = strpos($query,"&LANG");
			$result1 = substr($query,0,$pos);
			$result2 = substr($query,$pos+9);
			$result = $self."?".$result1.$result2."&";
		}
		else 
		{
			if (strpos($query,"LANG")== 0 )
			{
				$pos = strpos($query,"LANG");
				$result1 = substr($query,0,$pos);
				$result2 = substr($query,9);
				if (strlen($result2)>0) $result2 .= "&";
				$result = $self."?".$result1.$result2;
			}
			else 
			{
				$result = $self."?".$query;
			}
		}
		return $result;
	}
?>
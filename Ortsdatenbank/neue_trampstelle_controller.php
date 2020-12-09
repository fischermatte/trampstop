<?
	session_start();
    include ("or-ortsdatenbank.php");
	
	include ("utils.php");
    $db = new DB();
	$trampstelle = $HTTP_GET_VARS['trampstelle'];
	if (!session_is_registered("done"))
	{
		$ts = Trampstelle::create($trampstelle);
		if (is_object($ts))
		{		
			$zielseite = $HTTP_GET_VARS['zielseite']."&t_id=$ts->t_id&success=1&type=Trampstelle";
		}
		else
			$zielseite = $HTTP_GET_VARS['zielseite']."&t_id=$ts->t_id&success=0";
		session_register("done");
		session_register("t_id_".$ts->t_id);
		
	 	weiterleitung($zielseite);
	}
	
	 else
	 {
	 	// Falls der Eitnrag schon mal erledigt worden ist
	 	$zielseite = $HTTP_GET_VARS['zielseite']."&t_id=&success=0";
	 	weiterleitung($zielseite);
	 }
	
    

?>
<?
	session_start();
    include ("or-ortsdatenbank.php");
	
	include ("utils.php");
    $db = new DB();
	if (!isset($HTTP_GET_VARS['kommentar']))
		echo ("<br>Fehler: Es wurden keine Parameter übergeben.<br>");	
	else
	{
		$kommentar= $HTTP_GET_VARS['kommentar'];
		if (!session_is_registered("t_id_".$kommentar['t_id_fk']))
		{
			$k = Kommentar::create($kommentar);
			if (is_object($k))
				$zielseite = $HTTP_GET_VARS['zielseite']."&t_id=$k->t_id_fk&success=1&type=Kommentar";
			else
				$zielseite = $HTTP_GET_VARS['zielseite']."&t_id=$k->t_id_fk&success=0";
			session_register("t_id_".$k->t_id_fk);
			weiterleitung($zielseite);
		}	
		 else
		 {
			// Falls der Eitnrag schon mal erledigt worden ist
			$zielseite = $HTTP_GET_VARS['zielseite']."&t_id=&success=0";
			weiterleitung($zielseite);
		 }
	}
	


?>
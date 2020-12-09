<?
class Administrator
{
	var $a_id;
	var $name;
	var $email;
	
	
	function Administrator ($dic)
	{
		$this->a_id 				= $dic['a_id'];
		$this->name					= $dic['name'];
		$this->email				= $dic['email'];
	}
		
	function alleAdmins()
	{		
		$sql ="Select a_id, name, email from odb_admin";
		return DB::query("$sql", "Administrator");
	}
	
	
	//instanzen methoden
	function SendNewEntry($message, $type="Trampstelle") 
		{
	 	$to ="$this->name <$this->email>";
		
		//specify MIME version 1.0 
		$headers = "MIME-Version: 1.0\n"; 
		
		//tell e-mail client this e-mail contains//alternate versions 
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "From: Ortsdatenbank<seitenmeister@trampstop.de>\r\n"; 
		//HTML 
		
		
		@mail($to, "$type eingetragen", $message, $headers); 

	}
}




?>
<?

class Kommentar 
{
	var $k_id;
	var $t_id_fk;
	var $absender;
	var $beschreibung;
	var $datum;
	var $bewertung;
		
	function Kommentar ($dic)
	{
		$this->k_id 				= $dic['k_id'];
		$this->t_id_fk				= $dic['t_id_fk'];
		$this->beschreibung			= $dic['beschreibung'];
		$this->bewertung			= $dic['bewertung'];
		$this->absender				= $dic['absender'];
		$this->datum				= $dic['datum'];
	}
	
	function create($dic) 
	{            
			$new_dic['t_id_fk']			= $dic['t_id_fk'];
			$new_dic['beschreibung']	= empty($dic['beschreibung'])?"NULL":"'".$dic['beschreibung']."'";
			$new_dic['bewertung']		= $dic['bewertung'];
			$new_dic['absender']		= empty($dic['absender'])?"NULL":"'".$dic['absender']."'";
			$new_dic['datum']			= "'".db::getSysdate()."'"; 			
			
			DB::do_sql("INSERT INTO odb_kommentar (t_id_fk, beschreibung,bewertung,absender,datum)
                       VALUES ($new_dic[t_id_fk],$new_dic[beschreibung],$new_dic[bewertung],$new_dic[absender],$new_dic[datum])");
			
			$new_dic['k_id'] = DB::get_LastID();			
		
			return new Kommentar ($new_dic);		
	}
	
	}
	
			?>
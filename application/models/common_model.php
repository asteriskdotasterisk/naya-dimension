<?php 
class Common_model extends CI_Model{
	
	
	function full_info($id, $table, $where){
		$res = $this->db->query('SELECT * FROM '.$table.' WHERE '.$where.'="'.$id.'" limit 1');
		if($res->num_rows == 0){return null;}
		else{
		return $res->row();
		}
		}
		
	
	}
?>
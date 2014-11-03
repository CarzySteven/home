<?php

class read extends CI_Model{
	function get($sql){ 
	//get select 該頁 資料。
		$query= $this->db->query($sql);
		return $query->result();
	}	


}
<?php

class insertdata extends CI_Model{
	
	function insert($data){//傳入ＳＱＬ指令＆資料
		$dataAry[] = $data['newRow'];
		$this->db->insert_batch("$data[sql]",$dataAry);
	}
}
<?php

class read extends CI_Model{
	function get($sql){ 
	//get select 該頁 資料。
		// $sql = $this->db->get_where('Personal_information', array('id' => '$newRow[id]','psw'=> '$newRow[psw]'));
		
		// $query = $this->db->get_where("$data[sql]",$dataAry);
		// $query= $this->db->query($sql);
		// return $query->result();
	}	


}
// 

	 // foreach ($allowFields as $key) {
  //           if (array_key_exists($key, $modifyInfo)) {
  //               $sqlStrAry[] = "$key = ?";
  //               $bindAry[] = $modifyInfo[$key];
  //           }
  //       }


  //   //修改資料
  //   public function editQuestionnaireInfo($questionnaireId, $modifyInfo) {
  //       $allowFields = array (
  //           "title",
  //           "description",
  //           "image",
  //           "modified_time",
  //       );

  //       $sqlStr = "UPDATE tb_questionnaire SET ";
  //       $bindAry = array ();
  //       $sqlStrAry = array ();

  //       $modifyInfo['modified_time'] = date("Y-m-d H:i:s");

  //       foreach ($allowFields as $key) {
  //           if (array_key_exists($key, $modifyInfo)) {
  //               $sqlStrAry[] = "$key = ?";
  //               $bindAry[] = $modifyInfo[$key];
  //           }
  //       }

  //       $sqlStr = $sqlStr . join(",", $sqlStrAry) . " WHERE id = ?";
  //       $bindAry[] = $questionnaireId;

  //       return $this->sqlQuery($sqlStr, self::QUERY_TYPE_UPDATE, $bindAry);
  //   }
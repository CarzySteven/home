<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class select extends CI_Controller {

	public function index(){
		$this->getvalues();

 	}
	
	function getvalues(){

		$this->load->model("message_db");
		if(empty($_GET['page']))
		$_GET['page'] = 1;
		$page = $_GET['page'];//目前頁數
		$per=20; //設定顯示資料量
		$start = ($page - 1) * $per; //select 開始頁數
		$page_data['dataAry']=$this->message_db->get($start,$per);
		$datatotal = $this->message_db->getTotal();
		//datatotal Object值 dataTotal 目前值
		$page_data['page']=$_GET['page'];
		$page_data['pages_row'] = $per; //設定顯示資料量
		$page_data['datatotal'] = $datatotal[0]->total; //資料庫總數
		// print_r($page_data['dataAry']);exit;
		$this->load->view("select_view",$page_data);

	}

	// insert data ->array
function insertValues(){
		$this->load->model("message_db");
		$newRow = $_POST;
		$newRow['created_at'] = date("Y-m-d H:i:s");
		$newRow['msgtime'] = date("Y-m-d H:i:s");
		$newRow['sort'] = '0';
		$newRow['create'] = '0';
		$newRow['modify'] = '0';
		$newRow['updated_at'] = date("Y-m-d H:i:s");
		// print_r($_POST);
		// print_r($newRow);
		$this->message_db->insert2($newRow);
	}

	function updataValues(){
		$this->load->model("message_db");
		$newRow = array(
		array("id"=>"3","name"=>"marcus"),
		array("id"=>"4","name"=>"bill")

			);
		$this->message_db->update2($newRow);
		echo "it has been updata";
	}

	function deleteValues(){
		$this->load->model("message_db");

		$oldRow =array("id"=>"19");

		$this->message_db->delete1($oldRow);
		echo "it has been delete";
	}

	function emtpyTable(){
		$this->load->model("message_db");
		$oldRow = "test";
		$this->message_db->empty1($oldRow);
		echo "emptied";
	}
}

	

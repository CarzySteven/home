<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class talk extends CI_Controller {

	public function index(){
		if(!empty($_POST['name']))
		$this->talkdata();
		$this->getvalues();

 	}
	function talkdata(){
		$this->load->model("insertdata");


		$newRow = $_POST;
		$newRow['created_at'] = date("Y-m-d H:i:s");
		$newRow['msgtime'] = date("Y-m-d H:i:s");
		$newRow['sort'] = '0';
		$newRow['create'] = '0';
		$newRow['modify'] = '0';
		$newRow['updated_at'] = date("Y-m-d H:i:s");

		$sql="message"; //table
		$dataAry['sql']=$sql;
		$dataAry['newRow'] = $newRow;
		$this->insertdata->insert($dataAry);

		
	}



	function getvalues(){

		$this->load->model("message_db");
		if(empty($_GET['page']))
		$_GET['page'] = 1;
		$page = $_GET['page'];//目前頁數
		$per=20; //設定顯示資料量
		$start = ($page - 1) * $per; //select 開始頁數
		$page_sql="SELECT * From message order by id limit $start,$per";
		// SQL查詢指令 
		$page_data['dataAry']=$this->message_db->get($page_sql);
		$datatotal = $this->message_db->getTotal();
		//datatotal Object值 dataTotal 目前值
		$page_data['page']=$_GET['page'];
		$page_data['pages_row'] = $per; //設定顯示資料量
		$page_data['datatotal'] = $datatotal[0]->total; //資料庫總數
		// print_r($page_data['dataAry']);exit;
		$this->load->view("talk_view",$page_data);

	}

}

	

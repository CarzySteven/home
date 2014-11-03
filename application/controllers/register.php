<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {

	public function index(){
	$this->load->view("view_register");
		if(!empty($_GET) ){
		$this->load->model("read");
		$this->load->helper('url');
		$newRow = $_GET;
		$sql="SELECT * FROM Personal_information WHERE id='$newRow[id]' AND username='$newRow[username]' AND email='$newRow[email]' ";
		$data=$this->read->get($sql);
			if(empty($data)){
			$this->load->model("insertdata");
			$sql="personal_information"; //table
			
			$dataAry['newRow'] = $newRow;//包住data
			$dataAry['sql'] = $sql;	//sql語法
			//dataAry('newRow','sql')<-固定格式
			$this->insertdata->insert($dataAry);
			redirect('login', 'location');	
			}

		}
 	}
	
 



}

	

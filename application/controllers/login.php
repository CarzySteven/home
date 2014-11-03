<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function index(){
	$this->load->view("view_login");

		if(!empty($_POST) ){
			$this->load->model("read");
			$newRow = $_POST;
			$this->load->helper('url');
			$sql = "SELECT * FROM Personal_information WHERE id='$newRow[id]' AND psw='$newRow[psw]' ";
			$data=$this->read->get($sql);
				if(!empty($data)){
		        $_SESSION['username'] = $data[0]->id;//session 記錄
		        redirect('main', 'location');//登入成功。
				}	
		}	
		

	}

}


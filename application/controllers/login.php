<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function index(){
	$this->load->view("view_login");

		if(!empty($_POST) ){
			// $this->load->model("read");
			$newRow = $_POST;
			$this->load->helper('url');
			$data = $this->db->get_where('Personal_information', array('id' => '$newRow[id]','psw'=> '$newRow[psw]'));
			// 此ＳＱＬ會引發資料隱碼攻擊 
			// $sql = "SELECT * FROM Personal_information WHERE id='$newRow[id]' AND psw='$newRow[psw]' ";
			// $data=$this->read->get($sql);
			
				if(!empty($data)){
		        $_SESSION['username'] = $_POST['id'];//session 記錄
		        redirect('main', 'location');//登入成功。
				}	
		}	
		

	}

}


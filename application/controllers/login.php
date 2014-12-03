<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function index(){
	$this->load->view("view_login");

		if(!empty($_POST) ){
			// $this->load->model("read");
			$newRow = $_POST;
			$this->load->helper('url');
			//直接寫可避免權限問題
			
			$data = $this->db->get_where('Personal_information', 
				array('id' => $newRow['id'],'psw'=> $newRow['psw']));
			// 此ＳＱＬ會引發資料隱碼攻擊 
			// $sql = "SELECT * FROM Personal_information WHERE id='$newRow[id]' AND psw='$newRow[psw]' ";
			// $data=$this->read->get($sql);	
				if(!empty($data->num_rows() )){ //$data->num_row() 資料庫是否有搜尋成功。
		        $_SESSION['username'] = $_POST['id'];//session 記錄
		        redirect('main', 'location');//登入成功。
				}	
		}	
		

	}

}


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class checkout extends CI_Controller {

	public function index(){
		$this->check();




 	}
	
 	function check(){
 		$this->load->helper('url');
		$this->load->model("check");
		$newRow = $_POST;
		// $newRow['created_at'] = date("Y-m-d H:i:s");
		// $newRow['msgtime'] = date("Y-m-d H:i:s");
		// $newRow['sort'] = '0';
		// $newRow['create'] = '0';
		// $newRow['modify'] = '0';
		// $newRow['updated_at'] = date("Y-m-d H:i:s");
		// print_r($_POST);
		// echo "<BR>";

		$data=$this->check->readlogin($newRow);
		if(!empty($data)){
        $_SESSION['username'] = $data[0]->id;
        print_r("ok");
        // redirect('/index.php/login', 'location');
        // return $_SESSION['username'];
		}

		else{
		echo "try again";
        // redirect('/index.php/login', 'location');
		}
		// // $this->checkin->checklogin($data,$newRow);
		
		// $this->message_db->insert2($newRow);

		
	}

	

}

	

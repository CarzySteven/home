<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class checkitem extends CI_Controller {

	public function index(){
		$this->check();

 	}
	
 	function check(){
 		$this->load->helper('url');
		$this->load->model("check");
		$newRow = $_POST;
		$data=$this->check->readitem($newRow);

		if($data[0]->id == $newRow['id'])
		{
			echo "id Repeat";
		if($data[0]->username == $newRow['username'])
			echo "username Repeat";
		if($data[0]->email == $newRow['email'])
			echo "email Repeat";
		}
		else
		redirect('/index.php/login', 'location');

			
	}

}

	

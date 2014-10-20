<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registerdata extends CI_Controller {

	public function index(){
		$this->insertValues();
 	}
	
 	function insertValues(){
		$this->load->model("check");
		$this->load->helper('url');
		$newRow = $_POST;
		$data=$this->check->readitem($newRow);
		if($data[0]->id == $newRow['id'] || 
		   $data[0]->username == $newRow['username'] ||
		   $data[0]->email == $newRow['email']){
		redirect('register', 'location');	
		}
		else{
		$this->load->model("message_db");
		$this->message_db->insertregister($newRow);
		redirect('login', 'location');	
		}
	}
}

	

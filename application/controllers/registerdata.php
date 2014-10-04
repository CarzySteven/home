<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registerdata extends CI_Controller {

	public function index(){
		$this->insertValues();
 	}
	
 	function insertValues(){
		$this->load->model("message_db");
		$newRow = $_POST;
		$newRow['birth'] = date("Y-m-d H:i:s");
		$this->message_db->insertregister($newRow);
		
	}

	function go_select(){
		$this->load->helper('url');
		// $url = "localhost/ci/index.php/select";
		// $us = prep_url($url);
		// echo $us;

		redirect('/index.php/updata', 'location');

	}

}

	

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		
		// $this->insertValues();
		$this->getvalues();
		// $this->About();
 	}
	

	public function Total(){
		echo 'ok';
		// $data['title']="hello world";
		// $data['var1']="1";
		// $data['var2']="2";
		// $this->load->model("math");

		// echo " ";
		// $data['addTotal']=$this->math->add($data['var1'],$data['var2']);
		// $data['subTotal']=$this->math->sub($data['var1'],$data['var2']);
		// // echo $this->math->add($data['var1'],$data['var2']);
		// // echo $this->math->sub($data['var1'],$data['var2']);
		// $this->load->view("home",$data);
		// // echo $this->math->add(3,1);
	}
	public function About(){
	$data['titel']="About";
		$this->load->view("About",$data);
	}

	public function Add(){
		$data['sum']="10";
		$data['one']="0";
		$this->load->model("mathtest");
		$data['sumTotal']=$this->mathtest->add($data['sum'],$data['one']);
		
		$this->load->view("addTotal",$data);
	}


	function getvalues(){
		$this->load->model("get_db");
		echo "select ok";

		$data['results']=$this->get_db->getAll();

		$this->load->view("view_db" , $data);
	}



	// insert data ->array
	function insertValues(){
		// $this->load->model("get_db");
		$newRow=array(
				array("name" => "sue"),
				array("name" => "josn")
				);
		// print_r($newRow);
		$this->message_db->insert2($newRow);
		echo "it has been added";
	}
	function updataValues(){
		$this->load->model("get_db");
		$newRow = array(
		array("id"=>"3","name"=>"marcus"),
		array("id"=>"4","name"=>"bill")

			);
		$this->get_db->update2($newRow);
		echo "it has been updata";
	}

	function deleteValues(){
		$this->load->model("get_db");

		$oldRow =array("id"=>"19");

		$this->get_db->delete1($oldRow);
		echo "it has been delete";
	}

	function emtpyTable(){
		$this->load->model("get_db");
		$oldRow = "test";
		$this->get_db->empty1($oldRow);
		echo "emptied";
	}
}

	

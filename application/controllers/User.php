<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	function __construct() {
	    parent::__construct();
	    $this->load->model('user_model');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
	}

	public function registration(){
		$this->load->view('User/registration');
	}

	public function login(){
		$this->load->view('User/login');
	}


	public function submit_login(){
		$this->load->view('User/registration');
	}

	public function submit_registration(){
		$data = $_REQUEST;
	}

	public function home(){
		$this->load->view('User/home');
	}


	public function submit_home(){
		$this->load->view('User/home');
	}
	public function forgotpassword(){
		$this->load->view('User/forgotpassword');
	}


	public function submit_forgotpassword(){
		$this->load->view('User/forgotpassword');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
}

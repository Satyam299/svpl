<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'SVPL | Home';
		$this->load->view('home',$data);
	}
}

<?php

class register extends CI_Controller{

	
	public function index(){
		$this->load->view('public/signup');
	}

	public function add_user(){
		$this->load->library('encryption');
		$password = $this->input->post('password');
		$encrypted = $this->encryption->encrypt($password);

		$data = array(
			'fullname' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'password' => $encrypted
		);

		$this->load->model('articlesmodel', 'articles');
		$this->articles->add_user('users', $data);
		//$this->load->view('public/admin_login');	
		return redirect(base_url());
	}

	public function test(){		
		//echo $key = $this->input->post('password')."</br>";	
		$this->load->library('encryption');
		$string = "this is my test encryption";
		$encrypted = $this->encryption->encrypt($string)."</br>";
		$encrypted = "769705f4e4973f653337524d22c77902ce05468375fb5b78130a524c6abae611ce8ee1cf9a6767daea50b85915f65b9ae65c33493fefacc1506a4719b998a99f+VT6ol0Sae1XrDwGdfkCwGszDpHaRHu3c6umZMKt6uDNEVFFRvCRb33FeBP+TbSS";
		echo strlen($encrypted)."</br>";
		echo $this->encryption->decrypt($encrypted);
		
	}

}
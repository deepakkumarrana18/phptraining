
<?php 

class Login extends My_Controller{

	public function index(){
			if($this->session->userdata('user_id'))
				return redirect('admin/dashboard');			
			$this->load->view('public/admin_login');
		}

	public function admin_login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User Name','required|trim');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('loginmodel');
			$row = $this->loginmodel->login_valid($username);			
			$this->load->library('encryption');
			$pwd = $this->encryption->decrypt($row->password);
			if($row->username == $username && $pwd == $password){
				$this->load->library('session'); //Session Loaded in autoload file 
				$this->session->set_userdata('user_id',$row->id);
				return redirect('admin/dashboard');
				//Login Success!
			}else{
				$this->session->set_flashdata('error','Invalid Username / Password');
				$this->load->view('public/admin_login');
				//Login Failed!
			}
		}else{
			$this->load->view('public/admin_login');			

		}
	}

	public function logout(){
		$this->session->unset_userdata('user_id');
		return redirect('user');
	}

	
}
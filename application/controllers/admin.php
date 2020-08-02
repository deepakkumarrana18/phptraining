<?php

	class Admin extends My_Controller{

		public function __construct(){
			parent::__construct();
			if(! $this->session->userdata('user_id'))
				return redirect('login');			
			$this->load->model('articlesmodel','articles');
		}

		public function dashboard(){
			$this->load->library('pagination');			
			$config = [
				'base_url'			=>	base_url('admin/dashboard'),
				'per_page'			=>	5, 
				'total_rows'		=>	$this->articles->num_rows(),	
				'full_tag_open'		=>	'<ul class="pagination pagination-sm">', 
				'full_tag_close'	=>	'</ul>',
				'first_tag_open'	=>	'<li>', 
				'first_tag_close'	=>	'</li>',
				'last_tag_open'		=>	'<li>', 
				'last_tag_close'	=>	'</li>',				
				'prev_tag_open'		=>	'<li>', 
				'prev_tag_close'	=>	'</li>',
				'next_tag_open'		=>	'<li>', 
				'next_tag_close'	=>	'</li>',
				'num_tag_open'		=>	'<li>', 
				'num_tag_close'		=>	'</li>',
				'cur_tag_open'		=>	'<li class="page-item active"><a class="page-link">', 
				'cur_tag_close'		=>	'</a></li>'

			];
			$this->pagination->initialize($config);	
			
			$articles = $this->articles->articles_list($config['per_page'], $this->uri->segment(3));

			$this->load->view('admin/dashboard',['articles'=>$articles]);
		}

		public function add_article(){
			$this->load->view('admin/add_article');			
			
		}

		public function store_article(){
			$this->load->helper('form');
			$config = [
				'upload_path' 	=> './uploads/',
				'allowed_types'	=>	'jpg|gif|png',
				//'max-size'		=>	50,				
			];
			$this->load->library('upload', $config);
			/*$this->load->library('form_validation');
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('body','Body','required');
			$this->form_validation->set_rules('userfile','Image','required');
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>'); $this->form_validation->run() && */

			if($this->upload->do_upload('userfile')){
				$post = $this->input->post();				
				unset($post['submit']);
				$data = $this->upload->data();
				$image_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
				//echo $image_path; exit;
				$post['image_path'] = $image_path;

				
				if($this->articles->insert_article($post)){
					$this->session->set_flashdata('feedback','Success! Article Added.');
					$this->session->set_flashdata('feedback_class', 'alert-success');
				}else{
					$this->session->set_flashdata('feedback','Failed! Article Not Added.');
					$this->session->set_flashdata('feedback_class', 'alert-warning');
				}
				return redirect('admin/dashboard');
			}else{
				$upload_error = $this->upload->display_errors();
				$this->load->view('admin/add_article', compact('upload_error'));
				//echo validation_errors();
			}
		}

		

		public function edit_article($article_id){			
			$article = $this->articles->find_article($article_id);			
			$this->load->view('admin/edit_article',['article'=>$article]);
		}

		public function update_article($article_id){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('body','Body','required');
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

			if($this->form_validation->run()){
				$post = $this->input->post();
				unset($post['submit']);				
				//print_r($article_id); print_r($post); exit;				
				if($this->articles->update_article($article_id, $post)){
					$this->session->set_flashdata('feedback','Success! Article Updated.');
					$this->session->set_flashdata('feedback_class', 'alert-success');
				}else{
					$this->session->set_flashdata('feedback','Failed! Article Not Updated.');
					$this->session->set_flashdata('feedback_class', 'alert-warning');
				}
				return redirect('admin/dashboard');
			}else{
				$this->load->view('admin/edit_article');
				//echo validation_errors();
			}
		}

		public function delete_article(){
			$article_id = $this->uri->segment(3);			
				if($this->articles->delete_article($article_id)){
					$this->session->set_flashdata('feedback','Success! Article Deleted.');
					$this->session->set_flashdata('feedback_class', 'alert-success');
				}else{
					$this->session->set_flashdata('feedback','Failed! Article Not Deleted.');
					$this->session->set_flashdata('feedback_class', 'alert-warning');
				}
				return redirect('admin/dashboard');
		}

	public function view(){
		$id = $this->uri->segment(3);		
		$article = $this->articles->view_article($id);
		$this->load->view('admin/view_article', compact('article'));
	}

		
}
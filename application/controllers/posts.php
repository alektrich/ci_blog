<?php

class Posts extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('post');
	}

	public function index($start=0) {
		$data['posts']=$this->post->get_posts(5, $start);
		$this->load->library('pagination');
		$config['base_url']=base_url().'posts/index/';
		$config['total_rows']=$this->post->get_posts_count();
		$config['per_page']=5;
		$this->pagination->initialize($config);
		$data['pages']=$this->pagination->create_links();	
		$this->load->view('header');
		$this->load->view('index_posts',$data);
		$this->load->view('footer');
	}

	public function post($postID) {
		$data['post']=$this->post->get_post($postID);
		$this->load->view('header');
		$this->load->view('post', $data);
		$this->load->view('footer');
	}

	public function new_post() {
		$user_type = $this->session->userdata('user_type');
		if($user_type !== 'admin' && $user_type !== 'author') {
			redirect(base_url().'users/login');
		}
		if($_POST) {
			$data = array(
				'title' => $_POST['title'],
				'post' => $_POST['post'],
				'active' => 1 
			);
			$this->post->insert_post($data);
			redirect(base_url().'posts/');
		} else {
			$this->load->view('header');
			$this->load->view('new_post');
			$this->load->view('footer');
		}
	}

	public function correct_permissions($required) {
		$user_type = $this->session->userdata('user_type');
		if($required=='user') {
			if($user_type) {
				return true;
			}
		} elseif($required=='author') {
			if($user_type=='author' || $user_type=='admin') {
				return true;
			}	
		} elseif($required=='admin') {
			if($user_type=='admin') {
				return true;
			}
		}
	}

	public function editpost($postID) {
		if(!$this->correct_permissions('author')) {
			redirect(base_url().'users/login');
		}
		$data['success']=0;
		if($_POST) {
			$data_post = array(
				'title' => $_POST['title'],
				'post' => $_POST['post'],
				'active' => 1 
			);
			$this->post->update_post($postID, $data_post);
			$data['success']=1;
		}
		$data['post']=$this->post->get_post($postID);
		$this->load->view('header');
		$this->load->view('edit_post', $data);
		$this->load->view('footer');
	}

	public function deletepost($postID) {
		$user_type = $this->session->userdata('user_type');
		if($user_type !== 'admin' && $user_type !== 'author') {
			redirect(base_url().'users/login');
		}
		$this->post->delete_post($postID);
		redirect(base_url().'posts/');
	}
}
?>

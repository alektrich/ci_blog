<?php

class Users extends CI_Controller {

	// Svuda ispred "function" mora imaš da li je private ili public. Neka
	// za sada sve budu public
	// 
	// umesto $_POST, koristi input biblioteku CI-a:
	// http://ellislab.com/codeigniter/user-guide/libraries/input.html
	// 
	
	
	// Ovo ti je konstruktor, on se uvek automatski poziva pre poziva bilo
	// koje od f-ja u ovoj klasi. U njega meteš sve ono što uvek oćeš da ti 
	// poziva. Recimo:
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		echo "Ovaj string će uvek da ti se ispisuje";
	}

	function login() {
		$data['error'] = 0;
		if($_POST) {
			$this->load->model('user');
			$username = $this->input->post('username', true);
			$password = $this->input->post('password', true);
			$type = $this->input->post('user_type', true);
			$user = $this->user->login($username, $password, $type);
			if(!$user) {
				$data['error'] = 1;
			} else {
				$this->session->set_userdata('userID', $user['userID']);
				$this->session->set_userdata('user_type', $user['user_type']);
				redirect(base_url().'posts');
			}
		}
		$this->load->view('header');
		$this->load->view('login', $data);
		$this->load->view('footer');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url().'posts');
	}

	function register() {
		// Ovo ispod sam ti ja dodao
		$data = null;
		if($this->input->post()) {

			$config = array(
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'trim|required|min_length[3]|is_unique[users.username]'
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required|min_length[5]'
				),
				array(
					'field' => 'password2',
					'label' => 'Password Confirmed',
					'rules' => 'trim|required|min_length[5]|matches[password]'
				),
				array(
					'field' => 'user_type',
					'label' => 'User Type',
					'rules' => 'required'
				),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'trim|required|is_unique[users.email]|valid_email'
				)
			);
			
			$this->form_validation->set_rules($config);
			if($this->form_validation->run() == FALSE) {
				$data['errors'] = validation_errors();
			} else {

				$data = array(
					'username' => $_POST['username'],
					'password' => $_POST['password'],
					'user_type'	=> $_POST['user_type']
				);
				$this->load->model('user');
				$userid=$this->user->create_user($data);
				$this->session->set_userdata('userID', $userid);
				$this->session->set_userdata('user_type', $_POST['user_type']);
				redirect(base_url().'posts');
			}

		}	
		$this->load->view('header');
		$this->load->view('register_user', $data);
		$this->load->view('footer');		
	}
}

?>
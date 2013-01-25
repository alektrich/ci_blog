<?php

class Emails extends CI_Controller {

	public function email() {
		$this->load->model('user');
		$emails = $this->user->get_emails();
		$this->load->library('email');
		$config['mailtype']='html';
		$this->email->initialize($config);
		foreach($emails as $row) {
			if($row['email']) {
				$this->email->from('alektrich@gmail.com', 'Aleksandar Trickovic');
				$this->email->to($row['email']);
				$this->email->subject('Test email');
				$this->email->message('Ovo je probni email koji se salje svim userima');
				$this->email->send();
				$this->email->clear();
			}
		}
	}
}

?>
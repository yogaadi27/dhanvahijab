<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{	
		$data['judul'] = 'Transaction';
		$data['title'] = 'Transaction';

		$this->template->load('v_transaction',$data);
	}

}

/* End of file Transaction.php */
/* Location: ./application/controllers/Transaction.php */

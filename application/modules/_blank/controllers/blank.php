<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{	
		$data['judul'] = 'Product';
		$data['title'] = 'Product';
	
		
		$this->template->load('product',$data);
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */

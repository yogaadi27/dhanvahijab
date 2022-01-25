<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	private $_table='product';
	private $_key='id_product';

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Model_product', 'm_product');

	}

	public function index()
	{	
		$data['judul'] = 'Product';
		$data['title'] = 'Product';
	
		$this->template->load('v_product',$data);
	}

	public function ajax_list_produk()
    {
          if ($this->input->is_ajax_request()) {
                # code...
                $status='';
                $list = $this->m_product->get_datatables();
                $data = array();
                $no = $_POST['start'];
                foreach ($list as $l) {
                    $no++;
  
                    $row = array();
                    // $row[] = $no;
					$action =  $l->is_active == 1 ? '<a href="javascript:void(0);" class="btn btn-danger btn-sm" onclick="delete_product('.$l->id_product.')" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</a>' : '<a href="javascript:void(0);" class="btn btn-primary btn-sm" onclick="restore_product('.$l->id_product.')" type="button" data-original-title="btn btn-danger btn-xs" title="">Restore</a>';
                    $row[] = '<img src="'.base_url('/uploads/product/'.$l->foto).'" width="64" height="64" alt="">';
                    $row[] = '<h6>'.$l->product_name.'</h6><span>'.$l->product_description.'</span>';
                    $row[] = number_format($l->stock,0);
                    $row[] = number_format($l->cost,0);
                    $row[] = $l->is_active == 1 ? '<span class="badge badge-primary">aktif</span>' : '<span class="badge badge-danger">nonaktif</span>';
                    $row[] = '<a href="javascript:void(0);" class="btn btn-success btn-sm" onclick="edit_product('.$l->id_product.')" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</a>
                			'.$action;	 
                    // $row[] = '<img src="'.base_url().'/assets/foto_gtk/'.$l->foto.'" width="50" height="50" alt="1">';
                    $data[] = $row;
                }
    
                $output = array(
                                "draw" => $_POST['draw'],
                                "recordsTotal" => $this->m_product->count_all(),
                                "recordsFiltered" => $this->m_product->count_filtered(),
                                "data" => $data,
                        );
                // output to json format
                echo json_encode($output);
          }else{
              show_404();
          }
            
    }

    public function add_product($var = null)
	{
		if ($this->input->is_ajax_request()) {
			
        $config['upload_path']          = './uploads/product/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 400;
		$config['encrypt_name']         = TRUE;
		// $config['max_width']            = 600;
		// $config['max_height']           = 600;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    // print_r($error);
                    // $this->session->set_flashdata('error',err_msg('File tidak terupload'));
                    // redirect('makanan/tambah','refresh');
                    echo 'gagal';
                    // $this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $data2 = array(
                        'product_name' => $this->input->post('product_name'),
                        'product_description' => $this->input->post('product_description'),
                        'stock' => $this->input->post('stock'),
                        'cost' => $this->input->post('cost'),
                        'foto' => $data['upload_data']['file_name'],
                    );
                    $this->db->insert('product', $data2);
                    // redirect('makanan','refresh');
                    // print_r($data2);
                    // $this->load->view('upload_success', $data);
					$return = array(
                        'status' => 200,
						'msg' => 'success'
                    );
                    echo json_encode($return);
            }
		}else{
			show_404();
		}
    }

	public function ajax_get_product($var = null)
	{
	  if ($this->input->is_ajax_request()) {
		  $query = $this->Model_app->selectData($this->_table,$this->_key,$this->input->post('id',TRUE))->row();
		  echo json_encode($query, JSON_PRETTY_PRINT);
	  }else{
		  show_404();
	  }
	}

	public function update_product()
	{
		if ($this->input->is_ajax_request()) {
			$id =$this->input->post('id_product', TRUE);
			$data = array(
				'product_name' => $this->input->post('product_name'),
				'product_description' => $this->input->post('product_description'),
				'stock' => $this->input->post('stock'),
				'cost' => $this->input->post('cost'),
			);
			print_r($data);
			$q=$this->Model_app->updateData($this->_table,$data,$this->_key,$id);
			if ($q==TRUE) {
				$return = array(
					'status' => 200,
					'msg' => 'success'
				);
			}else {
				$return = array(
					'status' => 500,
					'msg' => 'error'
				);
			}
			echo json_encode($return);

		}
	}

	public function delete_product()
	{
		if ($this->input->is_ajax_request()) {
			$id =$this->input->post('id', TRUE);
			$q=$this->Model_app->set_status('delete',$this->_table,'is_active',$this->_key,$id);
			if ($q==TRUE) {
				$return = array(
					'status' => 200,
					'msg' => 'success'
				);
			}else {
				$return = array(
					'status' => 500,
					'msg' => 'error'
				);
			}
			echo json_encode($return);

		}
	}

	public function restore_product()
	{
		if ($this->input->is_ajax_request()) {
			$id =$this->input->post('id', TRUE);
			$q=$this->Model_app->set_status('restore',$this->_table,'is_active',$this->_key,$id);
			if ($q==TRUE) {
				$return = array(
					'status' => 200,
					'msg' => 'success'
				);
			}else {
				$return = array(
					'status' => 500,
					'msg' => 'error'
				);
			}
			echo json_encode($return);

		}
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */

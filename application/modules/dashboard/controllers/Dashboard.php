<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{	
		$data['judul'] = 'Dashboard';
		$data['title'] = 'Dashboard';
		// print_r($this->session->
		// print_r($this->session->userdata('logged_in'));
		
		$this->template->load('dashboard',$data);
	}

	public function update_setting($var = null)
    {
        if ($this->input->is_ajax_request()) {
			
			$data = array(
				'tgl_pengumuman' => $this->input->post('tgl_pengumuman'),
				'tampilkan_hasil' => $this->input->post('tampilkan_nilai'),
				'is_closed' => $this->input->post('is_closed')
			);
		
			$this->db->where('is_active',TRUE);
			$q=$this->db->update('setting', $data);
			if ($q) {
				echo'true';
			} else {
				echo'false';
			}
        }else{
            show_404();
        }
    }
	
	public function statistik($var = null)
    {
        if ($this->input->is_ajax_request()) {
			$q = $this->db->get_where('setting', array('is_active' => 1), 1)->row(); 
			$tamp_nilai = $q->tampilkan_hasil == 1 ? 'Ditampilkan' : 'Tidak ditampilkan';
			$status_sistem = $q->is_closed == 1 ? 'Ditutup' : 'Dibuka';      

			$html='<div class="col-md-4 col-sm-6 col-12">
								<div class="info-box">
								<span class="info-box-icon bg-navy"><i class="far fa-envelope"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Tgl Pengumuman</span>
									<span class="info-box-number">'.$q->tgl_pengumuman.'</span>
								</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-12">
								<div class="info-box">
								<span class="info-box-icon bg-maroon"><i class="far fa-flag"></i></span>
						
								<div class="info-box-content">
									<span class="info-box-text">Tampilkan Nilai</span>
									<span class="info-box-number">'.$tamp_nilai.'</span>
								</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-12">
								<div class="info-box">
								<span class="info-box-icon bg-indigo"><i class="far fa-copy"></i></span>
						
								<div class="info-box-content">
									<span class="info-box-text">Status Sistem</span>
									<span class="info-box-number">'.$status_sistem.'</span>
								</div>
								</div>
							</div>';
			echo $html;
        }else{
            show_404();
        }
	}



}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_auth', 'm_auth');
      
    }

    private $skeleton = array(
		//form,database,label,validatioon
		array('username','username','Email Aktif','trim|required'),
		array('password','password','password','trim|required'),
		array('fullname','fullname','Nama UMKM','trim|max_length[255]'),
        array('alamat','alamat','alamat','trim|required'),
        array('no_tlp','no_tlp','no_tlp','trim|required'),
	);

    public function index()
    {
      
   
        if ($this->input->post()) {
               
            // print_r($this->input->post()); 
            // die(); 
            // validasi form untuk captcha
            //  $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_valid_captcha');

             $this->form_validation->set_rules('username', 'Username', 'required|trim');
             $this->form_validation->set_rules('password', 'Password', 'required|trim');
             
             $this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');
             
             if ($this->form_validation->run() == TRUE)
             {
                 $cek=$this->_cek_login($this->input->post('username', TRUE),$this->input->post('password', TRUE));
                //  print_r($cek);
                //  die('true');
                //  if ($cek==TRUE) {
                //      // $this->session->set_flashdata('pesan',notif_err('Username atau Password Salah...!'));
                //      // $data['tes']='Login berhasil';
                // //    alihkan_login();
                //     // $this->session->set_flashdata('error',succ_msg('Selamat Datang, '.$this->session->userdata('logged_in')['fullname']));
                //     redirect('dashboard','refresh');

                //  }else{
                //     $this->session->set_flashdata('error',err_msg('Username atau Password Salah !'));
                // }
                //  die('false');
             }else{
                $this->session->set_flashdata('error',err_msg('Captcha Tidak Valid !'));
             }
             
        }

        $data['title']='Authentication';
        // $data['lapangan_usaha'] = $this->db->get_where('lapangan_usaha', array('is_active' => 1));
        // $data['captcha'] = $this->_set_captcha();
        // $this->template->load('login',$data);
        $this->load->view('login2',$data);
    }

    public function cek_login(Type $var = null)
    {
        if ($this->input->is_ajax_request()) {
                // die();
                $cek=$this->m_auth->cek_login($this->input->post('username', TRUE),$this->input->post('password', TRUE));
             
                $status='error';

                 if ($cek==TRUE) {
                    foreach ($cek as $row)
                    {
                        $sess_array=array(
                                    'id_user'=>$row->id_user,
									'role'=>$row->role,
                                    'fullname'=>$row->fullname,
                                    'username'=>$row->username,
                                    'no_tlp'=>$row->no_tlp,
                                    'alamat'=>$row->alamat,
                                    'foto'=>$row->foto,
                            );
                         $this->session->set_userdata('logged_in',$sess_array);
                    }
                    $status='success';
                 }
				//  print_r($this->session->userdata('logged_in'));
                 echo $status;

        }else{
            show_404();
        }
    }

    public function register ($var = null)
    {
        if ($this->input->is_ajax_request()) {
            // print_r($this->input->post());
            $form_unuse   = array();
            $user_data 	  = array();

            foreach ($this->skeleton as $key => $user) {
                // if (!in_array($user[0], $form_unuse)) {
                // 	$this->form_validation->set_rules($user[0], $user[2],$user[3]);
                    if ($user[1]!=NULL) {
                        $user_data[$user[1]] = $this->input->post($user[0],TRUE);
                    }
                //}
            }
            $user_data['password'] = getHashedPassword($this->input->post('password'));
            $user_data['role_id'] = '2';
            $user_data['token'] = $this->_getToken();
            // print_r($user_data);
            // die();
            $query=$this->Model_app->insert('users',$user_data);
            // echo getHashedPassword($user_data['token']);
            $uid = $this->db->insert_id();

            $status='error';
        	if ($query) {
                $this->_send_mail($uid,$user_data['token'],$user_data['username']);
                    // insert_log('buyer_create',sess_id());
                    // echo $kode_token;
                    // $this->_send_mail($kode_token);
                $status='success';
                }
            }
            echo $status;
        
    }

    private function _getToken()
	{
		$seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                     .'0123456789'); // and any other characters
		shuffle($seed); // probably optional since array_is randomized; this may be redundant
		$rand = '';
		foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];
		return $rand;
	}

	private function _send_mail($uid='',$token='',$email='') { 

		$from_email = "operatorbos.ganteng@gmail.com"; 
		$to_email = $email; 

		$config = Array(
			   'protocol' => 'smtp',
			   'smtp_host' => 'ssl://smtp.googlemail.com',
			   'smtp_port' => 465,
			   'smtp_user' => $from_email,
			   'smtp_pass' => 'obkuncsreafxztgh',
			   'mailtype'  => 'html', 
			   'charset'   => 'iso-8859-1'
	   );

		   $this->load->library('email', $config);
		   $this->email->set_newline("\r\n");   

		$this->email->from($from_email, 'Aplikasi EOQ UMKM Kab. Nganjuk'); 
		$this->email->to($to_email);
		$this->email->subject('Aktivasi AKUN UMKM Kab. Nganjuk'); 
		$this->email->message('<p>Klik tombol berikut untuk aktivasi akun : <a href="'.site_url('auth/verifikasi?uid='.$uid.'&token='.getHashedPassword($token)).'" class="btn btn-primary"> Verifikasi Akun</a></p><p>&nbsp;</p>Atau Link Aktivasi Akun Anda jika tombol tidak bisa : '.site_url('auth/verifikasi?uid='.$uid.'&token='.getHashedPassword($token))); 
		$this->email->send();
		//Send mail 
		// if($this->email->send()){
		 return true;
		// } 
	}

    public function verifikasi($id = null)
    {
        $id = $this->input->get('uid');
        $token = $this->input->get('token');

        $r=$this->m_auth->cek_verifikasi($id,$token);
        if ($r==TRUE) {
                foreach ($r as $row)
                {
                    $sess_array=array(
                                'id_user'=>$row->id_user,
                                'fullname'=>$row->fullname,
                                'username'=>$row->username,
                                'alamat'=>$row->alamat,
                                'lapangan_usaha'=>$row->nama_lap_usaha,
                                'foto'=>$row->foto,
                        );
                     $this->session->set_userdata('logged_in',$sess_array);
                }
                // print_r($r);
                redirect('dashboard','refresh');
        }else{
            // echo "gagal";
            return FALSE;
        }
    }

    private function _set_captcha()
    {
        $this->load->helper('string');
        $vals = array(
            'font_path'     => './assets/font/Candy Randy.ttf',
            'img_path' => './assets/captcha/',
            'img_url' => base_url().'assets/captcha/',
            'img_width' => '250',
            'img_height' => 40,
            'font_size'=>20,
            'expiration' => 7200,
            'word'  =>random_string('numeric', 6)
        );
        
        $cap = create_captcha($vals);
        
        $data = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );
        
        $query = $this->db->insert_string('captcha', $data);
        $this->db->query($query);
        return $cap;
    }

    function valid_captcha($str)
    {
        // First, delete old captchas
        $expiration = time()-7200; // Two hour limit
        $this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);
        
        // Then see if a captcha exists:
        $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
        $binds = array($str, $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();

        if ($row->count == 0)
        {
            $this->form_validation->set_message('valid_captcha', 'Capctha tidak valid');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect(site_url('auth'));
    }

}

/* End of file  */
/* Location: ./application/controllers/ */

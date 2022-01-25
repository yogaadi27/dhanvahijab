<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_auth extends CI_Model {

    public $variable;

    public function __construct()
    {
        parent::__construct();
        
    }

    public function cek_login($us,$pw)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('role_user','role_user.id_role=users.role_id');
        $this->db->where('username',$us);
        $this->db->where('users.is_active',1);
        $this->db->limit(1);
        $user = $this->db->get()->result();
        // $query = $this->db->get_where('admin', array('username' => $username),1);
        // // $user=$query->result();
        if(!empty($user)){
            if(password_verify($pw, $user[0]->password)==1){
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
        // return password_verify($pw,$password=$user[0]->password);
    }

    public function cek_verifikasi($id,$token)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('lapangan_usaha','lapangan_usaha.id_lapangan_usaha=users.lapangan_usaha_id');
        $this->db->where('id_user',$id);
        // $this->db->where('is_active',1);
        $this->db->limit(1);
        $user = $this->db->get()->result();
        // $query = $this->db->get_where('admin', array('username' => $username),1);
        // // $user=$query->result();
        if(!empty($user)){
            if(password_verify($user[0]->token,$token)==1){
                $this->db->set('is_active',TRUE); //value that used to update column  
                $this->db->where('id_user',$user[0]->id_user); //which row want to upgrade  
                $this->db->update('users');
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
        // return password_verify($pw,$password=$user[0]->password);
    }

}

/* End of file  */
/* Location: ./application/models/ */

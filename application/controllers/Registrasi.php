<?php
class Registrasi extends CI_Controller{

	function __construct(){
		parent::__construct(); 
	} 
	function index(){  
		if ( $this->session->userdata('login') == 1) { 
			$data['title'] = 'Registration';
			$data['registration_active'] = 'class="active"';
 
			$data['power'] = $this->db->query("SELECT * FROM t_registrasi ORDER BY registrasi_id DESC LIMIT 1")->row_array();

			$data['data'] = $this->db->query("SELECT * FROM t_user WHERE user_hapus = 0 AND user_level = 2 ORDER BY user_tanggal DESC LIMIT 10")->result_array();


			//ubah format tanggal
			$date=date_create($data['power']['registrasi_start']);	
			$data['tanggal'] = date_format($date,"d M Y H:i:s");	

		    $this->load->view('v_template_admin/admin_header',$data);
		    $this->load->view('registrasi/index');
		    $this->load->view('v_template_admin/admin_footer');    
 
		}
		else{
			redirect(base_url('login'));
		}
	}
	function power_on(){
		$id = $this->session->userdata('user_id');
		$set = array(
						'registrasi_user' => $id,
						'registrasi_start' => date('Y-m-d H:i:s'),
						'registrasi_power' => 1,
					);
		$this->db->set($set);
		if ($this->db->insert('t_registrasi')) {
			$this->session->set_flashdata('sukses','Registrasi berhasil di aktifkan');
		} else {
			$this->session->set_flashdata('gagal','Registrasi gagal di aktifkan');
		}
		
		redirect(base_url('registrasi'));

	} 
	function power_off($id){
		//end tanggal
		$this->db->set('registrasi_end',date('Y-m-d h:i:s'));
		$this->db->where('registrasi_id',$id);
		if ($this->db->update('t_registrasi')) {

			//power off
			$this->db->set('registrasi_power',0);
			if ($this->db->update('t_registrasi')) {
				$this->session->set_flashdata('sukses','Registrasi berhasil di nonaktifkan');
			} else {
				$this->session->set_flashdata('gagal','Registrasi gagal di nonaktifkan');
			}

		} else {
			$this->session->set_flashdata('gagal','Registrasi gagal di nonaktifkan');
		}
		
		redirect(base_url('registrasi'));
	}
	
}
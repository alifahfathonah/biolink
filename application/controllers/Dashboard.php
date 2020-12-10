<?php
class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
	} 
	function index(){
		if ( $this->session->userdata('login') == 1) {
			$data['title'] = 'Dashboard';
			$data['dashboard_active'] = 'class="active"';

			//akumulasi
			$data['pelatih_num'] = $this->db->query("SELECT * FROM t_user WHERE user_level = 2 AND user_hapus = 0")->num_rows();
			$data['pemain_num'] = $this->db->query("SELECT * FROM t_user WHERE user_level = 3 AND user_hapus = 0")->num_rows(); 
			$data['sparing_num'] = $this->db->query("SELECT * FROM t_sparing WHERE sparing_hapus = 0")->num_rows();
			
			$data['team_num'] = $this->db->query("SELECT * FROM t_team WHERE team_hapus = 0")->num_rows();

		    $this->load->view('v_template_admin/admin_header',$data);
		    $this->load->view('dashboard/dashboard');
		    $this->load->view('v_template_admin/admin_footer');
 
		}
		else{
			redirect(base_url('login'));
		}
	} 
}
<?php
class Iklan extends CI_Controller{

	function __construct(){
		parent::__construct();
	} 
	function index(){
		if ( $this->session->userdata('login') == 1) {
			$data['title'] = 'Iklan';
			$data['iklan_active'] = 'class="active"';

			$data['data'] = $this->db->query("SELECT * FROM t_iklan")->row_array();

		    $this->load->view('v_template_admin/admin_header',$data);
		    $this->load->view('iklan/index');
		    $this->load->view('v_template_admin/admin_footer');
 			
		}
		else{
			redirect(base_url('login'));
		}
	} 
	function update($id){
		$set = array(
						'iklan_kiri' => $_POST['iklan_kiri'],
						'iklan_kanan' => $_POST['iklan_kanan'],
						'iklan_atas' => $_POST['iklan_atas'],
						'iklan_bawah' => $_POST['iklan_bawah'],
						'iklan_tanggal' => date('Y-m-d'), 
					);

		$this->db->where('iklan_id',$id);
		$this->db->set($set);
		if ($this->db->update('t_iklan')) {
			$this->session->set_flashdata('sukses','Data berhasil di simpan');	
        }else{
        	$this->session->set_flashdata('gagal','Data gagal di simpan');
        }

        redirect(base_url('iklan'));
		
	}
}
<?php
class Setting extends CI_Controller{

	function __construct(){
		parent::__construct();
	} 
	function index(){
		if ( $this->session->userdata('login') == 1) { 
			$data['title'] = 'Setting';
			$data['setting_active'] = 'class="active"';
			$email = $this->session->userdata('user_email');

			$data['preset_data'] = $this->db->query("SELECT * FROM t_preset WHERE preset_hapus = 0")->result_array();

			$data['data'] = $this->db->query("SELECT * FROM t_account WHERE account_email = '$email'")->row_array();

		    $this->load->view('v_template_admin/admin_header',$data);
		    $this->load->view('setting/index');
		    $this->load->view('v_template_admin/admin_footer');
 
		} 
		else{
			redirect(base_url('login'));
		}
	}
	function save(){ 
		$email = $this->session->userdata('user_email');

		if (@$_FILES['account_bg']['name']) {
			
		$config = array(
		  'upload_path' 	=> './assets/images/bg',
		  'allowed_types' 	=> "jpg|png|jpeg",
		  'overwrite' 		=> TRUE,
		  'max_size' 		=> "12048000",
		  );

			//upload foto
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('account_bg')) {
				//replace Karakter name foto
				$name_foto = $_FILES['account_bg']['name'];
				$char = array('!', '&', '?', '/', '/\/', ':', ';', '#', '<', '>', '=', '^', '@', '~', '`', '{', '}', ' ');
		        $foto = str_replace($char, '_', $name_foto);
		        $char1 = array('[',']');
		        $foto1 = str_replace($char1, '', $foto);

		        //save account
				$setaccount = array(
								'account_title' => $_POST['account_title'],
								'account_deskripsi' => $_POST['account_deskripsi'],
								'account_teks' => $_POST['account_teks'],
								'account_bg_type' => $_POST['account_bg_type'],
								'account_bg' => $foto1,
								'account_twitter' => $_POST['account_twitter'],
								'account_instagram' => $_POST['account_instagram'],
								'account_facebook' => $_POST['account_facebook'],
								'account_youtube' => $_POST['account_youtube'],
								'account_branding_status' => $_POST['account_branding_status'],
								'account_branding_name' => $_POST['account_branding_name'],
								'account_branding_analytics' => $_POST['account_branding_analytics'],
								'account_branding_url' => $_POST['account_branding_url'],
							);
				$this->db->where('account_email',$email);
				$this->db->set($setaccount);
				$this->db->update('t_account');

			} else {
				$this->session->set_flashdata('gagal','Data gagal di simpan');
				redirect(base_url('setting'));
			}				

		} else {
			//save account
			$setaccount = array(
							'account_title' => $_POST['account_title'],
							'account_deskripsi' => $_POST['account_deskripsi'],
							'account_teks' => $_POST['account_teks'],
							'account_bg_type' => $_POST['account_bg_type'],
							'account_preset' => $_POST['account_preset'],
							'account_twitter' => $_POST['account_twitter'],
							'account_instagram' => $_POST['account_instagram'],
							'account_facebook' => $_POST['account_facebook'],
							'account_youtube' => $_POST['account_youtube'],
							'account_branding_status' => $_POST['account_branding_status'],
							'account_branding_name' => $_POST['account_branding_name'],
							'account_branding_analytics' => $_POST['account_branding_analytics'],
							'account_branding_url' => $_POST['account_branding_url'],
						);
			$this->db->where('account_email',$email);
			$this->db->set($setaccount);
			$this->db->update('t_account');
		}
		
		$this->session->set_flashdata('sukses','Data berhasil di simpan');
		redirect(base_url('setting'));
	} 
}
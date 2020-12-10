<?php
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
	} 
	function index(){
		//menu login 
		$this->load->view('login');
	}  
	function auth(){ 
		$email = $_POST['user_email'];   
		$pass = md5($_POST['user_password']); 
		$cek_login = $this->db->query("SELECT * FROM t_user WHERE user_email = '$email' AND user_password = '$pass' AND user_hapus = 0")->row_array();
		if (@count($cek_login['user_nama']) > 0) {
			//lmembuat sesi | login sukses
			$this->session->set_userdata('user_foto',$cek_login['user_foto']);
			$this->session->set_userdata('user_id',$cek_login['user_id']);
			$this->session->set_userdata('user_nama',$cek_login['user_nama']);
			$this->session->set_userdata('user_level',$cek_login['user_level']);
			$this->session->set_userdata('user_email',$cek_login['user_email']);
			$this->session->set_userdata('login','1');

			$this->session->set_flashdata('sukses','Login sukses');
 
			if ($this->session->userdata('user_level') == 1) {
				//admin
				redirect(base_url('registrasi'));
			} else {
				//user
				redirect(base_url('setting'));
			}	
			
		}else{
			//gagal login
			$this->session->set_flashdata('gagal','Email & password salah');
			redirect(base_url('login'));
		}
	}
	function register(){
		$cek = $this->db->query("SELECT * FROM t_registrasi WHERE registrasi_power = 1")->num_rows();
		if ($cek > 0) {
			$data['preset_data'] = $this->db->query("SELECT * FROM t_preset WHERE preset_hapus = 0")->result_array();
			$this->load->view('signup',$data);
		} else {
			//gagal login
			$this->session->set_flashdata('gagal','Sign up masih belum di mulai');
			redirect(base_url('login'));
		}
	}
	function cekemail(){
		$email = $_POST['val'];

		//cek
		$db = $this->db->query("SELECT * FROM t_user WHERE user_hapus = 0 AND user_email = '$email'")->num_rows();
		if ($db > 0) {
			echo json_encode('1');
		} else {
			echo json_encode('0');
		}
	}
	function cekurl(){
		$url = $_POST['val'];

		//cek
		$db = $this->db->query("SELECT * FROM t_account WHERE account_url = '$url'")->num_rows();
		if ($db > 0) {
			echo json_encode('1');
		} else {
			echo json_encode('0');
		}
	}
	function add(){ 
		//save user
		if (@$_FILES['user_foto']['name']) {

		  //dengan foto

		  $config = array(
		  'upload_path' 	=> './assets/images/user',
		  'allowed_types' 	=> "jpg|png|jpeg",
		  'overwrite' 		=> TRUE,
		  'max_size' 		=> "12048000",
		  );

			//upload foto
			$this->load->library('upload', $config);
			$this->upload->do_upload('user_foto');

			//replace Karakter name foto
			$name_foto = $_FILES['user_foto']['name'];
			$char = array('!', '&', '?', '/', '/\/', ':', ';', '#', '<', '>', '=', '^', '@', '~', '`', '{', '}', ' ');
	        $foto = str_replace($char, '_', $name_foto);
	        $char1 = array('[',']');
	        $foto1 = str_replace($char1, '', $foto);

        	$setuser = array(
								'user_nama' => $_POST['user_nama'],
								'user_email' => $_POST['user_email'],
								'user_password' => $_POST['user_password'],
								'user_level' => 2,
								'user_foto' => $foto1,
								'user_tanggal' => date('Y-m-d'), 
							);
			$this->db->set($setuser);
			$this->db->insert('t_user');

			$sukses = 1;

		}else{

			//tanpa foto

			$setuser = array(
								'user_nama' => $_POST['user_nama'],
								'user_email' => $_POST['user_email'],
								'user_password' => md5($_POST['user_password']),
								'user_level' => 2,
								'user_tanggal' => date('Y-m-d'), 
							);
			$this->db->set($setuser);
			$this->db->insert('t_user');	

			$sukses = 1;
		}

		if (@$sukses == 1) {

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
									'account_email' => $_POST['user_email'],
									'account_url' => $_POST['account_url'],
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

					$this->db->set($setaccount);
					$this->db->insert('t_account');

				} else {
					$this->session->set_flashdata('gagal','Data gagal di simpan');
					redirect(base_url('login'));
				}				

			} else {
				//save account
				$setaccount = array(
								'account_email' => $_POST['user_email'],
								'account_url' => $_POST['account_url'],
								'account_title' => $_POST['account_title'],
								'account_deskripsi' => $_POST['account_deskripsi'],
								'account_teks' => $_POST['account_teks'],
								'account_bg_type' => $_POST['account_bg_type'],
								'account_bg' => @$_POST['account_bg'],
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

				$this->db->set($setaccount);
				$this->db->insert('t_account');
			}
			
			
			//notifikasi
			$notif = array('notifikasi_isi' => 'Berhasil registrasi "'.$_POST['user_nama'].'"', 'notifikasi_tanggal' => date('Y-m-d'));
			$this->db->set($notif);
			$this->db->insert('t_notifikasi');

			$this->session->set_flashdata('sukses','Registrasi sukses silahkan login kembali');
			redirect(base_url('login'));
		}
	}
	function logout(){
		session_destroy();
		$this->session->set_flashdata('sukses','Logout berhasil');
		redirect(base_url('login'));
	}
}
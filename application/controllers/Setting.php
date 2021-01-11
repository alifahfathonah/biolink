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

			$id = $this->session->userdata('user_id');
			$data['sosmed_data'] = $this->db->query("SELECT * FROM t_sosmed WHERE sosmed_user = '$id' AND sosmed_hapus = 0")->result_array();

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

				$this->session->set_flashdata('sukses','Data berhasil di simpan');
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

			$this->session->set_flashdata('sukses','Data berhasil di simpan');
		}

		$jum = @$_POST['number'];

		if ($jum > 0) {

			for ($i=0; $i < $jum; $i++) { 


				$config = array(
				  'upload_path' 	=> './assets/images/sosmed',
				  'allowed_types' 	=> "jpg|png|jpeg",
				  'overwrite' 		=> TRUE,
				  'max_size' 		=> "12048000",
				  );

				//upload foto
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('sosmed_icon'.$i)) {

					//replace Karakter name foto
					$name_foto = @$_FILES['sosmed_icon'.$i]['name'];
					$char = array('!', '&', '?', '/', '/\/', ':', ';', '#', '<', '>', '=', '^', '@', '~', '`', '{', '}', ' ');
			        $foto = str_replace($char, '_', $name_foto);
			        $char1 = array('[',']');
			        $foto1 = str_replace($char1, '', $foto);

			        $set_sosmed = array(	
											'sosmed_user' => $this->session->userdata('user_id'),
											'sosmed_name' => @$_POST['sosmed_name'][$i],
											'sosmed_link' => @$_POST['sosmed_link'][$i],
											'sosmed_icon' => @$foto1,
											'sosmed_color' => @$_POST['sosmed_color'][$i],
											'sosmed_tanggal' => date('Y-m-d'), 
										);

					$this->db->set($set_sosmed);
					$this->db->insert('t_sosmed');

					$this->session->set_flashdata('sukses','Data berhasil di simpan');
			     }else{

			     	$this->session->set_flashdata('gagal','Format gambar tidak sesuai');
			     }
			}
		}

		redirect(base_url('setting'));
	}

	function sosmed_update(){
		$id = $_POST['sosmed_id'];

		if (@$_FILES['sosmed_icon']['name']) {
			//dengan foto

			$config = array(
			  'upload_path' 	=> './assets/images/sosmed',
			  'allowed_types' 	=> "jpg|png|jpeg",
			  'overwrite' 		=> TRUE,
			  'max_size' 		=> "12048000",
			  );

			//upload foto
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('sosmed_icon')) {

				//replace Karakter name foto
				$name_foto = @$_FILES['sosmed_icon']['name'];
				$char = array('!', '&', '?', '/', '/\/', ':', ';', '#', '<', '>', '=', '^', '@', '~', '`', '{', '}', ' ');
		        $foto = str_replace($char, '_', $name_foto);
		        $char1 = array('[',']');
		        $foto1 = str_replace($char1, '', $foto);

		        $set_sosmed = array(	
										'sosmed_name' => @$_POST['sosmed_name'],
										'sosmed_link' => @$_POST['sosmed_link'],
										'sosmed_icon' => @$foto1,
										'sosmed_color' => @$_POST['sosmed_color'], 
									);

		        $this->db->where('sosmed_id',$id);
				$this->db->set($set_sosmed);
				$this->db->update('t_sosmed');

				$this->session->set_flashdata('sukses','Data berhasil di simpan');
		     }else{

		     	$this->session->set_flashdata('gagal','Format gambar tidak sesuai');
		     }

		}else{
			//tanpa foto

			$set_sosmed = array(	
									'sosmed_name' => @$_POST['sosmed_name'],
									'sosmed_link' => @$_POST['sosmed_link'],
									'sosmed_color' => @$_POST['sosmed_color'], 
								);

	        $this->db->where('sosmed_id',$id);
			$this->db->set($set_sosmed);
			if ($this->db->update('t_sosmed')) {
				$this->session->set_flashdata('sukses','Data berhasil di simpan');
	     	}else{

	     		$this->session->set_flashdata('gagal','Data gagal di simpan');
	     	}
			
		}

		redirect(base_url('setting'));
	} 
	function sosmed_delete($id){
		$this->db->where('sosmed_id',$id);
		$this->db->set('sosmed_hapus',1);

		if ($this->db->update('t_sosmed')) {
			$this->session->set_flashdata('sukses','Data berhasil di hapus');
	     }else{

	     	$this->session->set_flashdata('gagal','Data gagal di hapus');
	     }
		redirect(base_url('setting'));
	}
	function getsosmed(){
		$id = $_POST['id'];

		$data = $this->db->query("SELECT * FROM t_sosmed WHERE sosmed_id = '$id' AND sosmed_hapus = 0")->result_array();

		echo json_encode($data);
	}
}
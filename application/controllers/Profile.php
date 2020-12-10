<?php
class Profile extends CI_Controller{

	function __construct(){
		parent::__construct();
	} 
	function index(){
		if ( $this->session->userdata('login') == 1) {
			$data['title'] = 'Profile';
			$data['profile_active'] = 'class="active"';

			$id = $this->session->userdata('user_id');
			$data['data'] = $this->db->query("SELECT * FROM t_user as a LEFT JOIN t_detail as b ON a.user_id = b.detail_user WHERE a.user_id = '$id'")->row_array();

			$data['preset_data'] = $this->db->query("SELECT * FROM t_preset WHERE preset_hapus = 0")->result_array();

		    $this->load->view('v_template_admin/admin_header',$data);
		    $this->load->view('profile/index');
		    $this->load->view('v_template_admin/admin_footer');
 
		}
		else{ 
			redirect(base_url('login')); 
		}
	} 
	function save_profile(){
		$id = $this->session->userdata('user_id');

		if (@$_FILES['user_foto']['name']) {
			//dengan foto

		  $config = array(
		  'upload_path' 	=> './assets/images/user',
		  'allowed_types' 	=> "gif|jpg|png|jpeg",
		  'overwrite' 		=> TRUE,
		  // 'max_size' 		=> "2048000",
		  // 'max_height' 		=> "10000",
		  // 'max_width' 		=> "20000"
		  );
 
			//upload foto
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('user_foto')) {
				
				//replace Karakter name foto
				$name_foto = $_FILES['user_foto']['name'];
				$char = array('!', '&', '?', '/', '/\/', ':', ';', '#', '<', '>', '=', '^', '@', '~', '`', '{', '}', ' ');
		        $foto = str_replace($char, '_', $name_foto);
		        $char1 = array('[',']');
		        $foto1 = str_replace($char1, '', $foto);

		        //update t_user
		        $set = array(
	        				'user_foto' => $foto1,
	        				'user_nama' => $_POST['user_nama'],
	        				'user_email' => $_POST['user_email'],
		        			);
		        $this->db->set($set);
		        $this->db->where('user_id',$id);
		        $this->db->update('t_user');

		        ////////////////////////// -- END USER -- ///////////////////////////////////////

		        //data detail
		        $detail = array(
		        				'detail_user' => $id,
		        				'detail_alamat' => $_POST['detail_alamat'],
		        				'detail_nohp' => $_POST['detail_nohp'],
		        				'detail_ktp' => $_POST['detail_ktp'],
		        				'detail_tanggal' => date('Y-m-d'),
		        				'detail_tempat_lahir' => $_POST['detail_tempat_lahir'],
		        				'detail_tanggal_lahir' => $_POST['detail_tanggal_lahir'],
		        				'detail_umur' => $_POST['detail_umur'],
			        			);

		        //update/insert t_detail
				$cek = $this->db->query("SELECT * FROM t_detail where detail_user = '$id'")->num_rows();
				if (@$cek > 0) {
					//edit
			        $this->db->set($detail);
			        $this->db->where('detail_user',$id);
			        $this->db->update('t_detail');
				} else {
					//baru
					$this->db->set($detail);
			        $this->db->insert('t_detail');
				}

				$this->session->set_flashdata('sukses','Data berhasil di perbaharui');

			} else {

				$this->session->set_flashdata('gagal','Foto gagal di upload');
			}

			
		} else {
			//update t_user
	        $set = array(
        				'user_nama' => $_POST['user_nama'],
        				'user_email' => $_POST['user_email'],
	        			);
	        $this->db->set($set);
	        $this->db->where('user_id',$id);
	        $this->db->update('t_user');

	        ////////////////////////// -- END USER -- ///////////////////////////////////////

	        //data detail
	        $detail = array(
	        				'detail_user' => $id,
	        				'detail_alamat' => $_POST['detail_alamat'],
	        				'detail_nohp' => $_POST['detail_nohp'],
	        				'detail_ktp' => $_POST['detail_ktp'],
	        				'detail_tanggal' => date('Y-m-d'),
	        				'detail_tempat_lahir' => $_POST['detail_tempat_lahir'],
	        				'detail_tanggal_lahir' => $_POST['detail_tanggal_lahir'],
	        				'detail_umur' => $_POST['detail_umur'],
		        			);

			//tanpa foto
			$cek = $this->db->query("SELECT * FROM t_detail where detail_user = '$id'")->num_rows();
			if (@$cek > 0) {
				//edit
				$this->db->set($detail);
		        $this->db->where('detail_user',$id);
		        $this->db->update('t_detail');
			} else {
				//baru
				$this->db->set($detail);
			    $this->db->insert('t_detail');
			}

			$this->session->set_flashdata('sukses','Data berhasil di perbaharui');
		}

		redirect(base_url('profile'));
	}
	function save_security(){
		$id = $this->session->userdata('user_id');

		if ($_POST['user_password'] == $_POST['confirm']) {
			//update
			$this->db->set('user_password',md5($_POST['user_password']));
			$this->db->where('user_id',$id);

			if ($this->db->update('t_user')) {
				$this->session->set_flashdata('sukses','Password berhasil di perbaharui');
			} else {
				$this->session->set_flashdata('gagal','Password gagal di perbaharui');
			}
		} else {
			$this->session->set_flashdata('gagal','Periksa kembali inputan password');
		}

		redirect(base_url('profile'));
	}
}
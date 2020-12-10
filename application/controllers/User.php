<?php
class User extends CI_Controller{

	function __construct(){ 
		parent::__construct();
		$this->load->model('paging');
	} 

	////////////////////// -- START TABLE STATIC -- /////////////////////////////////////////////

	function index($offset = ''){ 
		if ( $this->session->userdata('login') == 1) {

			//set  
			$table = 't_user'; 
			$limit = 10;
		    $hapus = 'user_hapus';   
		    $level = 'user_level >'; 
		    $order = 'user_id';

		    //paging
		    $search = @$_POST['search'];
		    if (@$search) {
		    	//search
		    	$data['data'] = $this->paging->search_data_user($table, $limit, $hapus, $level, $order, $search)->result_array();
		    }else{
		    	//all data
		    	$data['data'] = $this->paging->get_data_user($table, $limit, $offset, $hapus, $level, $order)->result_array();
		    }
		   
		    $config['base_url'] = base_url('user/index');
		    $config['total_rows'] = $this->paging->get_all_user($table, $hapus, $level, $order)->num_rows();
		    $config['per_page'] = $limit;

		    $this->pagination->initialize($config);
		    //endpaging  

		    //view
		    $data['total'] = $this->paging->get_all_user($table, $hapus, $level, $order)->num_rows();
		    $data['title'] = 'User Control';
			$data['user_active'] = 'class="active"';
		    $this->load->view('v_template_admin/admin_header',$data);
		    $this->load->view('user/index');
		    $this->load->view('v_template_admin/admin_footer');
		} 
		else{
			redirect(base_url('login'));
		}
	} 
	function delcheked(){
		
		//hapus check
		$check = @$_POST['check'];
		if ($check != ''){
            $set=implode(',',$check);
        }else{
            $set = ''; 
        }

        if (!$set == null) {
        	if ($this->db->query("UPDATE t_user SET user_hapus = 1 WHERE user_id IN($set)")) {
	        	$this->session->set_flashdata('sukses','Data berhasil di hapus');	
	        }else{
	        	$this->session->set_flashdata('gagal','Data gagal di hapus');
	        }
        }else{
        	//data tanpa di check
			$this->session->set_flashdata('gagal','Belum ada kolom yang di pilih');
        }
		
        redirect(base_url('user'));
	}
	function view($id){
		$data['data'] = $this->db->query("SELECT * FROM t_user WHERE user_id = '$id'")->row_array();

		$data['title'] = 'User Control';
		$data['user_active'] = 'class="active"';
		$this->load->view('v_template_admin/admin_header',$data);
		$this->load->view('user/view');
		$this->load->view('v_template_admin/admin_footer');
	}

	///////////////////////////// -- END TABLE STATIC -- ///////////////////////////////////////////
	
	function add(){
		$save = @$_POST['save'];
		if (@$save) {

			//cek email
			@$email = $_POST['user_email'];
			$cek = $this->db->query("SELECT * FROM t_user WHERE user_email = '$email'")->num_rows();
			if (@$cek > 0) {
				//email sudah di gunakan
				$this->session->set_flashdata('gagal','Email sudah di gunakan');
				$true = 0;
			} else {
				//email belum di gunakan
				$true = 1;
			}

			if ($true == 1) {
				 
				//save add
				if ($_FILES['user_foto']['name']) {

				  //config uplod foto
				  $config = array(
				  'upload_path' 	=> './assets/images/user',
				  'allowed_types' 	=> "jpg|png|jpeg",
				  'overwrite' 		=> TRUE,
				  'max_size' 		=> "2048000",
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

			        	$set = array(
									'user_nama' => $_POST['user_nama'],
									'user_email' => $_POST['user_email'],
									'user_password' => md5($_POST['user_password']),
									'user_tanggal' => date('Y-m-d'),
									'user_foto' => $foto1,
									'user_level' => 2,
								);
						$this->db->set($set);
						if ($this->db->insert('t_user')) {
							$this->session->set_flashdata('sukses','Data berhasil di simpan');	
				        }else{
				        	$this->session->set_flashdata('gagal','Data gagal di simpan');
				        }

					} else {
						$this->session->set_flashdata('gagal','Periksa kembali inputan foto (jpg|png|jpeg)');	
					}
	

				} else {
					//tanpa foto
					$set = array(
									'user_nama' => $_POST['user_nama'],
									'user_email' => $_POST['user_email'],
									'user_password' => md5($_POST['user_password']),
									'user_level' => 2,
									'user_tanggal' => date('Y-m-d'),
								);
					$this->db->set($set);
					if ($this->db->insert('t_user')) {
						$this->session->set_flashdata('sukses','Data berhasil di simpan');	
			        }else{
			        	$this->session->set_flashdata('gagal','Data gagal di simpan');
			        }
				}
			}

			redirect(base_url('user'));
		} else {
			//view add
			$data['title'] = 'User Control';
			$data['user_active'] = 'class="active"';
			$this->load->view('v_template_admin/admin_header',$data);
			$this->load->view('user/add');
			$this->load->view('v_template_admin/admin_footer');	
		}
	}
	function action($iduser = ''){
		$id = @$_POST['user_id'];

		if (@$_POST['edit']) {
			//edit data
			if ($_FILES['user_foto']['name']) {

				  //config uplod foto
				  $config = array(
				  'upload_path' 	=> './assets/images/user',
				  'allowed_types' 	=> "jpg|png|jpeg",
				  'overwrite' 		=> TRUE,
				  'max_size' 		=> "2048000",
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

				        //verifikasi password
				        $pass = $_POST['user_password'];
				        $passcek = $this->db->query("SELECT * FROM t_user WHERE user_id = '$id' AND user_password = '$pass'")->num_rows();
				        if (@$passcek > 0) {
				        	$password = $_POST['user_password'];
				        } else {
				        	$password = md5($_POST['user_password']);
				        }

			        	$set = array(
									'user_nama' => $_POST['user_nama'],
									'user_password' => $password,
									'user_level' => 2,
									'user_tanggal' => date('Y-m-d'),
									'user_foto' => $foto1,
								);
						$this->db->set($set);
						$this->db->where('user_id',$id);
						if ($this->db->update('t_user')) {
							$this->session->set_flashdata('sukses','Data berhasil di simpan');	
				        }else{
				        	$this->session->set_flashdata('gagal','Data gagal di simpan');
				        }

					} else {
						$this->session->set_flashdata('gagal','Periksa kembali inputan foto (jpg|png|jpeg)');	
					}
	

				} else {
					//tanpa foto

					//verifikasi password
			        $pass = $_POST['user_password'];
			        $passcek = $this->db->query("SELECT * FROM t_user WHERE user_id = '$id' AND user_password = '$pass'")->num_rows();
			        if (@$passcek > 0) {
			        	$password = $_POST['user_password'];
			        } else {
			        	$password = md5($_POST['user_password']);
			        }

					$set = array(
									'user_nama' => $_POST['user_nama'],
									'user_password' => $password,
									'user_level' => 2,
									'user_tanggal' => date('Y-m-d'),
								);
					$this->db->set($set);
					$this->db->where('user_id',$id);
					if ($this->db->update('t_user')) {
						$this->session->set_flashdata('sukses','Data berhasil di simpan');	
			        }else{
			        	$this->session->set_flashdata('gagal','Data gagal di simpan');
			        }

				}
			

		} else {
			//hapus data
			$this->db->where('user_id',$iduser);
			$this->db->set('user_hapus',1);
			if ($this->db->update('t_user')) {
				$this->session->set_flashdata('sukses','Data berhasil di hapus');	
	        }else{
	        	$this->session->set_flashdata('gagal','Data gagal di hapus');
	        }
		}	

		redirect(base_url('user'));	
	}
	function getposisi(){
		$data = $this->db->query("SELECT * FROM t_posisi")->result_array();
		echo json_encode($data); 
	}
}
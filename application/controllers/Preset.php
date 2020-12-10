<?php
class Preset extends CI_Controller{

	function __construct(){ 
		parent::__construct();
		$this->load->model('paging');
	} 

	////////////////////// -- START TABLE STATIC -- /////////////////////////////////////////////

	function index($offset = ''){ 
		if ( $this->session->userdata('login') == 1) {

			//set  
			$table = 't_preset'; 
			$limit = 10;
		    $hapus = 'preset_hapus';    
		    $order = 'preset_id';
		    $like = 'preset_nama';

		    //paging
		    $search = @$_POST['search'];
		    if (@$search) {
		    	//search
		    	$data['data'] = $this->paging->search_data($table, $limit, $hapus, $order, $like, $search)->result_array();
		    }else{
		    	//all data
		    	$data['data'] = $this->paging->get_data($table, $limit, $offset, $hapus, $order)->result_array();
		    }
		   
		    $config['base_url'] = base_url('preset/index');
		    $config['total_rows'] = $this->paging->get_all($table, $hapus, $order)->num_rows();
		    $config['per_page'] = $limit;

		    $this->pagination->initialize($config);
		    //endpaging  

		    //view
		    $data['total'] = $this->paging->get_all($table, $hapus, $order)->num_rows();
		    $data['title'] = 'Preset';
			$data['preset_active'] = 'class="active"';
		    $this->load->view('v_template_admin/admin_header',$data);
		    $this->load->view('preset/index');
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
        	if ($this->db->query("UPDATE t_preset SET preset_hapus = 1 WHERE preset_id IN($set)")) {
	        	$this->session->set_flashdata('sukses','Data berhasil di hapus');	
	        }else{
	        	$this->session->set_flashdata('gagal','Data gagal di hapus');
	        }
        }else{
        	//data tanpa di check
			$this->session->set_flashdata('gagal','Belum ada kolom yang di pilih');
        }
		
        redirect(base_url('preset'));
	}

	///////////////////////////// -- END TABLE STATIC -- ///////////////////////////////////////////
	
	function add(){
		
		//save add
		if ($_FILES['preset_file']['name']) {

		  //config uplod foto
		  $config = array(
		  'upload_path' 	=> './assets/preset',
		  'allowed_types' 	=> "jpg|png|jpeg",
		  'overwrite' 		=> TRUE,
		  'max_size' 		=> "2048000",
		  );

			//upload foto
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('preset_file')) {
				//replace Karakter name foto
				$name_foto = $_FILES['preset_file']['name'];
				$char = array('!', '&', '?', '/', '/\/', ':', ';', '#', '<', '>', '=', '^', '@', '~', '`', '{', '}', ' ');
		        $foto = str_replace($char, '_', $name_foto);
		        $char1 = array('[',']');
		        $foto1 = str_replace($char1, '', $foto);

	        	$set = array(
	        				'preset_nama' => $_POST['preset_nama'],
							'preset_tanggal' => date('Y-m-d'),
							'preset_file' => $foto1,
						);
				$this->db->set($set);
				if ($this->db->insert('t_preset')) {
					$this->session->set_flashdata('sukses','Data berhasil di simpan');	
		        }else{
		        	$this->session->set_flashdata('gagal','Data gagal di simpan');
		        }

			} else {
				$this->session->set_flashdata('gagal','Max ukuran 2MB, Type JPG|JPEG|PNG !!');	
			}

			redirect(base_url('preset'));
		}
		
	}
	function delete($id){
		
		//hapus data
		$this->db->where('preset_id',$id);
		$this->db->set('preset_hapus',1);
		if ($this->db->update('t_preset')) {
			$this->session->set_flashdata('sukses','Data berhasil di hapus');	
        }else{
        	$this->session->set_flashdata('gagal','Data gagal di hapus');
        }	

		redirect(base_url('preset'));	
	}
}
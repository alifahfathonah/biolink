<?php
class Notifikasi extends CI_Controller{

	function __construct(){
		parent::__construct();
	} 
	////////////////////// -- START TABLE STATIC -- /////////////////////////////////////////////

	function index($offset = 0){
		if ( $this->session->userdata('login') == 1) {
			$id = $this->session->userdata('user_id');
			//set
			$limit = 10; 

		    //paging 
		    $search = @$_POST['search'];
		    if (@$search) {
		    	//search
		    	$data['data'] = $this->db->query("SELECT * FROM t_notifikasi WHERE notifikasi_hapus = 0 AND notifikasi_isi LIKE '%$search%' ESCAPE '!' ORDER BY notifikasi_id DESC LIMIT $limit")->result_array();
		    }else{
		    	//paging data
		    	$data['data'] = $this->db->query("SELECT * FROM t_notifikasi WHERE notifikasi_hapus = 0 ORDER BY notifikasi_id DESC LIMIT $offset,$limit")->result_array();
		    }
		   
		    $config['base_url'] = base_url('notifikasi/index');
		    
		    //update view
		    $id_array = $this->db->query("SELECT * FROM t_notifikasi WHERE NOT notifikasi_view LIKE '$id,%' OR notifikasi_view LIKE '%,$id,%'")->result_array();

		    foreach ($id_array as $value) {
		    	$idx = $id.',';
		    	$id_notif = $value['notifikasi_id'];
		    	$this->db->query("UPDATE t_notifikasi SET notifikasi_view = CONCAT(notifikasi_view, '$idx') WHERE notifikasi_id = '$id_notif'");
		    }

		    //all data
		    $config['total_rows'] = $this->db->query("SELECT * FROM t_notifikasi WHERE notifikasi_hapus = 0")->num_rows();

		    $config['per_page'] = $limit;

		    $this->pagination->initialize($config);
		    //end paging  

		    //view
		    $data['total'] = $config['total_rows'];
		    $data['title'] = 'Notification';
			$data['notifikasi_active'] = 'class="active"';
		    $this->load->view('v_template_admin/admin_header',$data);
		    $this->load->view('notifikasi/index');
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
        	if ($this->db->query("UPDATE t_notifikasi SET notifikasi_hapus = 1 WHERE notifikasi_id IN($set)")) {
	        	$this->session->set_flashdata('sukses','Data berhasil di hapus');	
	        }else{
	        	$this->session->set_flashdata('gagal','Data gagal di hapus');
	        }
        }else{
        	//data tanpa di check
			$this->session->set_flashdata('gagal','Belum ada kolom yang di pilih');
        }
		
        redirect(base_url('notifikasi'));
	}
	function delete($id){
		$this->db->set('notifikasi_hapus',1);
		$this->db->where('notifikasi_id',$id);
		if ($this->db->update('t_notifikasi')) {
			$this->session->set_flashdata('sukses','Data berhasil di hapus');	
        }else{
        	$this->session->set_flashdata('gagal','Data gagal di hapus');
        }

        redirect(base_url('notifikasi'));
	}

	///////////////////////////// -- END TABLE STATIC -- ////////////////////////////////////////
}
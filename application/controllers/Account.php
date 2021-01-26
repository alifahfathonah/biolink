<?php
class Account extends CI_Controller{

	function __construct(){
		parent::__construct(); 
	} 

	function _remap($url) {
        $this->index($url);
    }
 
	function index($url){ 
		
		$data['title'] = 'Dashboard';

		$data['data'] = $this->db->query("SELECT * FROM t_account as a JOIN t_user as b ON a.account_email = b.user_email WHERE a.account_url = '$url'")->row_array();

		if (@$data['data']) {
			$email = $data['data']['account_email'];
			$data['user'] = $this->db->query("SELECT * FROM t_user WHERE user_email = '$email'")->row_array();


			//sosmed//
			$x = $this->db->query("SELECT * FROM t_account WHERE account_url = '$url'")->row_array();
			$xemail = $x['account_email'];
			$xid = $this->db->query("SELECT * FROM t_user WHERE user_email = '$xemail'")->row_array();
			$id = $xid['user_id'];
			$data['sosmed_data'] = $this->db->query("SELECT * FROM t_sosmed WHERE sosmed_user = '$id' AND sosmed_hapus = 0")->result_array();

		    $user_id = $data['data']['user_id'];

		    $data['youtube'] = $this->db->query("SELECT * FROM t_youtube WHERE youtube_user = $user_id AND youtube_hapus = 0")->result_array();

		    $this->load->view('biolink',$data);

		} else {
			$this->load->view('404');
		}
		
	} 
}
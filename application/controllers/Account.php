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

		$data['data'] = $this->db->query("SELECT * FROM t_account WHERE account_url = '$url'")->row_array();

		if (@$data['data']) {
			$email = $data['data']['account_email'];
			$data['user'] = $this->db->query("SELECT * FROM t_user WHERE user_email = '$email'")->row_array();
		    
		    $this->load->view('biolink',$data);
		} else {
			$this->load->view('404');
		}
		
	} 
}
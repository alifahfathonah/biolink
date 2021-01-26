<?php 
class Sitemap extends CI_Controller {
 public function index(){
     $this->load->helper('url');
     $data['data'] = $this->db->query("SELECT account_url AS url, user_tanggal AS tanggal FROM t_account AS a JOIN t_user AS b ON a.account_email = b.user_email ")->result_array();
     $this->load->view('view_sitemap',$data);
 }
}
?>
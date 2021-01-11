<?php
class Age extends CI_Controller{

	function __construct(){
		parent::__construct();
	} 
	function index(){
		if ( $this->session->userdata('login') == 1) {
			$data['title'] = 'Age Calculator';
			$data['age_active'] = 'class="active"';

		    $this->load->view('v_template_admin/admin_header',$data);
		    $this->load->view('age/index');
		    $this->load->view('v_template_admin/admin_footer');
 
		}
		else{
			redirect(base_url('login'));
		}
	} 
	function hitung(){
		@$th = $_POST['tahun'];
		@$bl = $_POST['bulan'];
		@$tg = $_POST['tanggal'];
		@$jm = $_POST['jam'];
		@$mn = $_POST['menit'];
		@$wk = $_POST['waktu'];
 
		//hitung umur
		$tanggal = $th.'-'.$bl.'-'.$tg.' '.$jm.':'.$mn.' '.$wk;
		$tanggal = new DateTime($tanggal); 
		$sekarang = new DateTime();
		$umur = $tanggal->diff($sekarang);

		$data_umur = array(
								'umur_tahun' => $umur->y,
								'umur_bulan' => $umur->m,
								'umur_hari' => $umur->d,
								'umur_jam' => $umur->h,
								'umur_menit' => $umur->i, 
							);

		//ulang tahun berikutnya
		if ($bl > date('m') && $th > date('Y')) {
			$date = date('Y')+1;
		} else { 
			$date = date('Y');
		}
		

		$ultah = $date.'-'.$bl.'-'.$tg.' '.$jm.':'.$mn.' '.$wk;
		$ultah = new DateTime($ultah); 
		$next = $ultah->diff($sekarang);

		$data_ultah = array(
								'ultah_tahun' => $next->y,
								'ultah_bulan' => $next->m,
								'ultah_hari' => $next->d,
								'ultah_jam' => $next->h,
								'ultah_menit' => $next->i, 
								);
		//tanggal kelahiran
		$data_lahir = $jm.':'.$mn.' '.$wk.' on '.$tg.'/'.$bl.'/'.$th;

		$this->session->set_flashdata('umur',$data_umur);
		$this->session->set_flashdata('ultah',$data_ultah);
		$this->session->set_flashdata('lahir',$data_lahir);

		redirect(base_url('age'));
	}
}
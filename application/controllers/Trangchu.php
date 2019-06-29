<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trangchu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/Mthongbao');		
		$this->load->model('frontend/Mcongvanden');
		$this->load->model('frontend/Mcongvandi');
		$this->load->model('frontend/Muser');
		if(!$this->session->userdata('user'))
			{
			$row =$this->Muser->guest_in();		
			$this->session->set_userdata('user',$row['username']);
			$this->session->set_userdata('fullname',$row['fullname']);
			$this->session->set_userdata('id',$row['id']);
			$this->session->set_userdata('access',$row['access']);		
			}	
		
		$this->data['user']=$this->Muser->user_detail($this->session->userdata('id'));
		$this->data['com']='trangchu';
	}
	public function index()
	{
		
		//Thống kê - vẽ biểu đồ
		$this->data['total1']=$this->Mcongvanden->congvanden_count();
		$this->data['total2']=$this->Mcongvandi->congvandi_count();
		$this->data['view']='index';
		$this->data['title']='Hệ thống cơ sở dữ liệu';
		$this->load->view('frontend/layout', $this->data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
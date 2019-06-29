<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/Mthongbao');
		$this->load->model('backend/Mcongvanden');
		$this->load->model('backend/Mcongvandi');
		$this->load->model('backend/Madmin');
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->Madmin->user_detail($this->session->userdata('id'));
		$this->data['com']='dashboard';
	}

	public function index()
	{
		//Thống kê - vẽ biểu đồ
		$this->data['total1']=$this->Mcongvanden->congvanden_count();
		$this->data['total2']=$this->Mcongvandi->congvandi_count();
		$this->data['view']='index';
		$this->data['title']='Hệ thống cơ sở dữ liệu';
		$this->load->view('backend/layout', $this->data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
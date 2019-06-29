<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thongbao extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('backend/Mthongbao');
        $this->load->model('frontend/Muser');
       	if(!$this->session->userdata('user'))
		{
			redirect('user/login','refresh');
		}
		$this->data['user']=$this->Muser->user_detail($this->session->userdata('id'));
		$this->data['com']='thongbao';
	}

	public function index()
	{
		$this->load->library('phantrang');
		$this->load->library('alias');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$this->data['list']= $this->Mthongbao->listall();
		$this->data['view']='index';
		$this->data['title']='Danh mục thông báo';
		$this->load->view('frontend/layout', $this->data);	}

	

}

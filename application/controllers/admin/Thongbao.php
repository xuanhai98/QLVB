<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thongbao extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('backend/Mthongbao');
        $this->load->model('backend/Madmin');       
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->Madmin->user_detail($this->session->userdata('id'));
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
		$this->load->view('backend/layout', $this->data);
	}

	public function insert()
	{
		$d=getdate();
		$this->load->library('alias');
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('content', 'Nội dung thông báo', 'required');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(				
				'contents'=>$_POST['content'],
				'status' =>$_POST['status'],
				'access'=>$_POST['access']
			);						
			$this->Mthongbao->thongbao_insert($mydata);
			$this->session->set_flashdata('success', 'Thêm thông báo thành công');
			redirect('admin/thongbao','refresh');
		} 
		else 
		{
			$this->data['view']='insert';
			$this->data['title']='Thêm thông báo mới';
			$this->load->view('backend/layout', $this->data);
		}
	}
	public function update($id)
	{
		$this->data['row']=$this->Mthongbao->thongbao_detail($id);
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('content', 'Nội dung thông báo ', 'required');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(				
				'contents'=>$_POST['content'],
				'status' =>$_POST['status'],
				'access'=>$_POST['access']
			);	
			$this->Mthongbao->thongbao_update($mydata, $id);
			$this->session->set_flashdata('success', 'Sửa thông báo thành công');
			redirect('admin/thongbao','refresh');
		}
		else{		
			$this->data['view']='update';
			$this->data['title']='Sửa thông báo';
			$this->load->view('backend/layout', $this->data);
		}				
	}
}

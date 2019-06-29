<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donvi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('backend/Mdonvi');
        $this->load->model('backend/Madmin');        
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->Madmin->user_detail($this->session->userdata('id'));
		$this->data['com']='donvi';
	}

	public function index()
	{
		$this->load->library('phantrang');
		$this->load->library('alias');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		
		$this->data['list']= $this->Mdonvi->listall();
		$this->data['view']='index';
		$this->data['title']='Danh mục đơn vị';
		$this->load->view('backend/layout', $this->data);
	}

	public function insert()
	{
		$d=getdate();
		$this->load->library('alias');
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tendonvi', 'Tên đơn vị', 'required|is_unique[db_donvi.tendonvi]|max_length[25]');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'tendonvi' =>$_POST['tendonvi'], 
				'status' =>$_POST['status'],
				'access'=>$_POST['access']
			);						
			$this->Mdonvi->donvi_insert($mydata);
			$this->session->set_flashdata('success', 'Thêm đơn vị thành công');
			redirect('admin/donvi','refresh');
		} 
		else 
		{
			$this->data['view']='insert';
			$this->data['title']='Thêm đơn vị mới';
			$this->load->view('backend/layout', $this->data);
		}
	}

	public function update($id)
	{
		$this->data['row']=$this->Mdonvi->donvi_detail($id);
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('tendonvi', 'Tên đơn vị ', 'required');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'tendonvi'=>$_POST['tendonvi'],				
				'status' =>$_POST['status'],
				'access'=>$_POST['access']);
			$this->Mdonvi->donvi_update($mydata, $id);
			$this->session->set_flashdata('success', 'Cập nhật đơn vị thành công');
			redirect('admin/donvi','refresh');
		}
		else{		
			$this->data['view']='update';
			$this->data['title']='Cập nhật đơn vị';
			$this->load->view('backend/layout', $this->data);
		}				
	}
		public function delete($id)
	{
		
		$this->Mdonvi->donvi_delete($id);
		$this->session->set_flashdata('success', 'Xóa đơn vị thành công');
		redirect('admin/donvi','refresh');
	}

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loaivanban extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('backend/Mloaivanban');
        $this->load->model('backend/Madmin');        
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->Madmin->user_detail($this->session->userdata('id'));
		$this->data['com']='loaivanban';
	}

	public function index()
	{
		$this->load->library('phantrang');
		$this->load->library('alias');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		
		$this->data['list']= $this->Mloaivanban->listall();
		$this->data['view']='index';
		$this->data['title']='Danh mục loại văn bản';
		$this->load->view('backend/layout', $this->data);
	}

	public function insert()
	{
		$d=getdate();
		$this->load->library('alias');
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Tên loại văn bản', 'required|is_unique[db_loaivanban.name]|max_length[25]');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'name' =>$_POST['name'], 
				'status' =>$_POST['status'],
				'access'=>$_POST['access']
			);						
			$this->Mloaivanban->category_insert($mydata);
			$this->session->set_flashdata('success', 'Thêm loại văn bản thành công');
			redirect('admin/loaivanban','refresh');
		} 
		else 
		{
			$this->data['view']='insert';
			$this->data['title']='Thêm loại văn bản mới';
			$this->load->view('backend/layout', $this->data);
		}
	}

	public function update($id)
	{
		$this->data['row']=$this->Mloaivanban->category_detail($id);
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('name', 'Tên loại văn bản ', 'required');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'name'=>$_POST['name'],				
				'status' =>$_POST['status'],
				'access'=>$_POST['access']);
			$this->Mloaivanban->category_update($mydata, $id);
			$this->session->set_flashdata('success', 'Cập nhật loại văn bản thành công');
			redirect('admin/loaivanban','refresh');
		}
		else{		
			$this->data['view']='update';
			$this->data['title']='Cập nhật loại văn bản';
			$this->load->view('backend/layout', $this->data);
		}				
	}

	public function status($id)
	{
		
	}

	public function trash($id)
	{
		$row = $this->Mloaivanban->category_detail($id);
		if(count($row) > 0)
		{
			$this->session->set_flashdata('error', 'Không thể xóa ! Xóa trong cơ sở dữ liệu nhé!');
			redirect('admin/loaivanban','refresh');
		}
		else
		{
			$mydata= array('trash' => 0);
			$this->Mloaivanban->category_update($mydata, $id);
			$this->session->set_flashdata('success', 'Xóa loại văn bản vào thùng rác thành công');
			redirect('admin/loaivanban','refresh');
		}
	}

	public function restore($id)
	{
		
	}

	public function recyclebin()
	{
		
	}

	public function delete($id)
	{
		
	}

}

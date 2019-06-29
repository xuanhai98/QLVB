<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Congvandi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('backend/Mcongvandi');
        $this->load->model('backend/Mloaivanban');
		$this->load->model('backend/Mdonvi');
        $this->load->model('backend/Madmin');
       	if(!$this->session->userdata('admin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->Madmin->user_detail($this->session->userdata('id'));
		$this->data['com']='congvandi';
	}

	public function index()
	{
		$this->load->library('phantrang');
		$this->load->library('session');		
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mcongvandi->congvandi_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url=base_url().'admin/congvandi');
		$this->data['list']=$this->Mcongvandi->congvandi($limit,$first);
		$this->data['view']='index';
		$this->data['title']='Danh mục công văn đi';
		$this->load->view('backend/layout', $this->data);
	}

	public function insert()
	{
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday'];
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');		
		$this->form_validation->set_rules('cv_no', 'Số công văn ', 'required');		
		$this->form_validation->set_rules('cv_loaivanban', 'Loại công văn', 'required');
			if ($this->form_validation->run() == TRUE) 
			{
				$mydata= array(
					'cv_no'=>$_POST['cv_no'],
					'cv_loaivanban' =>$_POST['cv_loaivanban'],
					'cv_senddate'=>$_POST['senddate'],					
					'cv_summary'=>$_POST['summary'],
					'cv_notes'=>$_POST['notes'],
					'cv_status'=>$_POST['status'],
					'cv_access'=>$_POST['access'],
					'cv_signer'=>$_POST['signer'],
					'created'=>$today
				);
				 $this->load->library('upload_library');
				 $upload_path = './public/congvan/congvandi';
				 $upload_data = $this->upload_library->upload($upload_path,'image');  
				 $image_link = '';
                if(isset($upload_data['file_name']))
                {
                    $image_link = $upload_data['file_name'];
                }				 
				 $mydata['cv_fullcontents'] = $image_link;				 
			
				foreach ($_POST['cv_groupview'] as $value){
					$mydata['cv_groupview'] .= " ".$value;
				 }
				$this->Mcongvandi->insert($mydata);
				$this->session->set_flashdata('success', 'Thêm công văn thành công');
				redirect('admin/congvandi','refresh');
			}			
			else {
				$this->data['view']='insert';
				$this->data['title']='Thêm công văn mới';
				$this->load->view('backend/layout', $this->data);
				}
	}


	public function update($id)
	{
		$this->data['row']=$this->Mcongvandi->congvandi_detail($id);
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('cv_no', 'Số công văn ', 'required');		
		$this->form_validation->set_rules('cv_loaivanban', 'Loại công văn', 'required');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'cv_no'=>$_POST['cv_no'],				
				'cv_loaivanban' =>$_POST['cv_loaivanban'],
				'cv_senddate'=>$_POST['senddate'],				
				'cv_summary'=>$_POST['summary'],
				'cv_notes'=>$_POST['notes'],					
				'cv_status'=>$_POST['status'],
				'cv_access'=>$_POST['access'],
				'cv_signer'=>$_POST['signer']				
				);			
		
			foreach ($_POST['cv_groupview'] as $value){
					$mydata['cv_groupview'] .= " ".$value;
				 }
			$this->Mcongvandi->congvandi_update($mydata, $id);
			$this->session->set_flashdata('success', 'Cập nhật công văn đi thành công');
			redirect('admin/congvandi','refresh');
		}
	else{		
		$this->data['view']='update';
		$this->data['title']='Cập nhật công văn đi';
		$this->load->view('backend/layout', $this->data);
		}
	}

	
	public function delete($id)
	{
		
		$this->Mcongvandi->congvandi_delete($id);
		$this->session->set_flashdata('success', 'Xóa công văn thành công');
		redirect('admin/congvandi','refresh');
	}

}

/* End of file Congvandi.php */
/* Location: ./application/controllers/admin/Congvandi.php */
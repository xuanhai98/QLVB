<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Congvandi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('frontend/Mcongvandi');
        $this->load->model('backend/Mloaivanban');
        $this->load->model('frontend/Muser');
       	if(!$this->session->userdata('user'))
		{
			$row =$this->Muser->guest_in();		
			$this->session->set_userdata('user',$row['username']);
			$this->session->set_userdata('fullname',$row['fullname']);
			$this->session->set_userdata('id',$row['id']);
			$this->session->set_userdata('access',$row['access']);
			//redirect('user/login','refresh');
		}
		$this->data['user']=$this->Muser->user_detail($this->session->userdata('id'));
		$this->data['com']='congvandi';
	}

	public function index()
	{
		//Thống kê
		$this->load->library('phantrang');
		$this->load->library('session');
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mcongvandi->congvandi_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url=base_url().'congvandi');
		$this->data['list']=$this->Mcongvandi->congvandi($limit,$first);
		$this->data['view']='index';
		$this->data['title']='Hệ thống cơ sở dữ liệu';
		$this->load->view('frontend/layout', $this->data);
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
					'cv_signer'=>$_POST['signer']				
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
				$this->Mcongvandi->insert($mydata);
				$this->session->set_flashdata('success', 'Thêm công văn thành công');
				redirect('congvandi','refresh');
			}			
			else {
				$this->data['view']='insert';
				$this->data['title']='Thêm công văn mới';
				$this->load->view('frontend/layout', $this->data);
				}
	}

}

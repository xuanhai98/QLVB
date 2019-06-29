<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Congvanden extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');// sd 1 tep tro giup
		$this->load->model('backend/Mcongvanden');
        $this->load->model('backend/Mloaivanban');
		$this->load->model('backend/Mdonvi');
        $this->load->model('backend/Madmin');
       	if(!$this->session->userdata('admin'))//lấy thông tin session admin 
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->Madmin->user_detail($this->session->userdata('id'));
		$this->data['com']='congvanden';
	}

	public function index()
	{
		$this->load->library('phantrang');
		$this->load->library('session');
		$limit=10;//gới hạn trang
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mcongvanden->congvanden_count();
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url='admin/congvanden');
		$this->data['list']=$this->Mcongvanden->congvanden($limit,$first);
		$this->data['view']='index';
		$this->data['title']='Danh mục công văn đến';
		$this->load->view('backend/layout', $this->data);
	}

	public function insert()
	{
		$d=getdate();//trả về gt time
		$today=$d['year']."/".$d['mon']."/".$d['mday'];
		$this->load->library('form_validation');// sd thu vien xác thực biểu mẫu
		$this->load->library('session');
		$this->load->library('alias');
		$this->load->library('randstring');			
		$this->form_validation->set_rules('cv_no', 'Số công văn ', 'required');
		$this->form_validation->set_rules('cv_incomeno', 'Số công văn đến', 'required');
		$this->form_validation->set_rules('cv_loaivanban', 'Loại công văn', 'required');
			if ($this->form_validation->run() == TRUE) //kiểm tra tính hợp lệ
			{
				$mydata= array(
					'cv_no'=>$_POST['cv_no'],
					'cv_incomeno'=>$_POST['cv_incomeno'],
					'cv_loaivanban' =>$_POST['cv_loaivanban'],
					'cv_senddate'=>$_POST['senddate'],
					'cv_receivedate'=>$_POST['receivedate'],
					'cv_summary'=>$_POST['summary'],
					'cv_notes'=>$_POST['notes'],					
					'cv_status'=>$_POST['status'],
					'cv_access'=>$_POST['access'],
					'cv_signer'=>$_POST['signer'],
					'created'=>$today
				);
				 $this->load->library('upload_library');
				 $upload_path = './public/congvan/congvanden';
				 $upload_data = $this->upload_library->upload($upload_path,'image');				 
				 $image_link='';
				 if(isset($upload_data['file_name'])){					
					$image_link = $upload_data['file_name'];
                }
				$mydata['cv_fullcontents'] = $image_link;
			
				$this->Mcongvanden->insert($mydata);
				$this->session->set_flashdata('success', 'Thêm công văn thành công');
				redirect('admin/congvanden','refresh');//chuyển hướng khi add thành công
			}			
			else {
				$this->data['view']='insert';
				$this->data['title']='Thêm công văn mới';
				$this->load->view('backend/layout', $this->data);
				}
	}
	

	public function update($id)
	{
		$this->data['row']=$this->Mcongvanden->congvanden_detail($id);//trả về dữ liệu trước đó
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('alias');
		$this->form_validation->set_rules('cv_no', 'Số công văn ', 'required');
		$this->form_validation->set_rules('cv_incomeno', 'Số công văn đến', 'required');
		$this->form_validation->set_rules('cv_loaivanban', 'Loại công văn', 'required');
		if ($this->form_validation->run() == TRUE) 
		{
			$mydata= array(
				'cv_no'=>$_POST['cv_no'],
				'cv_incomeno'=>$_POST['cv_incomeno'],
				'cv_loaivanban' =>$_POST['cv_loaivanban'],
				'cv_senddate'=>$_POST['senddate'],
				'cv_receivedate'=>$_POST['receivedate'],
				'cv_summary'=>$_POST['summary'],
				'cv_notes'=>$_POST['notes'],					
				'cv_status'=>$_POST['status'],
				'cv_access'=>$_POST['access'],
				'cv_signer'=>$_POST['signer']				
				);

			$this->Mcongvanden->congvanden_update($mydata, $id);
			$this->session->set_flashdata('success', 'Cập nhật công văn đến thành công');
			redirect('admin/congvanden','refresh');
		}
	else{		
		$this->data['view']='update';
		$this->data['title']='Cập nhật công văn đến';
		$this->load->view('backend/layout', $this->data);
		}
	}

	public function status($id)
	{
		$row=$this->Mcongvanden->congvanden_detail($id);
		$status=($row['status']==1)?0:1;
		$mydata= array('status' => $status);
		$this->Mcongvanden->congvanden_update($mydata, $id);
		$this->session->set_flashdata('success', 'Cập nhật công văn thành công');
		redirect('admin/product/','refresh');
	}
	

	public function delete($id)
	{
		$this->load->helper('file');
		$this->Mcongvanden->congvanden_delete($id);
		$this->session->set_flashdata('success', 'Xóa công văn thành công');
		redirect('admin/congvanden','refresh');
	}
	public function viewfile($id,$rule){		
		if(rules==3)
		{
			$this->session->set_flashdata('error', 'không thể xem!');
			redirect('admin/congvanden','refresh');
		}
	}

}

/* End of file Daspuhboard.php */
/* Location: ./application/controllers/Dashboard.php */
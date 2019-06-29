<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('backend/Madmin');
		$this->load->model('backend/Muser');
		$this->load->model('backend/Mdonvi');
	}
	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Tên đăng nhập', 'required|min_length[6]|max_length[32]');
		$this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]|max_length[32]');
        if ($this->form_validation->run() ==TRUE)
        {
        	$username = $_POST['username'];
        	$password = sha1($_POST['password']);
        	if($this->Madmin->user_login($username, $password)!=FALSE)
        	{
        		$row = $this->Madmin->user_login($username, $password);
        		$this->session->set_userdata('admin',$row['username']);//tên session-gtri session được lưu
        		$this->session->set_userdata('fullname',$row['fullname']);
        		$this->session->set_userdata('id',$row['id']);
        		$this->session->set_userdata('access',$row['access']);
        		redirect('admin','refresh');
        	}
        	else
	        {
	        	$data['error']='Sai thông tin đăng nhập';
	        	$this->load->view('backend/components/user/login', $data);
	        }
        }
        else
        {
        	$this->load->view('backend/components/user/login');
        }
	}
 public function insert()
    {
        
		$d=getdate();
		$today=$d['year']."/".$d['mon']."/".$d['mday']." ".$d['hours'].":".$d['minutes'].":".$d['seconds'];
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/user/login','refresh');
		}
		$this->data['user']=$this->Madmin->user_detail($this->session->userdata('id'));
		$this->data['com']='user';		
		$this->load->library('form_validation');
        $this->load->helper('form');
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required');
        $this->form_validation->set_rules('name', 'Họ và tên', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
        $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[password]');       
        
        if($this->form_validation->run() ==TRUE)
        {
            $data = array(
                'username'     => $this->input->post('username'),   
                'fullname'     => $this->input->post('name'),				
                'email'    => $this->input->post('email'),
                'phone'    => $this->input->post('phone'),
                'password' => sha1($this->input->post('password')),
				'donvi_id'    => $this->input->post('donvi'),
				'gender'=>1,
				'created'=>$today,
				'img'=>1,
				'trash'=>1,
				'access'=>1,
				'status'=>1
            );
            $this->Muser->insert($data);
			$this->session->set_flashdata('success', 'Thêm công văn thành công');
			redirect('admin','refresh');
        }  
        $this->data['title']='Đăng ký thành viên';   
        $this->data['view']='insert';
        $this->load->view('backend/layout',$this->data);  
    }
	
	public function logout()
	{
		$array_items = array('admin', 'fullname', 'id', 'access');
        $this->session->unset_userdata($array_items);
        //Chuyển hướng
		redirect('admin','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
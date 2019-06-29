<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('frontend/Muser');
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
        	if($this->Muser->user_login($username, $password)!=FALSE)
        	{
        		$row = $this->Muser->user_login($username, $password);
        		$this->session->set_userdata('user',$row['username']);//tên session-gtri session được lưu
        		$this->session->set_userdata('fullname',$row['fullname']);
        		$this->session->set_userdata('id',$row['id']);
        		$this->session->set_userdata('access',$row['access']);
        		redirect('trangchu','refresh');
        		echo("User login");
        	}
        	else
	        {
	        	$data['error']='Sai thông tin đăng nhập';
	        	$this->load->view('frontend/components/user/login', $data);
	        }
        }
        else
        {
        	$this->load->view('frontend/components/user/login');
        }
	}

	public function logout()
	{
		$array_items = array('user', 'fullname', 'id', 'access');
        $this->session->unset_userdata($array_items);//xóa tt session array_items
		redirect('trangchu','refresh');
	}
	public function changepassword(){		
		$this->data['user']=$this->Muser->user_detail($this->session->userdata('id'));
		$this->data['com']='user';
		$this->load->library('form_validation');
        $this->load->helper('form');
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('old_password', 'Mật khẩu', 'required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('new_password', 'Mật khẩu', 'required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[new_password]');       
        
        if($this->form_validation->run()==TRUE)
        {
                $username = $this->input->post('username');
                $old_password = sha1($this->input->post('old_password'));
				$new_password = sha1($this->input->post('new_password'));				
        
				if($this->Muser->checkuser($username,$old_password)){
					$data = array('password'=>$new_password);
					$this->Muser->changepass($username,$data);
					redirect('user/login','refresh');
					}
		}
		else{
			$this->data['msg']='Đổi mật khẩu không thành công thành công !';
			$this->data['view']='changepass';     
			$this->data['title']='Đổi mật khẩu mới';
			$this->load->view('frontend/layout', $this->data);
			}
	}
}


/* End of file User.php */
/* Location: ./application/controllers/User.php */
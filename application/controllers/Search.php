<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct() {
        // Gọi đến hàm khởi tạo của cha
        parent::__construct();
       	$this->load->model('frontend/Mcongvanden'); 
		$this->load->model('backend/Mloaivanban');
		$this->load->model('frontend/Muser');
       	if(!$this->session->userdata('user'))
		{
			redirect('user/login','refresh');
		}
		$this->data['user']=$this->Muser->user_detail($this->session->userdata('id'));
        $this->data['com']='search';
    }
    
	public function index()
	{
		$this->load->library('phantrang');
		$key = $_GET['search'];
		$aurl= explode('/',uri_string());
		$url = $aurl[0].'?search='.str_replace(' ', '+', $key);
		$limit=5;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total = $this->Mcongvanden->congvanden_search_count($key);
		$this->data['list'] = $this->Mcongvanden->congvanden_search($key,$limit,$first);		
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url= $url);
        $this->data['title']='Tìm kiếm - Công văn đến';  
		$this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);		
	}
	public function index2()
	{
		$this->load->library('phantrang');
		$key = $_GET['timkiem'];
		$aurl= explode('/',uri_string());
		$url = $aurl[0].'?timkiem='.str_replace(' ', '+', $key);
		$limit=10;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total = $this->Mcongvandi->congvandi_search_count($key);
		$this->data['list'] = $this->Mcongvandi->congvandi_search($key,$limit,$first);		
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url= $url);
        $this->data['title']='Tìm kiếm - Công văn đi';  
		$this->data['view']='index';
		$this->load->view('frontend/layout',$this->data);		
	}
	
}
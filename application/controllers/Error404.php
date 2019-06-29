<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {
    function __construct() {
        // Gọi đến hàm khởi tạo của cha
        parent::__construct();
        $this->load->model('frontend/Mcontent');
        $this->load->model('frontend/Mmenu');
        $this->load->model('frontend/Mtopic');
        $this->load->model("frontend/Mproduct");
    }
    
    public function index()
    {
        $this->data['title']='Lỗi trang - Mini Mark';   
        $this->data['view']='index';
        $this->load->view('frontend/layout',$this->data);
    }
}
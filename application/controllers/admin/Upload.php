<?php
Class Upload extends MY_Controller
{
    function index()
    {
        if($this->input->post('submit'))
        {
            $this->load->library('upload_library');
            $upload_path = '';
            $data = $this->upload_library->upload($upload_path, 'image');
        }     
    }
    
    function upload_file()
    {
        if($this->input->post('submit'))
        {
           $this->load->library('upload_library');
           $upload_path = '';
           $data = $this->upload_library->upload_file($upload_path, 'image_list');
           pre($data);
        }      
       
    }
    
}
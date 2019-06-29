<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginhome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('sosim_model');//gọi đệ model
		$data=$this->sosim_model->getAll();
		$dulieu['ds']=$data; //ds là biến bên Foreach ý
		$this->load->view('Home',$dulieu);
	}
	function addSoSim()
	{
		$this->load->view('addsosim');
	}
	function add()
	{
		$so=$this->input->post('so');
		$ten=$this->input->post('ten');
		$this->load->model('sosim_model');
		$id=$this->sosim_model->add($so,$ten);
		$this->load->model('sosim_model');//gọi đệ model
		$data=$this->sosim_model->getAll();
		$dulieu['ds']=$data; //ds là biến bên Foreach ý
		$this->load->view('Home',$dulieu);
		

	}
	function delete($id)
	{
		$this->load->model('sosim_model');
		if ($this->sosim_model->delete($id)) {
			
			$data=$this->sosim_model->getAll();
			$dulieu['ds'] = $data;
			$this->load->view('Home', $dulieu);	
		} else {
			
			$dulieu=$this->sosim_model->getAll();
			$dulieu['ds'] = $data;
			$this->load->view('Home', $dulieu);	
		}
	}
}

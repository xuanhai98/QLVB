<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sosim_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	//select * from sosim
	function getAll()
	{
		$data=$this->db->get('sim');
		$data=$data->result_array();
		return $data;
	}
	function add($so, $ten)
	{
		$object = ['so' => $so, 'ten'=>$ten];
		$this->db->insert('sim', $object);
		return $this->db->insert_id();
	}
	function delete($id)
	{
		$this->db->where('id', $id);
		$ret=$this->db->delete('sim');
		return $ret;
	}
	

}
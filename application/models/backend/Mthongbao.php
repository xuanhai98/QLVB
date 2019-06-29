<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mthongbao extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->dbprefix('thongbao');
	}
	public function listall()
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get($this->table);
		return $query->result_array();
	}
	public function getnewest(){
		$this->db->where('status',1);
		$query=$this->db->order_by('id', 'desc')->get($this->table)->row_array();
		return $query;
	}	

	//Thêm
	public function thongbao_insert($mydata)
	{
		$this->db->insert($this->table, $mydata);
	}

	//Cập nhật
	public function thongbao_update($mydata, $id)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table, $mydata);
	}
	public function thongbao_detail($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get($this->table);
        return $query->row_array();
	}

	
}

/* End of file mthongbao.php */
/* Location: ./application/models/mthongbao.php */
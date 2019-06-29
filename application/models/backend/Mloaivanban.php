<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mloaivanban extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->dbprefix('loaivanban');
	}

	public function listall()
	{
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function category_count_id($id)
	{
		$this->db->where('id', $id);
		$this->db->where('status', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());

	}
	public function category_all($limit,$first)
	{
		$this->db->order_by('created_at', 'desc');
		$query = $this->db->get($this->table,$limit,$first);
        return $query->result_array();
	}


	public function category_list()
	{
		$this->db->where('status',1);			
		$query = $this->db->get($this->table);
        return $query->result_array();
	}

	public function category_detail($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get($this->table);
        return $query->row_array();
	}
	public function category_insert($mydata)
	{
		$this->db->insert($this->table, $mydata);
	}

	public function category_update($mydata, $id)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table, $mydata);
	}

	public function category_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}

}

/* End of file mcategory.php */
/* Location: ./application/models/mcategory.php */
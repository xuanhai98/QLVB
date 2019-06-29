<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcongvandi extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->dbprefix('congvandi');		
	}

	public function congvandi_count()
    {
        $this->db->where('cv_status', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }	
    public function congvandi_count_parentid($catid)
    {
    	$this->db->where('cv_loaicongvan', $catid);
    	$this->db->where('cv_status', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }

    public function congvandi($limit,$first)
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table, $limit,$first);
        return $query->result_array();
    }
	public function insert($mydata)
	{
		$this->db->insert($this->table,$mydata);
	}
    // fun Dể update mảng data theo id có sẵn
    public function congvandi_detail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }
	public function congvandi_delete($id)
	{
		$this->db->where('id', $id);
        $del=$this->db->delete('congvandi');
        return $del; 
    }
	public function congvandi_update($mydata,$id)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table, $mydata);
	}

}

/* End of file mcongvandi.php */
/* Location: ./application/models/mcongvandi.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcongvanden extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->dbprefix('congvanden');		
	}

	public function congvanden_count()
    {
        $this->db->where('cv_status', 1);

        $query = $this->db->get($this->table);
        return count($query->result_array());
    }	
    public function congvanden_count_parentid($catid)
    {
    	$this->db->where('cv_loaicongvan', $catid);
    	$this->db->where('cv_status', 1);
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }

    public function congvanden($limit,$first)
    {
      
		$this->db->order_by('id', 'asc');
        $query = $this->db->get($this->table, $limit,$first);
        return $query->result_array();//trả về một mảng thuần, hoặc một mảng rỗng nếu không có kết quả truy vấn trả về
    }
	public function insert($mydata)
	{
		$this->db->insert($this->table,$mydata);
	}
	public function congvanden_detail($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();//trả về 1 mảng dl từ database
	}
		
	public function congvanden_delete($id)
	{
		$this->db->where('id', $id);
        $del=$this->db->delete('congvanden');
        return $del; 
    }
	public function congvanden_update($mydata,$id)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table, $mydata);
	}
	// public function congvanden_search($name,$limit,$first){
 //        $this->db->like('cv_no',$name);
	// 	$this->db->or_like('cv_incomeno',$name);
	// 	$this->db->or_like('cv_summary',$name);
 //        $this->db->order_by('id', 'desc');
 //        $query = $this->db->get($this->table,$limit,$first);
 //        return $query->result_array();
 //    }	
	//  public function congvanden_search_count($name){        
	// 	 $this->db->like('cv_no', $name);
	// 	 $this->db->or_like('cv_incomeno',$name);
	// 	 $this->db->or_like('cv_summary',$name);      
 //        $this->db->order_by('id', 'desc');
 //        $query = $this->db->get($this->table);
 //        return count($query->result_array());
 //    }
	

}

/* End of file mcongvanden.php */
/* Location: ./application/models/mcongvanden.php */
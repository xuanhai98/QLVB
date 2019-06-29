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
	public function congvandi_search($name,$limit,$first){
        $this->db->like('cv_no',$name);		
		$this->db->or_like('cv_summary',$name);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table,$limit,$first);
        return $query->result_array();
    }	
	 public function congvandi_search_count($name){        
		 $this->db->like('cv_no', $name);		 
		 $this->db->or_like('cv_summary',$name);      
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->table);
        return count($query->result_array());
    }
}

/* End of file mcongvandi.php */
/* Location: ./application/models/mcongvandi.php */
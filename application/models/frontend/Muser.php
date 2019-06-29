<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muser extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->table = $this->db->dbprefix('user');
    }

    function guest_in(){
		$this->db->where('donvi_id',0);
		$this->db->where('username', 'guest1');
		$query = $this->db->get($this->table);
		return $query->row_array();		
	}

	function user_login($username, $password)
    {
    	$this->db->where('username', $username);
    	$this->db->where('password', $password);
    	$query = $this->db->get($this->table);
        if(count($query->result_array())==1)
        {
        	return $query->row_array();
        }
        else
        {
        	return FALSE;
        }
    }

    function user_detail($id)
    {
    	$this->db->where('id', $id);
		$this->db->where('status', 1);
    	$query = $this->db->get($this->table);
    	return $query->row_array();
    }
	function checkuser($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get($this->table);
		return $query->row_array();
	}
	function changepass($username,$mydata){
		$this->db->where('username',$username);
		$this->db->update($this->table, $mydata);
	}
	function insert($mydata)
	{
		$this->db->insert($this->table,$mydata);
	}
	
	
}

/* End of file muser.php */
/* Location: ./application/models/muser.php */
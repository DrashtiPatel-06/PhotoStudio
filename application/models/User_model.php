<?php
class User_model extends CI_model
{
	function insertUser($data)
	{
		$this->db->insert('user_master',$data);
		return $this->db->insert_id();
	}
	function updateUser($data)
	{
		$this->db->where('user_id_pk',$data['user_id_pk']);
		return $this->db->update('user_master',$data);
	}
	function deleteUser($id)
	{
		$this->db->where('user_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('user_master');
	}
	function userData($id)
	{
		$qry=$this->db->get_where('user_master',array('is_active'=>1,'user_id_pk'=>$id));
		return $qry->row_array();
	}
	function userList()
	{
		$this->db->select('u.*,c.city_name,s.state_name');
		$this->db->from('user_master u');
		$this->db->where('u.is_active',1);
		$this->db->join('city_master c','c.city_id_pk=u.city_id_fk');
		$this->db->join('state_master s','s.state_id_pk=u.state_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
	function stateList()
	{
		$query=$this->db->get('state_master');
		return $query->result_array();
	}
	function cityList()
	{
		$query=$this->db->get('city_master');
		return $query->result_array();
	}
	function cityListByState($id)
	{
		$query=$this->db->get_where('city_master',array('state_id_fk'=>$id));
		return $query->result_array();
	}
	function user_login($email,$password)
	{
		$qry=$this->db->get_where('user_master',array('email'=>$email,'password'=>$password));
		return $qry->row_array();
	}	
	function user_email($email)
	{
		$qry=$this->db->get_where('user_master',array('email'=>$email));
		//echo $this->db->last_query();die;
		return $qry->row_array();
	}
	function countUser()
	{
		$this->db->select('*');
		$this->db->from('user_master');
		$this->db->where('is_active',1);
		return $this->db->count_all_results();
	}  
}
?>
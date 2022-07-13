<?php
class Appoinment_model extends CI_model
{
	function insertAppoinment($data)
	{
		$this->db->insert('appoinment_master',$data);
		return $this->db->insert_id();
	}
	function updateAppoinment($data){
		$this->db->where('appoinment_id_pk',$data['appoinment_id_pk']);
		return $this->db->update('appoinment_master',$data);
	}
	function deleteAppoinment($id)
	{
		$this->db->where('appoinment_id_pk',$id);
		$this->db->set('is_confirm',0);
		$this->db->set('is_active',0);
		$this->db->update('appoinment_master');
	}
	function appoinmentData($id)
	{
		$qry=$this->db->get_where('appoinment_master',array('is_active'=>1,'appoinment_id_pk'=>$id));
		return $qry->row_array();
	}
	function appoinmentList()
	{
		$this->db->select('a.*,u.f_name,u.l_name');
		$this->db->from('appoinment_master a');
		$this->db->where('a.is_confirm',0.);
		$this->db->where('a.is_active',1);
		$this->db->join('user_master u','u.user_id_pk=a.user_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
	function appoinmentconfirmList()
	{
		$this->db->select('a.*,u.f_name,u.l_name');
		$this->db->from('appoinment_master a');
		$this->db->where('a.is_confirm',1);
		$this->db->where('a.is_active',1);
		$this->db->join('user_master u','u.user_id_pk=a.user_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
	function countAppoinment()
	{
		$this->db->select('*');
		$this->db->from('appoinment_master');
		$this->db->where('is_active',1);
		return $this->db->count_all_results();
	}
}
?>
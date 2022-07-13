<?php
class Contact_model extends CI_model
{
	function insertContact($data)
	{
		$this->db->insert('contact_master',$data);
		return $this->db->insert_id();
	}
	function updateContact($data)
	{
		$this->db->where('c_id_pk',$data['c_id_pk']);
		return $this->db->update('contact_master',$data);
	}
	function deleteContact($id)
	{
		$this->db->where('c_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('contact_master');
	}
	function contactData($id)
	{
		$qry=$this->db->get_where('contact_master',array('is_active'=>1,'c_id_pk'=>$id));
		return $qry->row_array();
	}
	function contactList()
	{
		$this->db->select('c.*,u.username,u.f_name,u.l_name');
		$this->db->from('contact_master c');
		$this->db->where('c.is_active',1);
		$this->db->join('user_master u','u.user_id_pk=c.user_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
}
?>
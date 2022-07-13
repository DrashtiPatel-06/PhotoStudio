<?php
class Album_model extends CI_model
{
	function insertAlbum($data)
	{
		$this->db->insert('album_master',$data);
		return $this->db->insert_id();
	}
	function updateAlbum($data)
	{
		$this->db->where('album_id_pk',$data['album_id_pk']);
		return $this->db->update('album_master',$data);
	}
	function deleteAlbum($id)
	{
		$this->db->where('album_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('album_master');
	}
	function albumData($id)
	{
		$qry=$this->db->get_where('album_master',array('is_active'=>1,'album_id_pk'=>$id));
		return $qry->row_array();
	}

	function albumTypeList()
	{
		$this->db->limit(4);
		$this->db->select('a.*,i.album_type,i.album_id_pk');
		$this->db->from('album_image_master a');
		$this->db->where('a.is_active',1);
		$this->db->join('album_master i','i.album_id_pk=a.album_id_fk');
		$this->db->group_by('i.album_type');
		$query=$this->db->get();
		return $query->result_array();
	}
	function albumTypeList1()
	{
		$this->db->select('a.*,i.album_type,i.album_id_pk');
		$this->db->from('album_image_master a');
		$this->db->where('a.is_active',1);
		$this->db->join('album_master i','i.album_id_pk=a.album_id_fk');
		$this->db->group_by('i.album_type');
		$query=$this->db->get();
		return $query->result_array();
	}
	function albumList()
	{
		$this->db->select('a.*,u.username,u.f_name,u.l_name');
		$this->db->from('album_master a');
		$this->db->where('a.is_active',1);
		$this->db->join('user_master u','u.user_id_pk=a.user_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
}
?>
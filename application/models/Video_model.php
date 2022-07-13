<?php
class Video_model extends CI_model
{
	function insertVideo($data)
	{
		$this->db->insert('video_master',$data);
		return $this->db->insert_id();
	}
	function updateVideo($data)
	{
		$this->db->where('video_id_pk',$data['video_id_pk']);
		return $this->db->update('video_master',$data);
	}
	function deleteVideo($id)
	{
		$this->db->where('video_id_pk',$id);
        $this->db->delete('video_master');
	}
	function showVideo()
	{
		$query = $this->db->get('video_master');
        return $query->result_array();
	}
	function VideoData($id)
	{
		$qry=$this->db->get_where('video_master',array('is_active'=>1,'video_id_pk'=>$id));
		return $qry->row_array();
	}
	function VideoList($id)
	{
		$this->db->select('v.*,a.album_title');
        $this->db->from('video_master v');
        $this->db->where(array('v.is_active'=>1,'v.album_id_fk'=>$id));
        $this->db->join('album_master a','a.album_id_pk=v.album_id_fk');
        $query = $this->db->get();
        return $query->result_array();
	}
	function VideoList1()
	{
		$this->db->limit(4);
		$this->db->select('v.*,a.album_title');
        $this->db->from('video_master v');
        $this->db->where('v.is_active',1);
        $this->db->join('album_master a','a.album_id_pk=v.album_id_fk');
        $query = $this->db->get();
        return $query->result_array();
	}
	function allVideoList()
	{
		$this->db->select('v.*,a.album_title');
        $this->db->from('video_master v');
        $this->db->where('v.is_active',1);
        $this->db->join('album_master a','a.album_id_pk=v.album_id_fk');
        $query = $this->db->get();
        return $query->result_array();
	}
}
?>
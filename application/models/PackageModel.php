<?php
class PackageModel extends CI_Model{
	function insertPackage($data){
		$this->db->insert('package_master',$data);
		return $this->db->insert_id();
	}
	function updatePackage($data){
		$this->db->where('package_id_pk',$data['package_id_pk']);
		return $this->db->update('package_master',$data);
	}
	function deletePackage($id){
		$this->db->where('package_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('package_master');
	}
	function packageData($id){
		$query=$this->db->get_where('package_master',array('is_active'=>1,'package_id_pk'=>$id));
        return $query->row_array();
	}
	function packageList(){
       $this->db->select('p.*');
		$this->db->from('package_master p');
		$this->db->where('p.is_active',1);
		$query=$this->db->get();
		return $query->result_array();
	}
	function packageDataList(){
		$this->db->limit(3);
       $this->db->select('p.*');
		$this->db->from('package_master p');
		$this->db->where('p.is_active',1);
		$query=$this->db->get();
		return $query->result_array();
	}
	function packagePrice($id)
	{
		$this->db->select('p.package_price');
		$this->db->from('package_detail_master p');
		$this->db->where(array('p.is_active'=>1,'p.package_detail_id_pk'=>$id));
		$query=$this->db->get();
		return $query->row_array();
	}
}
?>
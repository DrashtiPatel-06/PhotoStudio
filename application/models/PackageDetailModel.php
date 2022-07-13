<?php
class PackageDetailModel extends CI_Model{
	function insertPackageDetail($data){
		$this->db->insert('package_detail_master',$data);
		return $this->db->insert_id();
	}
	function updatePackageDetail($data){
		$this->db->where('package_detail_id_pk',$data['package_detail_id_pk']);
		return $this->db->update('package_detail_master',$data);
	}
	function deletePackageDetail($id){
		$this->db->where('package_detail_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('package_detail_master');
	}
	function packagedetailData($id){
		$query=$this->db->get_where('package_detail_master',array('is_active'=>1,'package_detail_id_pk'=>$id));
        return $query->row_array();
	}
	function packagedetailList($id){
       $this->db->select('pd.*,p.package_name,p.package_pic_path');
		$this->db->from('package_detail_master pd');
		$this->db->where(array('pd.is_active'=>1,'p.package_id_pk'=>$id));
		$this->db->join('package_master p','p.package_id_pk=pd.package_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
	function allpackagedetailList(){
       $this->db->select('pd.*,p.package_name,p.package_pic_path');
		$this->db->from('package_detail_master pd');
		$this->db->where('pd.is_active',1);
		$this->db->join('package_master p','p.package_id_pk=pd.package_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
	
}
?>
<?php
class PurchaseModel extends CI_Model{
	function insertPurchase($data){
		$this->db->insert('purchase_master',$data);
		return $this->db->insert_id();
	}
	function updatePurchase($data){
		$this->db->where('purchase_id_pk',$data['purchase_id_pk']);
		return $this->db->update('purchase_master',$data);
	}
	function deletePurchase($id){
		$this->db->where('purchase_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('purchase_master');
	}
	function purchaseData($id){
		$query=$this->db->get_where('purchase_master',array('is_active'=>1,'purchase_id_pk'=>$id));
        return $query->row_array();
	}
	function purchaseList(){
        $this->db->select('pu.*,u.username,p.product_name,pa.payment_type');
		$this->db->from('purchase_master pu');
		$this->db->where('pu.is_active',1);
		$this->db->join('user_master u','u.user_id_pk=pu.user_id_fk');
		$this->db->join('product_master p','p.product_id_pk=pu.product_id_fk');
		$this->db->join('payment_master pa','pa.payment_id_pk=pu.payment_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
}
?>
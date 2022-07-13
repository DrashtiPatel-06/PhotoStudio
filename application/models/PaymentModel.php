<?php
class PaymentModel extends CI_Model{
	function insertPayment($data){
		$this->db->insert('payment_master',$data);
		return $this->db->insert_id();
	}
	function updatePayment($data){
		$this->db->where('payment_id_pk',$data['payment_id_pk']);
		return $this->db->update('payment_master',$data);
	}
	function deletePayment($id){
		$this->db->where('payment_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('payment_master');
	}
	function paymentData($id){
		$query=$this->db->get_where('payment_master',array('is_active'=>1,'payment_id_pk'=>$id));
        return $query->row_array();
	}
	function paymentList(){
        $this->db->select('p.*,u.username');
		$this->db->from('payment_master p');
		$this->db->where('p.is_active',1);
        $this->db->join('user_master u','u.user_id_pk=p.user_id_fk');
		$query=$this->db->get();
        return $query->result_array();
	}
}
?>
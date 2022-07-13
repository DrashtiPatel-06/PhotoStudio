<?php
class Billing_model extends CI_model
{
	function insertBill($data)
	{
		$this->db->insert('bill_master',$data);
		return $this->db->insert_id();
	}
	function updateBill($data)
	{
		$this->db->where('bill_id_pk',$data['bill_id_pk']);
		return $this->db->update('bill_master',$data);
	}
	function deleteBill($id)
	{
		$this->db->where('bill_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('bill_master');
	}
	function billData($id)
	{
		$qry=$this->db->get_where('bill_master',array('is_active'=>1,'bill_id_pk'=>$id));
		return $qry->row_array();
	}
	function billList()
	{
		$this->db->select('b.*,u.username,p.product_name,py.payment_type');
		$this->db->from('bill_master b');
		$this->db->where('b.is_active',1);
		$this->db->join('user_master u','u.user_id_pk=b.user_id_fk');
		$this->db->join('product_master p','p.product_id_pk=b.product_id_fk');
		$this->db->join('payment_master py','py.payment_id_pk=b.payment_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
}
?>
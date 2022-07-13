<?php
class ProductModel extends CI_Model{
	function insertProduct($data){
		$this->db->insert('product_master',$data);
		return $this->db->insert_id();
	}
	function updateProduct($data){
		$this->db->where('product_id_pk',$data['product_id_pk']);
		return $this->db->update('product_master',$data);
	}
	function deleteProduct($id){
		$this->db->where('product_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('product_master');
	}
	function productData($id){
		$query=$this->db->get_where('product_master',array('is_active'=>1,'product_id_pk'=>$id));
        return $query->row_array();
	}
	function productList(){
        $query=$this->db->get_where('product_master',array('is_active'=>1));
        return $query->result_array();
	}
	function productListLimit(){
		$this->db->limit(3);
        $query=$this->db->get_where('product_master',array('is_active'=>1));
        return $query->result_array();
	}
}
?>
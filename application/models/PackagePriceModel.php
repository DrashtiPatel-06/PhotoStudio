<?php 

class PackagePriceModel extends CI_Model{

    function insertPrice($data){
        $this->db->insert('package_price_master',$data);
        return $this->db->insert_id();
    }

    function updatePrice($data){
        
        $this->db->where('price_id_pk',$data['price_id_pk']);
        return $this->db->update('package_price_master',$data);
    }

    function deletePrice($id){
        $this->db->where('price_id_pk',$id);
        $this->db->set('is_active',0);
        $this->db->update('package_price_master');
    }

    function showPrice(){
        $query = $this->db->get('package_price_master',array('is_active'=>1,'price_id_pk'=>$id));
        return $query->row_array();
    }
    function fetchPrice()
    {
        $this->db->select('pi.*,p.package_price,p.package_detail');
        $this->db->from('package_price_master pi');
        $this->db->where('pi.is_active',1);
        $this->db->join('package_master p','p.package_id_pk=pi.package_id_fk');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}
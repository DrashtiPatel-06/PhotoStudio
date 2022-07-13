<?php 

class Album_image_model extends CI_Model{

    function insertGallery($data){
        $this->db->insert('album_image_master',$data);
        return $this->db->insert_id();
    }

    function updateGallery($data){
        
        $this->db->where('image_id_pk',$data['image_id_pk']);
        return $this->db->update('album_image_master',$data);
    }

    function deleteGallery($id){
        $this->db->where('image_id_pk',$id);
        $this->db->delete('album_image_master');
    }

    function showImgGallery(){
        $query = $this->db->get('album_image_master');
        return $query->result_array();
    }

    function fetchGallery($id){
        $query = $this->db->get_where('album_image_master',array('is_active'=>1,'image_id_pk'=>$id));
        //echo $this->db->last_query();die;
        return $query->row_array();
    }
    function fetchImgGallery($id)
    {
        $this->db->select('i.*,a.album_title');
        $this->db->from('album_image_master i');
        $this->db->where(array('i.is_active'=>'1','i.album_id_fk'=>$id));
        $this->db->join('album_master a','a.album_id_pk=i.album_id_fk');
        $query = $this->db->get();
        return $query->result_array();
    }
    function fetchImgGallery1()
    {
        $this->db->select('i.*,a.album_title');
        $this->db->from('album_image_master i');
        $this->db->where('i.is_active',1);
        $this->db->join('album_master a','a.album_id_pk=i.album_id_fk');
        $query = $this->db->get();
        return $query->result_array();
    }

}
<?php
class FeedbackModel extends CI_Model{
	function insertFeedback($data){
		$this->db->insert('feedback_master',$data);
		return $this->db->insert_id();
	}
	function updateFeedback($data){
		$this->db->where('f_id_pk',$data['f_id_pk']);
		return $this->db->update('feedback_master',$data);
	}
	function deleteFeedback($id){
		$this->db->where('f_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('feedback_master');
	}
	function FeedbackData($id){
		$query=$this->db->get_where('feedback_master',array('is_active'=>1,'f_id_pk'=>$id));
        return $query->row_array();
	}
	function FeedbackList(){
        $this->db->select('f.*');
		$this->db->from('feedback_master f');
		$this->db->where('f.is_active',1);
		$query=$this->db->get();
        return $query->result_array();
	}
    function userList(){
    	$query=$this->db->get('user_master');
    	return $query->result_array();
    }
}
?>
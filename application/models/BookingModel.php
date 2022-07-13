<?php
class BookingModel extends CI_Model{
	function insertBooking($data){
		$this->db->insert('booking_master',$data);
		return $this->db->insert_id();
	}
	function updateBooking($data){
		$this->db->where('booking_id_pk',$data['booking_id_pk']);
		return $this->db->update('booking_master',$data);
	}
	function deleteBooking($id){
		$this->db->where('booking_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('booking_master');
	}
	function bookingData($id){
		$query=$this->db->get_where('booking_master',array('is_active'=>1,'booking_id_pk'=>$id));
        return $query->row_array();
	}
	function bookingList(){
	
        $this->db->select('b.*,u.f_name,u.l_name,p.package_name');
		$this->db->from('booking_master b');
		$this->db->where('b.is_booked',0);
		$this->db->where('b.is_active',1);
		$this->db->join('user_master u','u.user_id_pk=b.user_id_fk');
		$this->db->join('package_master p','p.package_id_pk=b.package_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
	function confirmbookingList(){
	
        $this->db->select('b.*,u.f_name,u.l_name,p.package_name');
		$this->db->from('booking_master b');
		$this->db->where('b.is_booked',1);
		$this->db->where('b.is_active',1);
		$this->db->join('user_master u','u.user_id_pk=b.user_id_fk');
		$this->db->join('package_master p','p.package_id_pk=b.package_id_fk');
		$query=$this->db->get();
		return $query->result_array();
	}
	function countBooking()
	{
		$this->db->select('*');
		$this->db->from('booking_master');
		$this->db->where('is_active',1);
		return $this->db->count_all_results();
	}   
}
?>
<?php

class Database extends CI_Model {
    
    public function can_login() {
        $query = $this->db->get_where('customer',array('cus_username' => $this->input->post('username'),'cus_password' => md5($this->input->post('password'))));
        if($query->num_rows() == 1) {
            return true;
        }
        else {
            return false;
        }
    }
    
    public function add_user() {
        $data = array(
        'cus_contact' => $this->input->post('contact'),
        'cus_email' => $this->input->post('email'),
        'cus_username' => $this->input->post('username'), 
        'cus_password' => md5($this->input->post('password')),
        'cus_fname' => $this->input->post('fname'),
        'cus_lname' => $this->input->post('lname')
        );
        $query = $this->db->insert('customer',$data);

        if($query) {
            return true;
        }
        else {
            return false;
        }
    }     
    
    public function can_admin() {
        $query = $this->db->get_where('employee',array('emp_username' => $this->input->post('username'),'emp_password' => md5($this->input->post('password'))));
        if($query->num_rows() == 1) {
            return true;
        }
        else {
            return false;
        }
    } 
    
    /**************************************************************************
                                   DISPLAY 
    ***************************************************************************/
    
	public function display_customer() {
		return $query = $this->db->query('select * from customer');
	}
    
    public function display_employee() {
        return $query = $this->db->query('select * from employee');
    }
    
    public function display_movie() {
        return $query = $this->db->query('select * from movie');
    }
    
    public function display_transaction() {
        return $query = $this->db->query('select * from transaction');
    }
    
    public function display_room() {
        return $query = $this->db->query('select * from room');
    }
    
    public function insert_emp() {
        $data = array(
        'emp_contact' => $this->input->post('contact'),
        'emp_email' => $this->input->post('email'),
        'emp_username' => $this->input->post('username'), 
        'emp_password' => md5($this->input->post('password')),
        'emp_fname' => $this->input->post('fname'),
        'emp_lname' => $this->input->post('lname')
        );
        $query = $this->db->insert('employee',$data);

        if($query) {
            return true;
        }
        else {
            return false;
        }
        
    }
    
    public function insert_movie() {
        $data = array(
        'm_title' => $this->input->post('title'),
        'm_genre' => $this->input->post('genre'),
        'm_status' => Available
        );
        if($query = $this->db->insert('movie',$data)) {
            return true;
        }
        else {
            return false;
        }
        
    }
    
    public function reserve_movie() {
        if($this->is_movie_reserved()) {
            return false;
        }
        else {
            $data = array(
            'm_status' => Reserved
            );
            $this->db->where('m_title',$this->input->post('title'));   
            $query = $this->db->update('movie',$data);
            if($query) {
                return true;
            }
            else {
                return false;
            }
        }
    }
    
    public function reserve_room() { 
        if($this->is_room_reserved()) {
            return false;
        }
        else {
            $data = array(
            'rm_status' => Reserved
            );
            $this->db->where('rm_no',$this->input->post('rmno'));   
            $query = $this->db->update('room',$data);
            if($query) {
                return true;
            }
            else {
                return false;
            }
        }
    }
    
    public function is_movie_reserved() {
        if($query = $this->db->get_where('movie',array('m_status' => 'Reserved'))) {
            return true;
        }
        else {
            return false;
        }
    }
    
    public function is_room_reserved() {
        if($query = $this->db->get_where('room',array('rm_status' => 'Reserved'))) {
            return true;
        }
        else {
            return false;
        }
    }
    
    public function free_movie() {
        $data = array(
               'm_status' => Available
            );  
        $this->db->where('m_id',$this->input->post('avail')); 
        if($query = $this->db->update('movie',$data)) {
            return true;
        }
        else {
            return false;
        }
    }
    
    public function free_room() {
        $data = array(
               'rm_status' => Available
            );  
        $this->db->where('rm_no',$this->input->post('avail'));
        if($query = $this->db->update('room',$data)) {
            return true;
        }
        else {
            return false;
        }
    }
		
}
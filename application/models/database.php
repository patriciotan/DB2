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
        'cus_username' => $this->input->post('username'),
        'cus_email' => $this->input->post('email'),
        'cus_password' => md5($this->input->post('password'))
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
    
	public function display_customer() {
		$query = $this->db->get('customer');
	}
		
}
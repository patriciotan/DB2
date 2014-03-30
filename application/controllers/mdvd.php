<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdvd extends CI_Controller {
    public function index() {  
        $this->home();
    }
    
    public function home() {         
        $data['title'] = " ";                     
        $this->load->view('pages/home_view',$data); 
    }
    
    public function login() {
        if($this->session->userdata('logged_in')) {
            redirect('mdvd/restricted');
        }
        else {
            $data['title'] = " | Sign in";
            $this->load->view('templates/header',$data);
            $this->load->view('pages/login_view');      
            $this->load->view('templates/footer');
        }
    }
    
    public function login_validation() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password','Password','required|md5|trim');
        
        if($this->form_validation->run()) {
            $data = array (
                'username' => $this->input->post('username'),
                'logged_in' => true
            );
            $this->session->set_userdata($data);
            redirect('mdvd/movies');
        }
        else {
            $this->login();
        }
    }
    
    public function validate_credentials() {
        $this->load->model('database');
        if($this->database->can_login()) {
            return true;
        }
        else {
            $this->form_validation->set_message('validate_credentials','Incorrect username/password!');
            return false;
        }
    }
    
    public function reserve() {
        if($this->session->userdata('logged_in')) {
            
        }
        else {
            redirect('mdvd/restricted');
        }
    }
    
    public function signup() {
        if($this->session->userdata('logged_in')) {
            redirect('mdvd/restricted');
        }
        else {    
            $data['title'] = " | Sign up";
            $this->load->view('templates/header',$data);
            $this->load->view('pages/signup_view');      
            $this->load->view('templates/footer');
        }
    }
    
    public function signup_validation() {
        $this->load->library('form_validation');
          
        $this->form_validation->set_rules('username','User name','required|trim|is_unique[users.username]');
        $this->form_validation->set_rules('email','Email address','required|valid_email|trim|is_unique[users.email]');
        $this->form_validation->set_rules('password','Password','required|trim');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[password]');
        
        $this->form_validation->set_message('is_unique','%s already exists, choose another!');
        $this->form_validation->set_message('matches','Passwords do not much!');
        
        if($this->form_validation->run()) {
            $this->load->model('database');
            if($this->database->add_user()) {
                redirect('mdvd/success');
            }
            else {
                redirect('mdvd/problem');
            }
        }
        else {
            $this->signup();
        }
    }
    
    public function logout() {
        if($this->session->userdata('logged_in')) {
            $this->session->sess_destroy();
            redirect('mdvd/login');
        }
        else {
            redirect('mdvd/restricted');
        } 
    }
    
    public function success() {
        $data['title'] = " | Success";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/success_view');
    }
    
    public function problem() {
        $data['title'] = " | Problem";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/problem_view');
    }
    
    public function room() {
        $data['title'] = " | Room Rates";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/rooms_view');      
        $this->load->view('templates/footer');
    }
    
    public function movies() {
        $data['title'] = " | Movies";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/movies_view');     

    }
    
    public function karaoke() {
        $data['title'] = " | Karaoke";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/karaoke_view');      
        $this->load->view('templates/footer');
    }
    
    public function about() {
        $data['title'] = " | About";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/about_view');        
        $this->load->view('templates/footer');
    }
    
    public function contact() {
        $data['title'] = " | Contact";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/contact_view');           
        $this->load->view('templates/footer');
    }
    
    public function view404() {
        $data['title'] = " | 404";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/404_view');
    }
    
    public function restricted() {
        $data['title'] = " | Restricted";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/restricted_view');
    }
    
	/**************************************************************************
                                  ADMIN SIDE 
    ***************************************************************************/
     
    public function db_home() {
        $this->load->model('database');
        if($this->database->can_admin()) {
            $data['title'] = " | Admin";
            $this->load->view('templates/dbheader',$data);
            $this->load->view('db/db_home_view');      
            $this->load->view('templates/dbfooter');
        }
        else {
            redirect('mdvd/db_login');
        }
    }
    
    public function db_login() {
        if($this->session->userdata('logged_in')) {
            redirect('mdvd/restricted');
        }
        else {
            $data['title'] = " | Admin Sign in";
            $this->load->view('templates/dbheader',$data);
            $this->load->view('db/db_index_view');      
            $this->load->view('templates/dbfooter');
        }
    }
    
    public function db_login_validation() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|trim|xss_clean|callback_db_validate_credentials');
        $this->form_validation->set_rules('password','Password','required|md5|trim');
        
        if($this->form_validation->run()) {
            $data = array (
                'username' => $this->input->post('username'),
                'logged_in' => true
            );
            $this->session->set_userdata($data);
            redirect('mdvd/db_home');
        }
        else {
            $this->db_login();
        }
    }
    
    public function db_validate_credentials() {
        $this->load->model('database');
        if($this->database->can_admin()) {
            return true;
        }
        else {
            $this->form_validation->set_message('validate_credentials','Incorrect username/password!');
            return false;
        }
    }
	
    public function db_movies() {
        $data['title'] = " | Admin Movies";
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_movies_view');
		$this->load->view('templates/dbfooter');
    }
    
}
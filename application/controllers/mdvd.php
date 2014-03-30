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
     
    public function hashtagadmin() {
        $this->load->model('database');
        if($this->session->userdata('logged_in')) {
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
            $this->load->view('db/db_login_view');
            $this->load->view('templates/dbfooter');
        }
    }
    
    public function db_logout() {
        if($this->session->userdata('logged_in')) {
            $this->session->sess_destroy();
            redirect('mdvd/db_login');
        }
        else {
            redirect('mdvd/restricted');
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
            redirect('mdvd/hashtagadmin');
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
    
    public function db_customers() {
        $data['title'] = " | Admin Customers";
        $this->load->model('database');
        $data['query'] = $this->database->display_customer();
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_customers_view',$data);
        $this->load->view('templates/dbfooter');
    }
    
    public function db_employees() {
        $data['title'] = " | Admin Employees";
        $this->load->model('database');
        $data['query'] = $this->database->display_employee();
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_employees_view',$data);
        $this->load->view('templates/dbfooter');  
    }
    
    public function insert_emp() {
        $this->load->library('form_validation');
          
        $this->form_validation->set_rules('contact','Contact number','required|trim|is_unique[employee.emp_contact]');
        $this->form_validation->set_rules('email','Email address','required|valid_email|trim|is_unique[employee.emp_email]');
        $this->form_validation->set_rules('username','User name','required|trim|is_unique[employee.emp_username]');
        $this->form_validation->set_rules('password','Password','required|trim');
        $this->form_validation->set_rules('fname','First name','required|trim');
        $this->form_validation->set_rules('lname','Last name','required|trim');
        
        $this->form_validation->set_message('is_unique','%s already exists, choose another!'); 
        
        if($this->form_validation->run()) {
            $this->load->model('database');
            if($this->database->insert_emp()) {
                redirect('mdvd/db_success');
            }
            else {
                redirect('mdvd/db_problem');
            }
        }
        else {
            $this->db_employees();
        }
    } 
	
    public function db_movies() {
        $data['title'] = " | Admin Movies";
        $this->load->model('database');
        $data['query'] = $this->database->display_movie();
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_movies_view',$data);
        $this->load->view('templates/dbfooter');     
    }
    
    public function insert_movie() {
        $this->load->library('form_validation');
          
        $this->form_validation->set_rules('title','Title','required|trim|is_unique[movie.m_title]');
        $this->form_validation->set_rules('genre','Genre','required');
        
        $this->form_validation->set_message('is_unique','%s already exists, choose another!'); 
        
        if($this->form_validation->run()) {
            $this->load->model('database'); 
            if($this->database->insert_movie()) {
                redirect('mdvd/db_success');
            }
            else {
                redirect('mdvd/db_problem');
            }
        }
        else {
            $this->db_employees();
        }
    }
    
    public function free_movie() {
        $this->load->model('database'); 
            if($this->database->free_movie()) {
                redirect('mdvd/db_success');
            }
            else {
                redirect('mdvd/db_problem');
            }
    }  
    
    public function free_room() {
        $this->load->model('database'); 
            if($this->database->free_room()) {
                redirect('mdvd/db_success');
            }
            else {
                redirect('mdvd/db_problem');
            }
    } 
    
    public function db_transactions() {
        $data['title'] = " | Admin Transactions";
        $this->load->model('database');
        $data['query'] = $this->database->display_transaction();
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_transactions_view',$data); 
        $this->load->view('templates/dbfooter');  
    }      
    
    public function db_rooms() {
        $data['title'] = " | Admin Rooms";
        $this->load->model('database');
        $data['query'] = $this->database->display_room();
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_rooms_view',$data); 
        $this->load->view('templates/dbfooter');  
    }
    
    public function db_view404() {
        $data['title'] = " | 404";
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_404');  
        $this->load->view('templates/dbfooter');  
    }
    
    public function db_restricted() {
        $data['title'] = " | Restricted";
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_restricted');  
        $this->load->view('templates/dbfooter');  
    }
    
    public function db_success() {
        $data['title'] = " | Success";
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_success'); 
        $this->load->view('templates/dbfooter');  
    }
    
    public function db_problem() {
        $data['title'] = " | Problem";
        $this->load->view('templates/dbheader',$data);
        $this->load->view('db/db_problem');  
        $this->load->view('templates/dbfooter');  
    } 
    
}
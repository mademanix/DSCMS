<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Verifylogin extends CI_Controller {
 
    function __construct() {

        parent::__construct();
        $this->load->model('User_model','',TRUE);
    }
 
    function login() {

       //This method will have the credentials validation
        $this->load->library('form_validation');
     
        $this->form_validation->set_rules('nick', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
     
        if($this->form_validation->run() === FALSE) {

            //Field validation failed.  User redirected to login page

            $this->load->view('h4x10r');
        }
        else {

            //Go to private area
			redirect('panel', 'refresh');
        }
 
    }
 
    function check_database($password)
    {
       //Field validation succeeded.  Validate against database
        $username = $this->input->post('nick');
     
       //query the database
        $result = $this->User_model->login($username, $password);
     
        if($result) {

            $sess_array = array();
            foreach($result as $row) {

                $sess_array = array(
                    
                    'id' => $row->id,                  
                    'username' => $row->nick,
                    'realname' => $row->realname,
                    'mail' => $row->mail
                );

                $this->session->set_userdata('logged_in', $sess_array);
            }

            return TRUE;
        }

        else {

            $this->form_validation->set_message('check_database', 'Niepoprawne dane logowania');
            return false;
        }
    }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
 
    function __construct() {

        parent::__construct();
    }
 
    function index() {

        if($this->session->userdata('logged_in')) {


            $session_data = $this->session->userdata('logged_in');
            $data['nick'] = $session_data['nick'];
            $data['mail'] = $session_data['mail'];
            $this->load->view('admin/admin_header', $data);
            $this->load->view('admin/admin_panel');
            $this->load->view('admin/admin_footer');
        }
       
        else {

            //If no session, redirect to login page
            echo "dupa";
            redirect('h4x10r', 'refresh');
        }
    }
 
    function logout() {

       $this->session->unset_userdata('logged_in');
       session_destroy();
       redirect('h4x10r', 'refresh');
    }
 
}

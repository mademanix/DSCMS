<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {

        parent::__construct();
        $this->load->model('news_model');
    }

	public function index() {
		
		$data['news'] = $this->news_model->get_news();
		$this->load->view('header');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

	public function scary() {
		
		$this->load->view('scary');
	}

	public function DDP()
	{
		$this->load->view('page/header');
		$this->load->view('ddp');
		$this->load->view('page/footer');
	}

	public function download()
	{
		$this->load->view('page/header');
        $this->load->view('download');
        $this->load->view('page/footer');
	}

	public function h4x10r()
	{
		$this->load->view('h4x10r');
	}

	public function admin_panel()
	{

        if($this->session->userdata('logged_in')) {

            $session_data = $this->session->userdata('logged_in');
            $data['realname'] = $session_data['realname'];
            $this->load->view('admin/admin_header', $data);
            $this->load->view('admin/admin_panel');
    		$this->load->view('admin/admin_footer');
        }

        else {

            redirect(base_url().'h4x10r', 'refresh');
        }
	}

    public function admin_panel_post()
    {

        if($this->session->userdata('logged_in')) {

            $session_data = $this->session->userdata('logged_in');
            $data['realname'] = $session_data['realname'];
            $this->load->view('admin/admin_header', $data);
            $this->load->view('admin/admin_panel_post');
            $this->load->view('admin/admin_footer');
        }

        else {

            redirect(base_url().'h4x10r', 'refresh');
        }
    }

    public function admin_panel_add_post() {

        if($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            $data['realname'] = $session_data['realname'];
            $this->load->view('admin/admin_header', $data);
            $this->load->view('admin/admin_add_post');
            $this->load->view('admin/admin_footer');
        }

        else {

            redirect(base_url().'h4x10r', 'refresh');
        }
    }

    public function admin_panel_list_post()
    {

        if($this->session->userdata('logged_in')) {

            $data['news'] = $this->news_model->get_news();
            $session_data = $this->session->userdata('logged_in');
            $data['realname'] = $session_data['realname'];
            $this->load->view('admin/admin_header', $data);
            $this->load->view('admin/admin_list_post');
            $this->load->view('admin/admin_footer');
        }

        else {

            redirect(base_url().'h4x10r', 'refresh');
        }
    }


    public function admin_panel_edit_post($slug) {

        $data['news'] = $this->news_model->get_news($slug);
        $session_data = $this->session->userdata('logged_in');
        $data['realname'] = $session_data['realname'];

        if($this->session->userdata('logged_in')) {
            
            $session_data = $this->session->userdata('logged_in');
            $data['mail'] = $session_data['mail'];
            $this->load->view('admin/admin_header', $data);
            $this->load->view('admin/admin_edit_post');
            $this->load->view('admin/admin_footer');
        }

        else {

            redirect(base_url().'h4x10r', 'refresh');
        }
    }

    public function admin_panel_update_post_action() {

       /* $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('admin/fail');
        }
        
        else {*/
            
            $this->news_model->update_news();
            redirect( ''.base_url().'panel/posts/list/', 'refresh');
        /*}*/
    }

    public function admin_panel_remove_post($slug) {

       /* $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('admin/fail');
        }
        
        else {*/
        $data['news'] = $this->news_model->get_news($slug);
        $session_data = $this->session->userdata('logged_in');
        $data['realname'] = $session_data['realname'];
        if($this->session->userdata('logged_in')) {    
            
            $this->load->view('admin/admin_header', $data);
            $this->load->view('admin/admin_remove_post_confirm',  $data);
            $this->load->view('admin/admin_footer');
        }
        /*}*/
        else
            $this->load->view('scary');
    }

    public function admin_panel_remove_post_action($slug) {

       /* $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('admin/fail');
        }
        
        else {*/
        if($this->session->userdata('logged_in')) {    

            $this->news_model->remove_news($slug);
            redirect( ''.base_url().'panel/posts/list/', 'refresh');
        }
        /*}*/
        else
            $this->load->view('scary');
    }

    public function admin_panel_add_post_action() {

       /* $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {

            $this->load->view('admin/fail');
        }
        
        else {*/
        
            $this->news_model->set_news();
            redirect( ''.base_url().'panel/posts/add_post','refresh');
        /*}*/
    }

	 public function view($slug = NULL) {

        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item'])) {

            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('article/header');
        $this->load->view('article/single', $data);
        $this->load->view('article/footer');
    }
}

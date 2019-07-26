<?php
class Leads extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('leads_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['news'] = $this->leads_model->get_news();
        $data['title'] = 'Lead Details';
 
        $this->load->view('templates/header', $data);
        $this->load->view('leads/index', $data);
        $this->load->view('templates/footer');
    }

    public function new_view()
    {

        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $data['news_item'] = $this->leads_model->get_news_by_ids($id);
        
        if (empty($data['news_item']))
        {
            show_404();
        }
 
        $data['sno'] = $data['news_item']['sno'];
        $data['uname'] = $data['news_item']['uname'];
        $data['phone_no'] = $data['news_item']['phone_no'];
        $data['email'] = $data['news_item']['email'];
        $data['address'] = $data['news_item']['address'];
        $data['city'] = $data['news_item']['city'];
        $data['date'] = $data['news_item']['date'];

        $this->load->view('templates/header', $data);
        $this->load->view('leads/view', $data);
        $this->load->view('templates/footer');
    }
 
    public function view()
    {
        $data['news_item'] = $this->leads_model->get_news();
        
        if (empty($data['news_item']))
        {
            show_404();
        }
 
        $data['sno'] = $data['news_item']['sno'];
        $data['uname'] = $data['news_item']['uname'];
        $data['phone_no'] = $data['news_item']['phone_no'];
        $data['email'] = $data['news_item']['email'];
        $data['address'] = $data['news_item']['address'];
        $data['city'] = $data['news_item']['city'];
        $data['date'] = $data['news_item']['date'];

        $this->load->view('templates/header', $data);
        $this->load->view('leads/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a Lead';
 
        $this->form_validation->set_rules('uname', 'Name', 'required');
        $this->form_validation->set_rules('phone_no', 'Phone No', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('leads/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->leads_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('leads/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a Lead';        
        $data['news_item'] = $this->leads_model->get_news_by_ids($id);
        
        $this->form_validation->set_rules('uname', 'Name', 'required');
        $this->form_validation->set_rules('phone_no', 'Phone No', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('leads/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->leads_model->set_news($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/leads');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->leads_model->get_news_by_id($id);
        
        $this->leads_model->delete_news($id);        
        redirect( base_url() . 'index.php/leads');        
    }
}

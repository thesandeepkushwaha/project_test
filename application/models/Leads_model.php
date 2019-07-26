<?php
class Leads_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news()
    {
        // if ($slug === FALSE)
        // {
            $query = $this->db->get('leads');
            return $query->result_array();
        // }
 
        // $query = $this->db->get_where('leads', array('slug' => $slug));
        // return $query->row_array();
    }
    
    public function get_news_by_ids($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('leads');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('leads', array('sno' => $id));
        return $query->row_array();
    }

    public function get_news_by_id($id)
    {
        if ($id === 0)
        {
            $query = $this->db->get('leads');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('leads', array('sno' => $id));
        return $query->row_array();
    }
    
    public function set_news($id = 0)
    {
        $this->load->helper('url');
 
        // $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'uname' => $this->input->post('uname'),
            'phone_no' => $this->input->post('phone_no'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'date' => $this->input->post('date')
        );
        
        if ($id == 0) {
            return $this->db->insert('leads', $data);
        } else {
            $this->db->where('sno', $id);
            return $this->db->update('leads', $data);
        }
    }
    
    public function delete_news($id)
    {
        $this->db->where('sno', $id);
        return $this->db->delete('leads');
    }
}

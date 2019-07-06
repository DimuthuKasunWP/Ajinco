<?php

class Inquery extends CI_Controller{
    
    
    public function __construct(){
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->model('Inquery_Model');
        
    }

    public function index(){
        $query=$this->db->get_where('inquery',array('approved ==0'));

        $data['inquery']=$query->result();

        $this->load->view('Inquery',$data);
    }

    public function edit(){
        $this->load->model('Inquery_Model');
        // $data=$this->input->post('approved');
        $id=$this->input->post('submit');
        $this->Inquery_Model->update("Approved",$id);
        $this->load->view('Inquery');
    }

    public function delete(){
        $id=$this->input->post('submit');
        $this->Inquery_Model->delete($id);
        $this->load->view('Inquery');

    }
    public function loadChatBot(){
     $this->load->view('ChatBot');
    }




}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct(){
        $this->load->database();
    }
    //Create data 
    function createData(){
        $data=array(
            'name' => $this->input->post('name'),
            'proname' => $this->input->post('proname'),
            'startdate' => $this->input->post('startdate'),
            'enddate' => $this->input->post('enddate'),
            'phone' => $this->input->post('phone'),
            'description' => $this->input->post('description'),
            'photo' => $this->input->post('photo'),

        );
        $this->db->insert('contractors',$data);
    }
    //get all data in database 
    function getAllData(){
        $query = $this->db->query('SELECT *FROM contractors');
        return $query->result();
    }
    //get a data in database 
    function getData($id){
        $query= $this->db->query('SELECT *FROM contractors WHERE `id` ='.$id);
        return $query->row();
    }
    //edit a data
    function editData($id){
        $data=array(
            'name' => $this->input->post('name'),
            'proname' => $this->input->post('proname'),
            'startdate' => $this->input->post('startdate'),
            'enddate' => $this->input->post('enddate'),
            'phone' => $this->input->post('phone'),
            'description' => $this->input->post('description'),
            'photo' => $this->input->post('photo'),
        );
        $this->db->where('id',$id);
        $this->db->update('contractors',$data);
    }
    //delete a data
    function deleteData($id){
        $this->db->where('id',$id);
        $this->db->delete('contractors');
    }

    function publish($id){
        $query= $this->db->query('UPDATE contractors SET publish=0 WHERE `id` ='.$id);
    }

    function unpublish($id){
        $query= $this->db->query('UPDATE contractors SET publish=1 WHERE `id` ='.$id);
    }
    
}
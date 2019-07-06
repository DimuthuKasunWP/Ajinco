<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {

	public function __construct(){
        $this->load->database();
    }
    //Create data 
    function createData(){
        $data=array(
            'photo' => $this->input->post('photo'),
            'description' => $this->input->post('description'),
        );
        $this->db->insert('project',$data);
    }
    //get all data in database 
    function getAllData(){
        $query = $this->db->query('SELECT *FROM project');
        return $query->result();
    }
    //get a data in database 
    function getData($id){
        $query= $this->db->query('SELECT *FROM project WHERE `id` ='.$id);
        return $query->row();
    }
    //edit a data
    function editData($id){
        $data=array(
            'photo' => $this->input->post('photo'),
            'description' => $this->input->post('description'),
        );
        $this->db->where('id',$id);
        $this->db->update('project',$data);
    }
    //delete a data
    function deleteData($id){
        $this->db->where('id',$id);
        $this->db->delete('project');
    }
}
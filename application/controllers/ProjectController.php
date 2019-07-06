<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Project_model');
      
    }

    //Contactor page
	public function index()
	{
         $data['result'] = $this->Project_model->getAllData();
        $this->load->view('projectCrud',$data);
    }
    //add data 
    public function create(){
        $this->Project_model->createData();       
        redirect("ProjectController");
    }
    //edit data
    public function edit($id){
        $data['row']= $this->Project_model->getData($id);
        $this->load->view('projectEdit',$data);
    }
    //update data
    public function update($id){
        $this->Project_model->editData($id);
        redirect("ProjectController");
    }
    //delete data
    public function delete($id){
        $this->Project_model->deleteData($id);
        redirect("ProjectController");
    }
  
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Crud_model');
      
    }

    //Contactor page
	public function index()
	{
         $data['result'] = $this->Crud_model->getAllData();
        $this->load->view('crudView',$data);
    }
    //add data 
    public function create(){
        $this->Crud_model->createData();       
        redirect("CrudController");
    }
    //edit data
    public function edit($id){
        $data['row']= $this->Crud_model->getData($id);
        $this->load->view('crudEdit',$data);
    }
    //update data
    public function update($id){
        $this->Crud_model->editData($id);
        redirect("CrudController");
    }
    //delete data
    public function delete($id){
        $this->Crud_model->deleteData($id);
        redirect("CrudController");
    }
    
    public function publish($id){
        $this->Crud_model->publish($id);
        redirect("CrudController");
    }

    public function unpublish($id){
        $this->Crud_model->unpublish($id);
        redirect("CrudController");
    }
}

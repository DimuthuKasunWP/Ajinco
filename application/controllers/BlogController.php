<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Crud_model');
      
    }

    //Contactor page
	public function index()
	{
         $data['result'] = $this->Crud_model->getAllData();
        $this->load->view('blogView',$data);
    }
    
  
}

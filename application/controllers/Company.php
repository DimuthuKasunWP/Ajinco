<?php

class Company extends  CI_Controller{
    public function __construct(){
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->model('Company_Model');
        
    }
    public function index(){

        $query=$this->db->get("company_details");
        $data['c_details']=$query->result();

        $query2=$this->db->get("company_media");
        $data['c_media']=$query2->result();

        $query3=$this->db->get("staff");
        $data['staff']=$query3->result();

        $query4=$this->db->get("project");
        $data['project']=$query4->result();

        $query5=$this->db->get("project_media");
        $data['p_media']=$query5->result();

        // $this->load->helper('url'); 
        $this->load->view('About',$data);


    }

    public function view_contactPage(){
        
        $query=$this->db->get("company_details");
        $data['c_details']=$query->result();

        $query2=$this->db->get("company_media");
        $data['c_media']=$query2->result();

        $query3=$this->db->get("staff");
        $data['staff']=$query3->result();

        $query4=$this->db->get("project");
        $data['project']=$query4->result();

        $query5=$this->db->get("project_media");
        $data['p_media']=$query5->result();

        $this->load->helper('form'); 
        $this->load->view('Contact',$data); 

    }

    public function save(){

        $name= ($this->input->post('name'));
        $contact= ($this->input->post('phone'));
        $email= ($this->input->post('email'));
        $date= ($this->input->post('date'));
        $time= ($this->input->post('time'));
        $description= ($this->input->post('message'));

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('name', 'Username', 'required|min_length[5]|max_length[15]');
        // Validation For Email Field
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        // Validation For Contact Field
        $this->form_validation->set_rules('phone', 'Contact No.', 'required|regex_match[/^[0-9]{10}$/]');
        // Validation For Address Field
        $this->form_validation->set_rules('subject', 'Address', 'required|min_length[10]|max_length[50]');
        if ($this->form_validation->run() == FALSE)
        {
        $this->load->view('Contact');
        }
        else{
            
        

 
  $object = array(
   'name' => $firstName,
   'contact' => $contact,
   'email' => $email,
   'selected_date' =>$date,
   'start_time'=>$time,
   'approved'=>0,
   'description'=>$message
  );
  $this->Company_Model->insert($object);
  $data['message'] =  "";
  if($rst){
   $data['message'] =  "Employee Saved Successfully!..";
  }

        }

    }



}
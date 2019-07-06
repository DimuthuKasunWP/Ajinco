<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apartments extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/apartments
	 *	- or -
	 * 		http://example.com/index.php/apartments/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/apartments/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$posts = $this->queries->getPosts();
		$this->load->view('apartments_view',['posts'=>$posts]);
	}

	public function create(){
		$this->load->view('create');
	}

	public function view($id){
		$this->load->model('queries');
		$post = $this->queries->getSinglePost($id);
		$this->load->view('view',['post'=>$post]);
	}

	public function update($id){
		$this->load->model('queries');
		$post = $this->queries->getSinglePost($id);
		$this->load->view('update',['post'=>$post]);
	}

	public function delete($id){
		$this->load->model('queries');
		if($this->queries->deletePost($id)){
			$this->session->set_flashdata('msg','Apartment details deleted successfully');
		}
		else{
			$this->session->set_flashdata('msg','Failed to delete apartment details');
		}
		return redirect('apartments');
	}

	public function save(){
		$this->form_validation->set_rules('Apartment_Name', 'Apartment Name', 'required');
		$this->form_validation->set_rules('Apartment_Address', 'Apartment Address', 'required');
		$this->form_validation->set_rules('Number_of_Stories', 'Number of Stories', 'required');
		$this->form_validation->set_rules('Number_of_Rooms', 'Number of Rooms', 'required');
		$this->form_validation->set_rules('Number_of_Bathrooms', 'Number of Bathrooms', 'required');

		if ($this->form_validation->run())
		{
				$data = $this->input->post();
				unset($data['submit']);
				$this->load->model('queries');
				if($this->queries->addPost($data)){
					$this->session->set_flashdata('msg','Apartment details saved successfully');
				}
				else{
					$this->session->set_flashdata('msg','Failed to save apartment details');
				}
				return redirect('apartments');
		}
		else
		{
			$this->load->view('create');
		}
	}

	public function change($id){
		$this->form_validation->set_rules('Apartment_Name', 'Apartment Name', 'required');
		$this->form_validation->set_rules('Apartment_Address', 'Apartment Address', 'required');
		$this->form_validation->set_rules('Number_of_Stories', 'Number of Stories', 'required');
		$this->form_validation->set_rules('Number_of_Rooms', 'Number of Rooms', 'required');
		$this->form_validation->set_rules('Number_of_Bathrooms', 'Number of Bathrooms', 'required');

		if ($this->form_validation->run())
		{
				$data = $this->input->post();
				unset($data['submit']);
				$this->load->model('queries');
				if($this->queries->updatePost($data,$id)){
					$this->session->set_flashdata('msg','Apartment details updated successfully');
				}
				else{
					$this->session->set_flashdata('msg','Failed to update apartment details');
				}
				return redirect('apartments');
		}
		else
		{
			$this->load->view('update');
		}
	}
}
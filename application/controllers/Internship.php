<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Internship extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Internship_model');
    } 

    /*
     * Listing of internships
     */
    function index()
    {
        $data['internships'] = $this->Internship_model->get_all_internships();
        
        $data['_view'] = 'internship/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new internship
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'status' => $this->input->post('status'),
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'image' => $this->input->post('image'),
            );
            
            $internship_id = $this->Internship_model->add_internship($params);
            redirect('internship/index');
        }
        else
        {            
            $data['_view'] = 'internship/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a internship
     */
    function edit($id)
    {   
        // check if the internship exists before trying to edit it
        $data['internship'] = $this->Internship_model->get_internship($id);
        
        if(isset($data['internship']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'status' => $this->input->post('status'),
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'image' => $this->input->post('image'),
                );

                $this->Internship_model->update_internship($id,$params);            
                redirect('internship/index');
            }
            else
            {
                $data['_view'] = 'internship/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The internship you are trying to edit does not exist.');
    } 

    /*
     * Deleting internship
     */
    function remove($id)
    {
        $internship = $this->Internship_model->get_internship($id);

        // check if the internship exists before trying to delete it
        if(isset($internship['id']))
        {
            $this->Internship_model->delete_internship($id);
            redirect('internship/index');
        }
        else
            show_error('The internship you are trying to delete does not exist.');
    }
    
}

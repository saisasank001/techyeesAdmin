<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Job extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Job_model');
    } 

    /*
     * Listing of jobs
     */
    function index()
    {
        $data['jobs'] = $this->Job_model->get_all_jobs();
        
        $data['_view'] = 'job/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new job
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
            
            $job_id = $this->Job_model->add_job($params);
            redirect('job/index');
        }
        else
        {            
            $data['_view'] = 'job/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a job
     */
    function edit($id)
    {   
        // check if the job exists before trying to edit it
        $data['job'] = $this->Job_model->get_job($id);
        
        if(isset($data['job']['id']))
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

                $this->Job_model->update_job($id,$params);            
                redirect('job/index');
            }
            else
            {
                $data['_view'] = 'job/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The job you are trying to edit does not exist.');
    } 

    /*
     * Deleting job
     */
    function remove($id)
    {
        $job = $this->Job_model->get_job($id);

        // check if the job exists before trying to delete it
        if(isset($job['id']))
        {
            $this->Job_model->delete_job($id);
            redirect('job/index');
        }
        else
            show_error('The job you are trying to delete does not exist.');
    }
    
}

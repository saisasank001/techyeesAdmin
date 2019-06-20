<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Course_topic extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_topic_model');
    } 

    /*
     * Listing of course_topics
     */
    function index()
    {
        $data['course_topics'] = $this->Course_topic_model->get_all_course_topics();
        
        $data['_view'] = 'course_topic/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new course_topic
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'courseId' => $this->input->post('courseId'),
				'points' => $this->input->post('points'),
				'timestamp' => $this->input->post('timestamp'),
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
            );
            
            $course_topic_id = $this->Course_topic_model->add_course_topic($params);
            redirect('course_topic/index');
        }
        else
        {            
            $data['_view'] = 'course_topic/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a course_topic
     */
    function edit($id)
    {   
        // check if the course_topic exists before trying to edit it
        $data['course_topic'] = $this->Course_topic_model->get_course_topic($id);
        
        if(isset($data['course_topic']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'courseId' => $this->input->post('courseId'),
					'points' => $this->input->post('points'),
					'timestamp' => $this->input->post('timestamp'),
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
                );

                $this->Course_topic_model->update_course_topic($id,$params);            
                redirect('course_topic/index');
            }
            else
            {
                $data['_view'] = 'course_topic/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The course_topic you are trying to edit does not exist.');
    } 

    /*
     * Deleting course_topic
     */
    function remove($id)
    {
        $course_topic = $this->Course_topic_model->get_course_topic($id);

        // check if the course_topic exists before trying to delete it
        if(isset($course_topic['id']))
        {
            $this->Course_topic_model->delete_course_topic($id);
            redirect('course_topic/index');
        }
        else
            show_error('The course_topic you are trying to delete does not exist.');
    }
    
}

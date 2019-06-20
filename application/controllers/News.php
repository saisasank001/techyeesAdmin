<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class News extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
    } 

    /*
     * Listing of news
     */
    function index()
    {
        $data['news'] = $this->News_model->get_all_news();
        
        $data['_view'] = 'news/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new news
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'status' => $this->input->post('status'),
				'timestamp' => $this->input->post('timestamp'),
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'image' => $this->input->post('image'),
            );
            
            $news_id = $this->News_model->add_news($params);
            redirect('news/index');
        }
        else
        {            
            $data['_view'] = 'news/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a news
     */
    function edit($id)
    {   
        // check if the news exists before trying to edit it
        $data['news'] = $this->News_model->get_news($id);
        
        if(isset($data['news']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'status' => $this->input->post('status'),
					'timestamp' => $this->input->post('timestamp'),
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'image' => $this->input->post('image'),
                );

                $this->News_model->update_news($id,$params);            
                redirect('news/index');
            }
            else
            {
                $data['_view'] = 'news/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The news you are trying to edit does not exist.');
    } 

    /*
     * Deleting news
     */
    function remove($id)
    {
        $news = $this->News_model->get_news($id);

        // check if the news exists before trying to delete it
        if(isset($news['id']))
        {
            $this->News_model->delete_news($id);
            redirect('news/index');
        }
        else
            show_error('The news you are trying to delete does not exist.');
    }
    
}

<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Project_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get project by id
     */
    function get_project($id)
    {
        return $this->db->get_where('project',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all project
     */
    function get_all_project()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('project')->result_array();
    }
        
    /*
     * function to add new project
     */
    function add_project($params)
    {
        $this->db->insert('project',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update project
     */
    function update_project($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('project',$params);
    }
    
    /*
     * function to delete project
     */
    function delete_project($id)
    {
        return $this->db->delete('project',array('id'=>$id));
    }
}
<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Transaction extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Transaction_model');
    } 

    /*
     * Listing of transactions
     */
    function index()
    {
        $data['transactions'] = $this->Transaction_model->get_all_transactions();
        
        $data['_view'] = 'transaction/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new transaction
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'userId' => $this->input->post('userId'),
				'amount' => $this->input->post('amount'),
				'type' => $this->input->post('type'),
				'transactionMessage' => $this->input->post('transactionMessage'),
            );
            
            $transaction_id = $this->Transaction_model->add_transaction($params);
            redirect('transaction/index');
        }
        else
        {            
            $data['_view'] = 'transaction/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a transaction
     */
    function edit($id)
    {   
        // check if the transaction exists before trying to edit it
        $data['transaction'] = $this->Transaction_model->get_transaction($id);
        
        if(isset($data['transaction']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'userId' => $this->input->post('userId'),
					'amount' => $this->input->post('amount'),
					'type' => $this->input->post('type'),
					'transactionMessage' => $this->input->post('transactionMessage'),
                );

                $this->Transaction_model->update_transaction($id,$params);            
                redirect('transaction/index');
            }
            else
            {
                $data['_view'] = 'transaction/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The transaction you are trying to edit does not exist.');
    } 

    /*
     * Deleting transaction
     */
    function remove($id)
    {
        $transaction = $this->Transaction_model->get_transaction($id);

        // check if the transaction exists before trying to delete it
        if(isset($transaction['id']))
        {
            $this->Transaction_model->delete_transaction($id);
            redirect('transaction/index');
        }
        else
            show_error('The transaction you are trying to delete does not exist.');
    }
    
}

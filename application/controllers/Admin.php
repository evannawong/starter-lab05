<?php

/**
 * Our admin. Show the most recently added quote.
 * 
 * controllers/Admin.php
 *
 * ------------------------------------------------------------------------
 */
class Admin extends Application {

    function __construct()
    {
	parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $this->data['title'] = 'Quotations Maintenance';
        $this->data['quotes'] = $this->quotes->all();
        $this->data['pagebody'] = 'admin_list'; // this is the view we want shown
        $this->render();
    }
    
    function add()
    {
        
    }

}

/* End of file Admin.php */
/* Location: application/controllers/Admin.php */
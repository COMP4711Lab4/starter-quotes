<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $this->load->model('quotes');
        $record = $this->quotes->first();
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
    // This remaps /sleep to First/zzz
    public function _remap($method)
    {
        if ($method === 'sleep')
        {
            $this->zzz();
        }
        else if ($method === 'gimme')
        {
            $this->gimme(3);
        }
        else
        {
            $this->index();
        }
    }
    // zzz method for when /sleep url is entered
    function zzz()
    {
        $this->load->model('quotes');
        $record = $this->quotes->first();
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
    //Gimme method to display used to reroute show/3
    function gimme($id){

        $this->load->model('quotes');
        $record = $this->quotes->get($id);
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */
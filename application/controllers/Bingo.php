<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 *
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct()
    {
        parent::__construct();
    }

    function index() {

        $this->load->model('quotes');
        $record = $this->quotes->get(5);
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */
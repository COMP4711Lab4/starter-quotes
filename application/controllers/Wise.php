<?php
/**
 * Our Wise controller which gives access to the last quote
 *
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */

class Wise extends Application {

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function bingo()
    {
        //Called the last function from the Quotes model
        $record = $this->quotes->last();
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}


/* End of file Wise.php */
/* Location: application/controllers/Wise.php */
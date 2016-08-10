<?php

class HuncaiController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $Huncai = new Application_Model_Huncai();
        $huncai = $Huncai->get_list();
        $this->view->list = $huncai;
    }


}


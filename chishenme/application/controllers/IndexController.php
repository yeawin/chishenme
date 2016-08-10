<?php

class IndexController extends Zend_Controller_Action
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
        $this->view->headScript()->appendScript("var huncai = " . json_encode($huncai).";", $type = 'text/javascript');
        
        $Sucai = new Application_Model_Sucai();
        $sucai = $Sucai->get_list();
//         $this->view->list = $sucai;
        $this->view->headScript()->appendScript("var sucai = " . json_encode($sucai).";", $type = 'text/javascript');
    }


}


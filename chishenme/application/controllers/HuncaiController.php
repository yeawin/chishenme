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

    public function addAction()
    {
        // action body
    }

    public function addOkAction()
    {
        // action body
        $Params = $this->getAllParams();
        $data["name"] = $Params["name"];
        $Huncai = new Application_Model_Huncai();
        $Huncai->insert_record($data);
        $this->redirect("/huncai");
    }


}






<?php

class SucaiController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $Sucai = new Application_Model_Sucai();
        $sucai = $Sucai->get_list();
        $this->view->list = $sucai;
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
        $Sucai = new Application_Model_Sucai();
        $Sucai->insert_record($data);
        $this->redirect("/sucai");
    }


}






<?php

class Admin_ResourceAController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $resourceAList = array();
        
        $resourceA = new Application_Model_ResourceA();        
        $resourceA->id = 1;
        $resourceA->name = "ResourceA_1";
        $resourceA->createdBy = 1;
        
        $resourceAList[] = $resourceA;
        
        $resourceA = new Application_Model_ResourceA();
        
        $resourceA->id = 2;
        $resourceA->name = "ResourceA_2";
        $resourceAList[] = $resourceA;
        $resourceA->createdBy = 2;
        
        $resourceA = new Application_Model_ResourceA();
        
        $resourceA->id = 3;
        $resourceA->name = "ResourceA_3";
        $resourceAList[] = $resourceA;
        $resourceA->createdBy = 1;
        
        $resourceA = new Application_Model_ResourceA();
        
        $resourceA->id = 4;
        $resourceA->name = "ResourceA_4";
        $resourceAList[] = $resourceA;
        $resourceA->createdBy = 2;
        
        $this->view->resources = $resourceAList;
    }


}


<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function becerras()
	{
        // show a list of all registered cows
        $cows = $this->model->getCowList();
        include 'view/cowlist.php';

	}
    
    	public function tratamientos()
	{
        // show a list of all registered cows
        $cows = $this->model->getTreatList();
        include 'view/treatlist.php';

	}
    
    	public function vacunas()
	{
        // show a list of all registered cows
        $cows = $this->model->getVacList();
        include 'view/vaclist.php';

	}
    
    	public function desparacitaciones()
	{
        // show a list of all registered cows
        $cows = $this->model->getDespList();
        include 'view/desplist.php';

	}
    
    	public function reproducciones()
	{
        // show a list of all registered cows
        $cows = $this->model->getRepList();
        include 'view/replist.php';

	}
}

?>
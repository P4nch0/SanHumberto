<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['cow']))
		{
			// no special book is requested, we'll show a list of all available books
			$cows = $this->model->getCowList();
			include 'view/cowlist.php';
		}
		else
		{
			// show the requested book
			$cow = $this->model->getCow($_GET['cow']);
			include 'view/viewcow.php';
		}
	}
}

?>
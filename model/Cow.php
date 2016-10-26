<?php

class Cow {
	public $id;
	public $author;
	public $description;
	
	public function __construct($id, $author, $description)  
    {  
        $this->id = $id;
	    $this->author = $author;
	    $this->description = $description;
    } 
}

?>
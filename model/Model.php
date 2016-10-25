<?php

include_once("model/Cow.php");

class Model {
	public function getCowList()
	{
		// here goes some hardcoded values to simulate the database
		return array(
			"Jungle Book" => new Cow("Jungle Book", "R. Kipling", "A classic book."),
			"Moonwalker" => new Cow("Moonwalker", "J. Walker", ""),
			"PHP for Dummies" => new Cow("PHP for Dummies", "Some Smart Guy", "")
		);
	}
	
	public function getCow($title)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allCows = $this->getCowList();
		return $allCows[$title];
	}
	
	
}

?>
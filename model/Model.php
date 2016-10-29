<?php

    $hostname = "50.62.209.157:3306";
    $username = "P4NCH0";
    $password = "Nfr4nk64";
    $database = "das_pancho";

    mysql_connect($hostname, $username, $password) or die ("<html><script language='Javascript'>alert('nope')</script></html>");
    mysql_select_db($database);

include_once("model/Cow.php");

class Model {
	public function getCowList()
	{

    $query = "SELECT * FROM VACAS";
    
    $result = mysql_query($query);

    if($result) {
        
        // here goes some hardcoded values to simulate the database
		return array(
			"Jungle Book" => new Cow("Jungle Book", "R. Kipling", "A classic book."),
			"Moonwalker" => new Cow("Moonwalker", "J. Walker", ""),
			"PHP for Dummies" => new Cow("PHP for Dummies", "Some Smart Guy", "")
		);
        
        
        while($row = ) {
            $id = $row["ID_PLASTICO"];
            echo "ID: ".$id."<br/>";
        }
    }
		
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
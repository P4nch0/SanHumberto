<?php

    $hostname = "50.62.209.157:3306";
    $username = "P4NCH0";
    $password = "Nfr4nk64";
    $database = "das_pancho";

    mysql_connect($hostname, $username, $password) or die ("<html><script language='Javascript'>alert('nope')</script></html>");
    mysql_select_db($database);


class Model {
	public function getCowList() {

        $query = "SELECT * FROM VACAS";
        $calves = array();
        $result = mysql_query($query);

        if($result) {

            // here we obtain the cows from the database as a list and create the object
            while($row = mysql_fetch_array($result)) {
                $calves[] = $row;
            }

            return array ($calves);

        }
		
	}
	
	public function getTreatList() {

        $query = "SELECT * FROM TRATAMIENTOS";
        $calves = array();
        $result = mysql_query($query);

        if($result) {

            // here we obtain the cows from the database as a list and create the object
            while($row = mysql_fetch_array($result)) {
                $calves[] = $row;
            }

            return array ($calves);

        }
		
	}
	
    public function getVacList() {

        $query = "SELECT * FROM VACUNAS";
        $calves = array();
        $result = mysql_query($query);

        if($result) {

            // here we obtain the cows from the database as a list and create the object
            while($row = mysql_fetch_array($result)) {
                $calves[] = $row;
            }

            return array ($calves);

        }
		
	}
    
    public function getDespList() {

        $query = "SELECT * FROM DESPARACITACION";
        $calves = array();
        $result = mysql_query($query);

        if($result) {

            // here we obtain the cows from the database as a list and create the object
            while($row = mysql_fetch_array($result)) {
                $calves[] = $row;
            }

            return array ($calves);

        }
		
	}
    
	public function getRepList() {

        $query = "SELECT * FROM REPRODUCCION";
        $calves = array();
        $result = mysql_query($query);

        if($result) {

            // here we obtain the cows from the database as a list and create the object
            while($row = mysql_fetch_array($result)) {
                $calves[] = $row;
            }

            return array ($calves);

        }
		
	}
	
}

?>
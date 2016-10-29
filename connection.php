<?php
    $hostname = "50.62.209.157:3306";
    $username = "P4NCH0";
    $password = "Nfr4nk64";
    $database = "das_pancho";

    mysql_connect($hostname, $username, $password) or die ("<html><script language='Javascript'>alert('nope')</script></html>");
    mysql_select_db($database);

    $query = "SELECT * FROM VACAS";
    
    $result = mysql_query($query);

    if($result) {
        while($row = mysql_fetch_array($result)) {
            $id = $row["ID_PLASTICO"];
            echo "ID: ".$id."<br/>";
        }
    }
        
?>



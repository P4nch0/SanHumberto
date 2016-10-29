<?php
    $hostname = "50.62.209.157:3306";
    $username = "P4NCH0";
    $password = "Nfr4nk64";
    $database = "das_pancho";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Create connection
    $conn = mysqli_connect($hostname, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    //define variables with POST values
    $plastico = htmlspecialchars($_POST["plastico"]);
    $metal = htmlspecialchars($_POST["metal"]);
    $nac = htmlspecialchars($_POST["nac"]);
    $madre = htmlspecialchars($_POST["madre"]);
    $padre = htmlspecialchars($_POST["padre"]);
    $reg = htmlspecialchars($_POST["reg"]);
    $atend = htmlspecialchars($_POST["atend"]);
    $hora = htmlspecialchars($_POST["hora"]);
    $tipo = htmlspecialchars($_POST["tipo"]);
    $calidad = htmlspecialchars($_POST["calidad"]);
    $prote = htmlspecialchars($_POST["prote"]);
    $obs = htmlspecialchars($_POST["obs"]);

    // check that the id is not blank
    if(strlen($plastico)>0){
        // create string query
         $sql = 'INSERT INTO `VACAS`(`ID_PLASTICO`, `ID_METAL`, `NACIMIENTO`, `ID_MADRE`, `NOMBRE_PADRE`, `REGISTRO_PADRE`, `ATENDIO_PARTO`, `HORA_PARTO`, `TIPO_PARTO`, `CALIDAD_CALOSTRO`, `PROTEINA`, `OBSERVACIONES`) VALUES (
                  "'.$plastico.'",  "'.$metal.'",  "'.$nac.'",  "'.$madre.'",  "'.$padre.'",  "'.$reg.'",  "'.$atend.'",  "'.$hora.'",  "'.$tipo.'",  "'.$calidad.'",  "'.$prote.'",  "'.$obs.'" )';
        
        // try to insert
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Becerra registrada exitosamente'); location.href='../index.php';</script>";
        } else {
            // notify is any mistake was found
            echo "<script>alert('Error: " . $sql . mysqli_error($conn) . "'); location.href='../index.php';</script>";
        }

      }else{
          echo "<script>alert('Inserte ID Plastico'); location.href='../view/newcow.php';</script>";
      }

    //colse the connection
    mysqli_close($conn);
}


?>


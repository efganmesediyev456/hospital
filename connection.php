    <?php

    $database= new mysqli("localhost","root","root","hospital");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>

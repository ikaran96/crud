<?php

// Connection Bdd
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=db5000303643.hosting-data.io;dbname=dbs296630', 'dbu167304', '2p4!Z^Xf' );
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    

?>
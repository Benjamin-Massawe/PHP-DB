<?php

include_once('connect.php');

try {

    $sql = 'UPDATE BitClass SET email='babuu@gmail.com' WHERE regno = '38327'';

    $rows_affected = $pdo->exec($sql);

    $output = 'Updated'.$rows_affected.'rows';    
} catch (PDOException $e){
    $output = 'Unable to connect to the database server:' . $e->getMessage();
}

?>
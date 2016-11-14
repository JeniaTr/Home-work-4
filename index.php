<?php

    require_once 'vendor/autoload.php';
    require_once 'ConfigDB.php';
    require_once  __DIR__.'/src/Repositories/Connector.php';


//    echo var_dump($configuration['pass']);


    $connector= new Repositories\Connector(
        $configuration['database'],
        $configuration['user'],
        $configuration['pass']
    );


    $stmt =$connector->getPdo()->query('SELECT name FROM University');
    while ($row = $stmt->fetch())
    {
        echo $row['name'] . "\n";
    }


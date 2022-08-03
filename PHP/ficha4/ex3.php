<?php
    $sock_client = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    
    $resultado = socket_connect($sock_client, "localhost", 1434);
    do{
        $msm = socket_read($sock_client, 2048, PHP_NORMAL_READ);
        echo $msm;
    }while(true);
    
    socket_shutdown($sock_client);
    socket_close($sock_client);
?>
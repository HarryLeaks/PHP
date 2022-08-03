<?php
    $a = readline("Introduzir a password: ");
    $sock_client = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    socket_connect($sock_client, "localhost", 1434);
    socket_write($sock_client, $a, strlen($a));
        
     do{
        $msm = socket_read($sock_client, 2048);
        if($msm != "Palavra passe incorreta"){
            echo "\n".$msm."\n";
            if($msm == 'quit'){
                break;
            }
            
            $a = readline("Digite alguma coisa: ");
            socket_write($sock_client, $a, strlen($a));
            if($a == 'quit'){
                break;
            }
        }else{
            break;
        }
    }while(TRUE);
    
    socket_shutdown($sock_client);
    socket_close($sock_client);
?>
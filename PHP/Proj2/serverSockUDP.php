<?php
    if(FALSE === ($sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP))){
        echo "Falhou socket create:".socket_strerror($sock);
    }
    if(FALSE === ($resultado = socket_bind($sock, "localhost", 7010))){
        echo "Falhou socket bind:".socket_strerror($resultado);
    }
    $buffer = "oi tudo bem";
    
    do{
        if(FALSE === (socket_sendto($sock, $buffer, strlen($buffer), 0, "localhost"))){
            echo "Falhou socket sendto";
        }
    }while(true);
    
    socket_shutdown($sock);
    socket_close($sock);
?>
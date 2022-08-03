<?php
    if(FALSE === ($sock_client = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP))){
        echo "Falhou socket create:".socket_strerror($sock_client);
    }
    if(FALSE === ($resultado = socket_bind($sock_client, "localhost", 7010))){
        echo "Falhou socket bind:".socket_strerror($resultado);
    }
    
    //captura o ip e porta do server automaticamente
    $from = '';
    $port = '';
    if(FALSE === (socket_recvfrom($sock_client, $buffer, 2048, 0, $from, $port))){
        echo "Falhou o socket recvfrom";
    }
    
    echo "Mensagem recebida de:".$from.", porta:".$port.", mensagem:".$buffer."\n";
    
    socket_shutdown($sock_client);
    socket_close($sock_client);
?>
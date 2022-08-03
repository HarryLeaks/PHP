<?php
if(FALSE === ($sock_servidor = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)))
    echo "Falhou socket create:".socket_strerror($sock_servidor);

if(FALSE === ($resultado=socket_bind($sock_servidor, "localhost", 1434)))
    echo "Falhou socket bind:".socket_strerror($resultado);
    
do{
    if(FALSE === ($resultado=socket_listen($sock_servidor, 1)))
        echo "Falhou socket listen:".socket_strerror($resultado);
    
    if(FALSE === ($socket_cliente=socket_accept($sock_servidor)))
        echo "Falhou socket accept:".socket_strerror($socket_cliente);
        
    $msm="Bem vindo ao Server1! - mensagem via socket \n";
    
    if(FALSE === ($sockW=socket_write($socket_cliente, $msm, strlen($msm))))
        echo "Falhou socket write:".socket_strerror($sockW);
    
    if(FALSE === ($sockW=socket_write($socket_cliente, $msm, strlen($msm))))
        echo "Falhou socket write:".socket_strerror($sockW);
}while(TRUE);

socket_shutdown($sock_servidor, 2);
socket_close($sock_servidor);
?>
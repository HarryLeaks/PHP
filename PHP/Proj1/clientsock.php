<?php
if(FALSE === ($sock_Cliente=socket_create(AF_INET, SOCK_STREAM, SOL_TCP)))
    echo "Falhou socket create:".socket_strerror($sock_Cliente);

if(FALSE === ($resultado=socket_connect($sock_Cliente, "localhost", 1434)))
    echo "Falhou socket connect:".socket_strerror($resultado);
do{
    if(FALSE === ($msm=socket_read($sock_Cliente, 2048, PHP_NORMAL_READ)))
        echo "Falhou socket read:".socket_strerror($msm);
    echo $msm;
}while(TRUE);

socket_shutdown($sock_Cliente, 2);
socket_close($sock_Cliente);
?>


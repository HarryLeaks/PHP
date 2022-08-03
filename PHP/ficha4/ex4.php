<?php
$sock_servidor = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

$resultado=socket_bind($sock_servidor, "localhost", 1434);
$resultado=socket_listen($sock_servidor, 1);

$sock_cliente=socket_accept($sock_servidor);

$msm="Bem vindo ao servidor PHP! Digite as mensagens que pretende enviar para o servidor.\n";
socket_write($sock_cliente, $msm, strlen($msm));

$msm = "Digite quit para sair";
socket_write($sock_cliente, $msm, strlen($msm));
do{
    $buf = socket_read($sock_cliente, 2048, PHP_NORMAL_READ);
    if(!$buf = trim($buf))
    {
        continue;
    }
    echo $buf."\n";
}while(true);

socket_close($sock_servidor);
?>
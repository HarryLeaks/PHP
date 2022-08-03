<?php
$sock_servidor = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

$resultado=socket_bind($sock_servidor, "localhost", 1434);
$resultado=socket_listen($sock_servidor, 1);

if($resultado){
        $a = '';
        $sock_cliente=socket_accept($sock_servidor);
        if($sock_cliente){            
            $buf = socket_read($sock_cliente, 2048);
            if($buf == "1234"){
                $msm="Bem vindo ao servidor PHP! Digite as mensagens que pretende enviar para o servidor.\nDigite quit para sair\n";
                socket_write($sock_cliente, $msm, strlen($msm));
                
                do{
                    $buf = socket_read($sock_cliente, 2048);
                    echo "\n"."Mensagem Recebida: ".$buf."\n";
                    if($buf == 'quit')
                        break;
                    
                    $a = readline("Digite alguma coisa: ");
                    socket_write($sock_cliente, $a, strlen($a));
                    if($a == 'quit')
                        break;
                }while(TRUE);
            }else{
                $msm = "Palavra passe incorreta";
                socket_write($sock_cliente, $msm, strlen($msm));
            }
       }
   }


socket_close($sock_servidor);
?>
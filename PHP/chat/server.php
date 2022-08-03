<?php
    echo "A espera de ligacoes....\n";

            do{
                $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
                
                $resultado = socket_bind($socket, "localhost", 8085);
                $resultado = socket_listen($socket, 1);
                
                $sock_client = socket_accept($socket);
                
                $buf = socket_read($sock_client, 2048);
                echo "\n"."Cliente diz: ".$buf."\n";
                
                if($buf == "quit" || $buf == "shutdown")
                    break;
                    
                $a = readline("Escreva uma mensagem de resposta: ");
                
                socket_write($sock_client, $a, strlen($a));
                
                socket_close($socket);
            }while(TRUE);
    socket_shutdown($socket);
    socket_close($socket);
?>
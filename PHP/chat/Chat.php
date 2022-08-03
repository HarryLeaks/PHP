<head>
<center><h3><strong>Bem-vindo.</strong></h3></center>
</head>
<center><body style="background-color: Grey">
<p><strong>Escreva "quit" para sair. Para desligar, escreva "shutdown"</strong></p>
<br>
<form name="form" action="" method="post">
    <label>Digite uma mensagem: </label>
    <input type="text" name="msg">
    <button type="submit" name="button">Enviar</button>
</form>
<?php      
    if(isset($_POST["msg"])){
        $sock_client = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_connect($sock_client, "localhost", 8085);  
               
        $a = $_POST["msg"];
        socket_write($sock_client, $a, strlen($a));
        
        $msm = socket_read($sock_client, 2048);
        $msm = trim($msm);
        
        socket_shutdown($sock_client);
        socket_close($sock_client);
    }
    header("Refresh: 0");
?>
<br>
<textarea rows="4" cols="50" readonly><?php echo "Resposta do server: ".@$msm;?></textarea>
</body></center>
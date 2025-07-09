<?php
    $db_host = "127.0.0.1";
    $db_user = "root";
    $db_pass = "";
    $db_name = "agenda";
    $db_port = 3306;
    
    // conexão com o PDO
    try{
        
        $conn = new PDO("mysql:host=$db_host; dbname=$db_name; port=$db_port", $db_user , $db_pass);

        //Ativar o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Erro: $error";
    }
    

?>
<?php
    include_once("config/url.php");
    include_once("config/process.php"); 


    //limpa mensage
    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Agenda de contatos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                    <img src="<?= $BASE_URL ?>img/logo.svg" alt="agenda"/>
                </a>
                <div>
                    <div class="navbar-nav">
                        <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                        <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
                    </div>
                </div>
                
            </nav>
        </header>
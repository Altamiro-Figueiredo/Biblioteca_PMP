<?php
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="theme-color" content="#008eb7">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#008eb7">

    <!--<link rel="shortcut icon" href="<?= __ROOT__ ?>/images/estrutura/favicon.png?v=2" type="image/x-icon"> -->
    <!-- <link rel="shortcut icon" href="<?= __ROOT__ ?>/images/estrutura/favicon.png?v=2" type="image/x-icon"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= __ROOT__ ?>/bootstrap_4.5/css/bootstrap.min.css">


    <link rel="stylesheet" href="<?= __ROOT__ ?>/css/index.css" media="screen, print">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />

    <title>Acervo Bibliográfico</title>

    <!-- bootstrap script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid header corSecundaria menuSuperior p-1">
        <div class="p-2">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 d-flex align-items-center">
                        <div class="mx-auto order-0 text-light">
                            <div class="row">
                                <div class="m-0 h7">
                                    <?= utf8_encode(ucfirst(strftime('%A, %e de %B de %G', strtotime('today')))) ?>
                                </div>
                                 <div class="col 0">
                                  <div class="mx-auto order-0 text-light float-right">
                                    <p class="m-0 h7">
                                      <a class="text-decoration-none text-light pr-2" href="https://facebook.com/PrefeituraPalmital" target="__blank" title="Facebook">
                                      <img src="<?= __ROOT__ ?>/images/icones/topo/facebook_escuro.png" class="iconeTopo">
                                      </a>
                                      <a class="text-decoration-none text-light pr-2" href="https://www.bit.ly/prefeitura24horas" target="__blank" title="WhatsApp - Prefeitura 24 horas">
                                      <img src="<?= __ROOT__ ?>/images/icones/topo/whatsapp_escuro.png" class="iconeTopo">
                                      </a>
                                      <a class="text-decoration-none text-light pr-2" href="tel: 1833519333" title="Ligar para a Prefeitura">
                                      <img src="<?= __ROOT__ ?>/images/icones/topo/telefone_escuro.png" class="iconeTopo">
                                      </a>
                                    </p>
                               </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <div class="container-fluid header corPrincipal">
        <div class="container p-0">
            <nav class="navbar navbar-dark navbar-expand-lg pl-0">

        
                   <!-- <img class="logoMenu" src="<?= __ROOT__ ?>/layout/images/estrutura/logo.svg"> -->
    
                      
            </nav>
        </div>
    </div>
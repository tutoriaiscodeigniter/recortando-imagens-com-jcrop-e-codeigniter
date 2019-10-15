<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nesse tutorial você irá aprender como recortar imagens utilizando o plugin jCrop - do jQuery - e as libraries Upload e Image Manipulation do CodeIgniter.
">
    <meta name="author" content="Jonathan Lamim - Tutoriais CodeIgniter">
    <link rel="icon" href="<?=base_url('assets/images/unici/favicon.png')?>">

    <title>Recortando imagens com as bibliotecas jCrop e Image Manipulation no CodeIgniter</title>

    <!-- Folha de estilo do Boostrap 3.3.6 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">   

    <!-- Folha de estilo com as configurações da fonte Source Sans Pro -->
    <link rel='stylesheet' id='hexa-source-sans-pro-css'  href='http://fonts.googleapis.com/css?family=Source+Sans+Pro%3A300%2C400%2C700%2C300italic%2C400italic%2C700italic&#038;ver=4.4.2' type='text/css' media='all' />

    <!-- Folha de estilo padrão dos exemplos -->
    <link href="<?=base_url('assets/css/estilo.css')?>" rel="stylesheet">

    <!-- Folha de estilo desse exemplo -->
    <link href="<?=base_url('assets/css/tutorial.css')?>" rel="stylesheet">

    <!-- Folha de estilo do plugin jCrop -->
    <link rel="stylesheet" href="<?=base_url('assets/css/plugins/jquery.Jcrop.css')?>" type="text/css" />
  </head>

  <body>
<?php $this->load->view('commons/cabecalho-tci'); ?>

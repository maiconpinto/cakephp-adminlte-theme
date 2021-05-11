<?php

/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= Configure::read('Theme.title') ?> | <?= $this->fetch('title') ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <?= $this->Html->css('AdminLTE./plugins/fontawesome-free/css/all.min') ?>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <?= $this->Html->css('AdminLTE.adminlte.min') ?>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition lockscreen">
    <div class="lockscreen-wrapper">
        <?= $this->Flash->render() ?>
        <div class="lockscreen-logo">
            <?= $this->Html->link(Configure::read('Theme.title'), '/') ?>
        </div>
        <?= $this->fetch('content') ?>
        <div class="help-block text-center">
            Enter your password to retrieve your session
        </div>
        <div class="text-center">
            <?= $this->Html->link('Or sign in as a different user', '/pages/examples/login') ?>
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; 2014-2021 <b><a href="http://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
            All rights reserved
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <?= $this->Html->script('AdminLTE./plugins/jquery/jquery.min') ?>
    <!-- Bootstrap 4 -->
    <?= $this->Html->script('AdminLTE./plugins/bootstrap/js/bootstrap.bundle.min') ?>
</body>

</html>
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

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Font Awesome -->
    <?= $this->Html->css('AdminLTE./plugins/fontawesome-free/css/all.min') ?>
    <!-- icheck bootstrap -->
    <?= $this->Html->css('AdminLTE./plugins/icheck-bootstrap/icheck-bootstrap.min') ?>
    <!-- Theme style -->
    <?= $this->Html->css('AdminLTE.adminlte.min') ?>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <?= $this->Flash->render() ?>
        <div class="login-logo">
            <?= $this->Html->link(Configure::read('Theme.title'), '/') ?>
        </div>
        <?= $this->fetch('content') ?>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <?= $this->Html->script('AdminLTE./plugins/jquery/jquery.min') ?>
    <!-- Bootstrap 4 -->
    <?= $this->Html->script('AdminLTE./plugins/bootstrap/js/bootstrap.bundle.min') ?>
    <!-- AdminLTE App -->
    <?= $this->Html->script('AdminLTE.adminlte.min') ?>
</body>

</html>
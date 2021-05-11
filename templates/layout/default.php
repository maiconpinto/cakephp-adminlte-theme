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
    <title><?= Configure::read('Theme.title') ?> | <?= $this->fetch('title') ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->fetch('meta') ?>
    <!-- Font Awesome -->
    <?= $this->Html->css('AdminLTE./plugins/fontawesome-free/css/all.min') ?>
    <!-- overlayScrollbars -->
    <?= $this->Html->css('AdminLTE./plugins/overlayScrollbars/css/OverlayScrollbars.min') ?>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck -->
    <?= $this->Html->css('AdminLTE./plugins/icheck-bootstrap/icheck-bootstrap.min') ?>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <?php
    $alertType = Configure::read('Theme.flash');
    switch ($alertType) {
        case 'sweetalert':
            echo $this->Html->css('AdminLTE./plugins/sweetalert2/sweetalert2.min');
            break;
        case 'toastr':
            echo $this->Html->css('AdminLTE./plugins/toastr/toastr.min');
    }
    ?>
    <?= $this->fetch('css') ?>
    <!-- Theme style -->
    <?= $this->Html->css('AdminLTE.adminlte.min') ?>
</head>

<body class="hold-transition sidebar-mini
 <?= Configure::read('Theme.layout.boxed') ? 'layout-boxed' : '' ?>
 <?= Configure::read('Theme.layout.sidebar_collapse') ? 'sidebar-collapse' : '' ?>
 <?= Configure::read('Theme.layout.fixed.sidebar') ? 'layout-fixed' : '' ?>
 <?= Configure::read('Theme.layout.fixed.navbar') ? 'layout-navbar-fixed' : '' ?>
 <?= Configure::read('Theme.layout.fixed.footer') ? 'layout-footer-fixed' : '' ?>">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <?= $this->Html->image(Configure::read('Theme.logo'), ['class' => 'animation__shake', 'alt' => 'AdminLTELogo', 'height' => 60, 'width' => 60]) ?>
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <?= $this->element('AdminLTE.navbar/left') ?>

            <!-- Right navbar links -->
            <?= $this->element('AdminLTE.navbar/right') ?>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <?= $this->element('AdminLTE.sidebar/brand') ?>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <?= $this->element('AdminLTE.sidebar/user') ?>

                <?= $this->element('AdminLTE.sidebar/search') ?>

                <?= $this->element('AdminLTE.sidebar/menu') ?>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper <?= Configure::read('Theme.iframe') ? 'iframe-mode' : '' ?>" <?php if (Configure::read('Theme.iframe')) : ?> data-widget="iframe" data-loading-screen="750" <?php endif; ?>>
            <?= $this->Flash->render() ?>
            <?= $this->Flash->render('auth') ?>
            <?= $this->fetch('content') ?>
        </div>
        <!-- /.content-wrapper -->
        <?= $this->element('AdminLTE.footer') ?>

        <!-- Control Sidebar -->
        <?= $this->element('AdminLTE.sidebar/control') ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <?= $this->Html->script('AdminLTE./plugins/jquery/jquery.min') ?>
    <!-- Bootstrap 4 -->
    <?= $this->Html->script('AdminLTE./plugins/bootstrap/js/bootstrap.bundle.min') ?>
    <!-- overlayScrollbars -->
    <?= $this->Html->script('AdminLTE./plugins/overlayScrollbars/js/jquery.overlayScrollbars.min') ?>
    <!-- AdminLTE App -->
    <?= $this->Html->script('AdminLTE.adminlte.min') ?>
    <?php
    switch ($alertType) {
        case 'sweetalert':
            echo $this->Html->script('AdminLTE./plugins/sweetalert2/sweetalert2.min');
            break;
        case 'toastr':
            echo $this->Html->script('AdminLTE./plugins/toastr/toastr.min');
    }
    ?>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        // Set active classes in menu
        var url = location.pathname;
        // Will only work if string in href matches with location
        $('ul.nav a.nav-link[href="' + url + '"]').addClass('active');

        // Will also work for relative and absolute hrefs
        $('ul.nav a.nav-link')
            .filter(function() {
                return $(this).attr('href') == url;
            })
            .parents('.nav-treeview')
            .prev('a.nav-link')
            .addClass('active')
            .parent()
            .addClass('menu-open');
    </script>
    <?= $this->fetch('script') ?>
</body>

</html>
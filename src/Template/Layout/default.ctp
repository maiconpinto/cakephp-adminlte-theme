<?php use Cake\Core\Configure; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo Configure::read('Theme.title'); ?> | <?php echo $this->fetch('title'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <?php echo $this->Html->css('AdminLTE./plugins/fontawesome-free/css/all.min'); ?>
  <!-- Ionicons -->
  <?php echo $this->Html->css('//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'); ?>
  <!-- icheck bootstrap -->
  <?php echo $this->Html->css('AdminLTE./plugins/icheck-bootstrap/icheck-bootstrap.min'); ?>
  <!-- Theme style -->
  <?php echo $this->Html->css('AdminLTE.adminlte.min'); ?>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <?php echo $this->fetch('css'); ?>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <?php echo $this->element('nav-top'); ?>

  <?php echo $this->element('aside-main-sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $this->Flash->render(); ?>
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->fetch('content'); ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <?php echo $this->element('footer'); ?>
  </footer>

  <!-- Control Sidebar -->
  <?php echo $this->element('aside-control-sidebar'); ?>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php echo $this->Html->script('AdminLTE./plugins/jquery/jquery.min'); ?>
<!-- Bootstrap 4 -->
<?php echo $this->Html->script('AdminLTE./plugins/bootstrap/js/bootstrap.bundle.min'); ?>
<!-- AdminLTE App -->
<?php echo $this->Html->script('AdminLTE.adminlte.min'); ?>

<?= $this->Html->script('demo') ?>

<?php echo $this->fetch('script'); ?>

<?php echo $this->fetch('scriptBottom'); ?>

<script type="text/javascript">
  $(document).ready(function(){
    var a = $('a[href="<?php echo $this->Url->build() ?>"]');
    if (!a.parent().hasClass('has-treeview') && !a.parent().parent().hasClass('pagination')) {
      a.addClass('active').parents('.nav-treeview').css('display', 'block')
        .prev().addClass('active').parent().addClass('menu-open');
    }
  });
</script>
</body>
</html>

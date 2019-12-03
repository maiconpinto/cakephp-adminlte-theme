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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo $this->Url->build(); ?>"><?php echo Configure::read('Theme.logo.large') ?></a>
  </div>
  <?php echo $this->fetch('content'); ?>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<?php echo $this->Html->script('AdminLTE./plugins/jquery/jquery.min'); ?>
<!-- Bootstrap 4 -->
<?php echo $this->Html->script('AdminLTE./plugins/bootstrap/js/bootstrap.bundle.min'); ?>
<!-- AdminLTE App -->
<?php echo $this->Html->script('AdminLTE.adminlte.min'); ?>

<?php echo $this->fetch('script'); ?>

<?php echo $this->fetch('scriptBottom'); ?>
</body>
</html>
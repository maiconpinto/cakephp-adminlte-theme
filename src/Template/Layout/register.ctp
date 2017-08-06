<?php use Cake\Core\Configure; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo Configure::read('Theme.title'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <?php echo $this->Html->css('AdminLTE./bootstrap/css/bootstrap.min'); ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <?php echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?php echo $this->Html->css('AdminLTE./plugins/iCheck/square/blue'); ?>

  <?php echo $this->fetch('css'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo $this->Url->build('/'); ?>"><b><?php echo Configure::read('Theme.logo.large') ?></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <?php echo $this->fetch('content'); ?>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.html" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<?php echo $this->Html->script('AdminLTE./plugins/jQuery/jquery-2.2.3.min'); ?>
<!-- Bootstrap 3.3.5 -->
<?php echo $this->Html->script('AdminLTE./bootstrap/js/bootstrap.min'); ?>
<!-- iCheck -->
<?php echo $this->Html->script('AdminLTE./plugins/iCheck/icheck.min'); ?>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

<!-- AdminLTE for demo purposes -->
<?php echo $this->fetch('script'); ?>
<?php echo $this->fetch('scriptBottom'); ?>

</body>
</html>

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

  <?php echo $this->fetch('css'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?php echo $this->Url->build('/'); ?>"><?php echo Configure::read('Theme.logo.large'); ?></a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">John Doe</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <?php echo $this->Html->image('user1-128x128.jpg', array('alt' => 'User Image')); ?>
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <?php echo $this->Flash->render(); ?>
    <?php echo $this->fetch('content'); ?>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="<?php echo $this->Url->build('/pages/examples/login'); ?>">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2017 <b><a href="http://almsaeedstudio.com" class="text-black">Almsaeed Studio</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.2.3 -->
<?php echo $this->Html->script('AdminLTE./plugins/jQuery/jquery-2.2.3.min'); ?>
<!-- Bootstrap 3.3.5 -->
<?php echo $this->Html->script('AdminLTE./bootstrap/js/bootstrap.min'); ?>
</body>
</html>

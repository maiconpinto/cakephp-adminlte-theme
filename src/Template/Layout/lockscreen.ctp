<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo isset($theme['title']) ? $theme['title'] : 'AdminLTE 2 | Lockscreeen'; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <?php echo $this->Html->css('AdminLTE./bootstrap/css/bootstrap'); ?>
  <!-- Font Awesome -->
  <?php echo $this->Html->css('AdminLTE./plugins/font-awesome/css/font-awesome.min'); ?>
  <!-- Ionicons -->
  <?php echo $this->Html->css('AdminLTE./plugins/ionicons/css/ionicons.min'); ?>
  <!-- Theme style -->
  <?php echo $this->Html->css('AdminLTE.style.min'); ?>

  <?php echo $this->fetch('css'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo $this->Html->script('AdminLTE.html5shiv.min'); ?>
  <?php echo $this->Html->script('AdminLTE.respond.min'); ?>
  <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?php echo $this->Url->build('/'); ?>"><?php echo $theme['logo']['large'] ?></a>
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
    Copyright &copy; 2014-2015 <b><a href="http://almsaeedstudio.com" class="text-black">Almsaeed Studio</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.1.4 -->
<?php echo $this->Html->script('AdminLTE./plugins/jQuery/jQuery-2.1.4.min'); ?>
<!-- Bootstrap 3.3.5 -->
<?php echo $this->Html->script('AdminLTE./bootstrap/js/bootstrap'); ?>
</body>
</html>

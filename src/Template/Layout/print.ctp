<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo isset($theme['title']) ? $theme['title'] : 'AdminLTE 2'; ?></title>
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
      folder instead of downloading all of them to reduce the load. -->
  <?php echo $this->Html->css('AdminLTE.skins/skin-green-light.min'); ?>

  <?php echo $this->fetch('css'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo $this->Html->script('AdminLTE.html5shiv.min'); ?>
  <?php echo $this->Html->script('AdminLTE.respond.min'); ?>
  <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">

    <?php echo $this->fetch('content'); ?>

</div>
</body>
</html>

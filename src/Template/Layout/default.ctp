<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($theme['title']) ? $theme['title'] : 'AdminLTE 2'; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php echo $this->Html->css('AdminLTE./bootstrap/css/bootstrap'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/font-awesome/css/font-awesome.min'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/ionicons/css/ionicons.min'); ?>
    <?php echo $this->Html->css('AdminLTE.style.min'); ?>
    <?php echo $this->Html->css('AdminLTE.skins/skin-green-light.min'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/select2/select2'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/select2/select2-bootstrap.min'); ?>
    <?php echo $this->Html->css('AdminLTE./plugins/sweetalert/sweetalert'); ?>

    <?php echo $this->fetch('css'); ?>
    <?php echo $this->Html->script('AdminLTE.html5shiv.min'); ?>
    <?php echo $this->Html->script('AdminLTE.respond.min'); ?>
</head>
<body class="hold-transition skin-green-light sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo $this->Url->build('/'); ?>" class="logo">
                <span class="logo-mini"><?php echo $theme['logo']['mini'] ?></span>
                <span class="logo-lg"><?php echo $theme['logo']['large'] ?></span>
            </a>
            <?php echo $this->element('nav-top') ?>
        </header>

        <?php echo $this->element('aside-main-sidebar'); ?>

        <div class="content-wrapper">

            <?php echo $this->Flash->render(); ?>
            <?php echo $this->Flash->render('auth'); ?>
            <?php echo $this->fetch('content'); ?>

        </div>

        <?php echo $this->element('footer'); ?>

        <?php echo $this->element('aside-control-sidebar'); ?>
    <div class="control-sidebar-bg"></div>
</div>

<?php echo $this->Html->script('AdminLTE./plugins/jQuery/jQuery-2.1.4.min'); ?>
<?php echo $this->Html->script('AdminLTE./bootstrap/js/bootstrap'); ?>
<?php echo $this->Html->script('AdminLTE./plugins/slimScroll/jquery.slimscroll.min'); ?>
<?php echo $this->Html->script('AdminLTE./plugins/fastclick/fastclick'); ?>
<?php echo $this->Html->script('AdminLTE./plugins/select2/select2.min'); ?>
<?php echo $this->Html->script('AdminLTE./plugins/sweetalert/sweetalert.min'); ?>
<?php echo $this->Html->script('AdminLTE.script.min'); ?>
<?php echo $this->fetch('script'); ?>

<?php echo $this->fetch('scriptBottom'); ?>

<script type="text/javascript">
    $.fn.select2.defaults.set( "theme", "bootstrap" );

    $(document).ready(function(){
        $('select').select2();
        $(".navbar .menu").slimscroll({
            height: "200px",
            alwaysVisible: false,
            size: "3px"
        }).css("width", "100%");

        var a = $('a[href="<?php echo $this->request->webroot . $this->request->url ?>"]');
        if (!a.parent().hasClass('treeview')) {
            a.parent().addClass('active').parents('.treeview').addClass('active');
        }
    });
</script>
</body>
</html>

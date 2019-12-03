<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../index3.html" class="brand-link">
    <?php echo $this->Html->image('AdminLTELogo.png', ['alt' => 'AdminLTE Logo', 'class' => 'brand-image img-circle elevation-3', 'style' => 'opacity: .8']) ?>
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <?php echo $this->element('aside/user-panel'); ?>

    <!-- Sidebar Menu -->
      <?php echo $this->element('aside/sidebar-menu'); ?>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
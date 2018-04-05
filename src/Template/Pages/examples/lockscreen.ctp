<?php $this->layout = 'AdminLTE.lockscreen'; ?>

<!-- lockscreen credentials (contains the form) -->
<?php echo $this->Form->create(null, array('class' => 'lockscreen-credentials')); ?>
  <div class="input-group">
    <input type="password" class="form-control" placeholder="password">

    <div class="input-group-btn">
      <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
    </div>
  </div>
<?php echo $this->Form->end(); ?>
<!-- /.lockscreen credentials -->

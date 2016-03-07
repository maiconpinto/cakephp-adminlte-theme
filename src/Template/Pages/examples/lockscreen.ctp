<?php $this->layout = 'AdminLTE.lockscreen'; ?>

<?php echo $this->Form->create('User', array('class' => 'lockscreen-credentials')); ?>
  <div class="input-group">
    <input type="password" class="form-control" placeholder="password">

    <div class="input-group-btn">
      <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
    </div>
  </div>
</form>
<?php echo $this->Form->end(); ?>

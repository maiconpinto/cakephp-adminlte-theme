<?php

/**
 * @var \App\View\AppView $this
 */

$this->setLayout('AdminLTE.login-v2');
$this->assign('title', __('Recover Password (v2)'));
?>
<p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

<?= $this->Form->create() ?>
<div class="input-group mb-3">
    <?= $this->Form->password('password', ['placeholder' => __('Password'), 'class' => 'form-control']) ?>

    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
    </div>
</div>
<div class="input-group mb-3">
    <?= $this->Form->password('confirm_password', ['placeholder' => __('Confirm Password'), 'class' => 'form-control']) ?>

    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <?= $this->Form->button(__('Change password'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) ?>
    </div>
</div>
<?= $this->Form->end() ?>

<p class="mt-3 mb-1">
    <?= $this->Html->link(__('Login'), '/pages/examples/login-v2') ?>
</p>
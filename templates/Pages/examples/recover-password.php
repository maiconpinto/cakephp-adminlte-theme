<?php

/**
 * @var \App\View\AppView $this
 */
$this->setLayout('AdminLTE.login');
$this->assign('title', __('Recover Password'));
?>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

        <?= $this->Form->create(null, ['url' => '/pages/examples/login']) ?>
        <div class="input-group mb-3">
            <?= $this->Form->password('password', ['class' => 'form-control', 'placeholder' => 'Password']) ?>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <?= $this->Form->password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) ?>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?= $this->Form->button('Change Password', ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>

        <p class="mt-3 mb-1">
            <?= $this->Html->link('Login', '/pages/examples/login') ?>
        </p>
    </div>
</div>
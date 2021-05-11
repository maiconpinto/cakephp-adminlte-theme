<?php

/**
 * @var \App\View\AppView $this
 */

$this->setLayout('AdminLTE.login-v2');
$this->assign('title', __('Forgot Password (v2)'));
?>
<p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

<?= $this->Form->create() ?>
<div class="input-group mb-3">
    <?= $this->Form->email('email', ['class' => 'form-control', 'placeholder' => __('Email')]) ?>

    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-envelope"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <?= $this->Form->button(__('Request new password'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) ?>
    </div>
</div>
<?= $this->Form->end() ?>

<p class="mt-3 mb-1">
    <?= $this->Html->link(__('Login'), '/pages/examples/login-v2') ?>
</p>
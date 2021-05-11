<?php

/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;

$this->setLayout('AdminLTE.login');
$this->assign('title', __('Forgot Password'));
?>

<div class="card">
    <div class="card-body login-card-body">
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
            <?= $this->Html->link('Login', '/pages/examples/login') ?>
        </p>
        <?php if (Configure::read('Theme.login.show_register')) : ?>
            <p class="mb-0">
                <?= $this->Html->link('Register a new membership', '/pages/examples/register', ['class' => 'text-center']) ?>
            </p>
        <?php endif; ?>
    </div>
</div>
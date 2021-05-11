<?php

/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;

$this->setLayout('AdminLTE.login-v2');
$this->assign('title', __('Log in (v2)'));
?>

<p class="login-box-msg">Sign in to start your session</p>

<?= $this->Form->create() ?>
<div class="input-group mb-3">
    <?= $this->Form->email('email', ['class' => 'form-control', 'placeholder' => __('Email')]) ?>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-envelope"></span>
        </div>
    </div>
</div>
<div class="input-group mb-3">
    <?= $this->Form->password('password', ['placeholder' => __('Password'), 'class' => 'form-control']) ?>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <?php if (Configure::read('Theme.login.show_remember')) : ?>
            <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <?= $this->Form->label('remember', __('Remember Me')) ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-4">
        <?= $this->Form->button(__('Sign In'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) ?>
    </div>
</div>
<?= $this->Form->end() ?>

<?php if (Configure::read('Theme.login.show_social')) : ?>
    <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
    </div>
<?php endif; ?>

<p class="mb-1">
    <?= $this->Html->link('I forgot my password', '/pages/examples/forgot-password-v2') ?>
</p>
<?php if (Configure::read('Theme.login.show_register')) : ?>
    <p class="mb-0">
        <?= $this->Html->link('Register a new membership', '/pages/examples/register-v2', ['class' => 'text-center']) ?>
    </p>
<?php endif; ?>
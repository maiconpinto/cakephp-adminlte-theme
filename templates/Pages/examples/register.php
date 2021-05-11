<?php

/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;

$this->setLayout('AdminLTE.login');
$this->assign('title', __('Registration Page'));
?>

<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <?= $this->Form->create() ?>
        <div class="input-group mb-3">
            <?= $this->Form->text('full_name', ['class' => 'form-control', 'placeholder' => __('Full Name')]) ?>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
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
        <div class="input-group mb-3">
            <?= $this->Form->password('confirm_password', ['placeholder' => __('Retype Password'), 'class' => 'form-control']) ?>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" name="terms" id="agreeTerms">
                    <label for="agreeTerms">
                        I agree to the <a href="#">terms</a>
                    </label>
                </div>
            </div>
            <div class="col-4">
                <?= $this->Form->button(__('Register'), ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>

        <?php if (Configure::read('Theme.login.show_social')) : ?>
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign up using Google+
                </a>
            </div>
        <?php endif; ?>

        <p class="mb-1">
            <?= $this->Html->link('I already have a membership', '/pages/examples/login') ?>
        </p>
    </div>
</div>
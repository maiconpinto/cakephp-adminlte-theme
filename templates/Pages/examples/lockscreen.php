<?php

/**
 * @var \App\View\AppView $this
 */

$this->setLayout('AdminLTE.lockscreen');
$this->assign('title', __('Lockscreen'));
?>

<div class="lockscreen-name">John Doe</div>

<div class="lockscreen-item">
    <div class="lockscreen-image">
        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['alt' => 'User Image']) ?>
    </div>
    <?= $this->Form->create(null, ['class' => 'lockscreen-credentials']) ?>
    <div class="input-group">
        <?= $this->Form->password('password', ['class' => 'form-control', 'placeholder' => 'Password']) ?>
        <div class="input-group-append">
            <button type="button" class="btn">
                <i class="fas fa-arrow-right text-muted"></i>
            </button>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
<?php
/**
 * @var \App\View\AppView $this
 */
use Cake\Core\Configure;
?>
<a href="/" class="brand-link">
    <?= $this->Html->image(Configure::read('Theme.logo'), ['alt' => Configure::read('Theme.title'), 'class' => 'brand-image img-circle elevation-3', 'style' => 'opacity: .8']) ?>
    <span class="brand-text font-weight-light"><?= Configure::read('Theme.title') ?></span>
</a>

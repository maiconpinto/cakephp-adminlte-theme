<?php

/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Simple Search Form'));
?>

<section class="content">
    <div class="container-fluid">
        <h2 class="text-center display-4">Search</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?= $this->Form->create(null, ['type' => 'get', 'url' => '/pages/search/simple-results']) ?>
                <div class="input-group">
                    <?= $this->Form->search('search', ['class' => 'form-control form-control-lg', 'placeholder' => 'Type your keywords here']) ?>
                    <div class="input-group-append">
                        <?= $this->Form->button($this->Html->tag('i', '', ['class' => 'fa fa-search']), ['class' => 'btn btn-lg btn-default', 'escapeTitle' => false]) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
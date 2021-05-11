<?php

/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Enhanced Search Form'));
?>

<section class="content">
    <div class="container-fluid">
        <h2 class="text-center display-4">Enhanced Search</h2>
        <?= $this->Form->create(null, ['url' => '/pages/search/enhanced-results', 'type' => 'get']) ?>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <?= $this->Form->label('result_type') ?>
                            <?= $this->Form->select('result_type', ['text' => 'Text only', 'images' => 'Images', 'video' => 'Video'], ['class' => 'select2', 'multiple' => true, 'data-placeholder' => 'Any', 'style' => 'width:100%']) ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <?= $this->Form->label('sort_order') ?>
                            <?= $this->Form->select('sort_order', ['asc' => 'ASC', 'desc' => 'DESC'], ['class' => 'select2', 'style' => 'width: 100%']) ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <?= $this->Form->label('order_by') ?>
                            <?= $this->Form->select('order_by', ['title' => 'Title', 'date' => 'Date'], ['class' => 'select2', 'style' => 'width:100%']) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-lg">
                        <?= $this->Form->search('search', ['class' => 'form-control form-control-lg', 'placeholder' => 'Type your keywords here', 'value' => 'Lorem ipsum']) ?>
                        <div class="input-group-append">
                            <?= $this->Form->button($this->Html->tag('i', '', ['class' => 'fa fa-search']), ['class' => 'btn btn-lg btn-default', 'escapeTitle' => false]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</section>

<?= $this->Html->css('AdminLTE./plugins/select2/css/select2.min', ['block' => true]) ?>
<?= $this->Html->script([
    'AdminLTE.demo',
    'AdminLTE./plugins/select2/js/select2.full.min',
], ['block' => true]) ?>
<?php $this->append('script'); ?>
<script>
    $(function() {
        $('.select2').select2()
    });
</script>
<?php $this->end(); ?>
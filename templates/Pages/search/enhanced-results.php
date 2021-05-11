<?php

/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Enhanced Search Results'));
?>

<section class="content-header">
    <div class="container-fluid">
        <h2 class="text-center display-4">Enhanced Search</h2>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <?= $this->Form->create(null, ['type' => 'get', 'valueSources' => 'query']) ?>
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
                        <?= $this->Form->search('search', ['class' => 'form-control form-control-lg', 'placeholder' => 'Type your keywords here', 'default' => 'Lorem ipsum']) ?>
                        <div class="input-group-append">
                            <?= $this->Form->button($this->Html->tag('i', '', ['class' => 'fa fa-search']), ['class' => 'btn btn-lg btn-default', 'escapeTitle' => false]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
        <div class="row mt-3">
            <div class="col-md-10 offset-md-1">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row">
                            <div class="col px-4">
                                <div>
                                    <div class="float-right">2021-04-20 04:04pm</div>
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <?= $this->Html->image('AdminLTE.photo1.png', ['class' => 'img-fluid', 'alt' => 'Photo', 'style' => 'max-height:160px']) ?>
                            </div>
                            <div class="col px-4">
                                <div>
                                    <div class="float-right">2021-04-20 10:14pm</div>
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <iframe width="240" height="160" src="https://www.youtube.com/embed/WEkSYw3o5is?controls=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="border-0" allowfullscreen></iframe>
                            </div>
                            <div class="col px-4">
                                <div>
                                    <div class="float-right">2021-04-20 11:54pm</div>
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p class="mb-0">consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
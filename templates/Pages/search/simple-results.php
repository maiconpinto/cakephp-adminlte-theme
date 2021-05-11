<?php

/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Simple Search Results'));
?>
<section class="content-header">
    <div class="container-fluid">
        <h2 class="text-center display-4">Search</h2>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?= $this->Form->create(null, ['type' => 'get', 'valueSources' => 'query']) ?>
                <div class="input-group input-group-lg">
                    <?= $this->Form->search('search', ['class' => 'form-control form-control-lg', 'placeholder' => 'Type your keywords here', 'default' => 'Lorem ipsum']) ?>
                    <div class="input-group-append">
                        <?= $this->Form->button($this->Html->tag('i', '', ['class' => 'fa fa-search']), ['class' => 'btn btn-lg btn-default', 'escapeTitle' => false]) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>

            </div>
        </div>
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
                                <?= $this->Html->image('AdminLTE.photo1.png', ['class' => 'img-fluid', 'alt' => 'Photo', 'style' => 'max-height: 160px;']) ?>
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
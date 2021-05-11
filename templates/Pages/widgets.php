<?php

/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Widgets'));
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Widgets</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Widgets</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <h5 class="mb-2">Info Box</h5>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Messages</span>
                        <span class="info-box-number">1,410</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <span class="info-box-number">410</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Uploads</span>
                        <span class="info-box-number">13,648</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">93,139</span>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mb-2">Info Box With Custom Shadows <small><i>Using Bootstrap's Shadow Utility</i></small></h5>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow-none">
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Shadows</span>
                        <span class="info-box-number">None</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow-sm">
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Shadows</span>
                        <span class="info-box-number">Small</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow">
                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Shadows</span>
                        <span class="info-box-number">Regular</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow-lg">
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Shadows</span>
                        <span class="info-box-number">Large</span>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mt-4 mb-2">Info Box With <code>bg-*</code></h5>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <span class="info-box-number">41,410</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-success">
                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">41,410</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-warning">
                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Events</span>
                        <span class="info-box-number">41,410</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-danger">
                    <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Comments</span>
                        <span class="info-box-number">41,410</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mt-4 mb-2">Info Box With <code>bg-gradient-*</code></h5>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <span class="info-box-number">41,410</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-success">
                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">41,410</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-warning">
                    <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Events</span>
                        <span class="info-box-number">41,410</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-gradient-danger">
                    <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Comments</span>
                        <span class="info-box-number">41,410</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <h5 class="mb-2 mt-4">Small Box</h5>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="overlay">
                        <i class="fas fa-3x fa-sync-alt"></i>
                    </div>
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="overlay dark">
                        <i class="fas fa-3x fa-sync-alt"></i>
                    </div>
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <h4 class="mb-2 mt-4">Cards</h4>
        <h5 class="mb-2">Abilities</h5>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Expandable</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Collapsable</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Removable</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Maximizable</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Card Refresh</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="<?= $this->Url->build('/pages/widgets') ?>" data-source-selector="#card-refresh-content">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
                <div class="d-none" id="card-refresh-content">
                    The body of the card after card refresh
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">All together</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="<?= $this->Url->build('/pages/widgets') ?>" data-source-selector="#card-refresh-content" data-load-on-init="false">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                <i class="fas fa-expand"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Loading state</h3>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                    <div class="overlay">
                        <i class="fas fa-2x fa-sync-alt"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Loading state (dark)</h3>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                    <div class="overlay dark">
                        <i class="fas fa-2x fa-sync-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mb-2">Custom Shadows Variations <small><i>Using Bootstrap's Shadow Utility</i></small></h5>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary shadow-none">
                    <div class="card-header">
                        <h3 class="card-title">Shadow - None</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-success shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Shadow - Small</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-warning shadow">
                    <div class="card-header">
                        <h3 class="card-title">Shadow - Regular</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-danger shadow-lg">
                    <div class="card-header">
                        <h3 class="card-title">Shadow - Large</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>


        <h5 class="mb-2">Colors Variations</h5>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Primary</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Success</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Warning</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Danger</h3>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Primary Outline</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title">Success Outline</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-outline card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Warning Outline</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-outline card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Danger Outline</h3>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary">
                    <div class="card-header">
                        <h3 class="card-title">Primary</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success">
                    <div class="card-header">
                        <h3 class="card-title">Success</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning">
                    <div class="card-header">
                        <h3 class="card-title">Warning</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger">
                    <div class="card-header">
                        <h3 class="card-title">Danger</h3>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card bg-gradient-primary">
                    <div class="card-header">
                        <h3 class="card-title">Primary Gradient</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-gradient-success">
                    <div class="card-header">
                        <h3 class="card-title">Success Gradient</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-gradient-warning">
                    <div class="card-header">
                        <h3 class="card-title">Warning Gradient</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-gradient-danger">
                    <div class="card-header">
                        <h3 class="card-title">Danger Gradient</h3>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>


        <h4 class="mt-4 mb-2">Direct Chat</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline direct-chat direct-chat-primary">
                    <div class="card-header">
                        <h3 class="card-title">Direct Chat</h3>

                        <div class="card-tools">
                            <span title="3 New Messages" class="badge bg-primary">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                            </div>

                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                            </div>
                        </div>

                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'contacts-list-img']) ?>

                                        <div class="contacts-list-info">
                                            <span class="contacts-list-name">
                                                Count Dracula
                                                <small class="contacts-list-date float-right">2/28/2015</small>
                                            </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <div class="input-group">
                            <?= $this->Form->text('message', ['placeholder' => 'Type Message...', 'class' => 'form-control']) ?>
                            <span class="input-group-append">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-danger']) ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-success card-outline direct-chat direct-chat-success">
                    <div class="card-header">
                        <h3 class="card-title">Direct Chat</h3>

                        <div class="card-tools">
                            <span title="3 New Messages" class="badge bg-success">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                            </div>

                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                            </div>
                        </div>

                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'contacts-list-img']) ?>

                                        <div class="contacts-list-info">
                                            <span class="contacts-list-name">
                                                Count Dracula
                                                <small class="contacts-list-date float-right">2/28/2015</small>
                                            </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <div class="input-group">
                            <?= $this->Form->text('message', ['placeholder' => 'Type Message...', 'class' => 'form-control']) ?>
                            <span class="input-group-append">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-danger']) ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-warning direct-chat direct-chat-warning">
                    <div class="card-header">
                        <h3 class="card-title">Direct Chat</h3>

                        <div class="card-tools">
                            <span title="3 New Messages" class="badge bg-danger">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                            </div>

                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                            </div>
                        </div>

                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'contacts-list-img']) ?>

                                        <div class="contacts-list-info">
                                            <span class="contacts-list-name">
                                                Count Dracula
                                                <small class="contacts-list-date float-right">2/28/2015</small>
                                            </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <div class="input-group">
                            <?= $this->Form->text('message', ['placeholder' => 'Type Message...', 'class' => 'form-control']) ?>
                            <span class="input-group-append">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-danger']) ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-danger direct-chat direct-chat-danger">
                    <div class="card-header">
                        <h3 class="card-title">Direct Chat</h3>

                        <div class="card-tools">
                            <span title="3 New Messages" class="badge">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                            </div>

                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                            </div>
                        </div>

                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'contacts-list-img', 'alt' => 'User Avatar']) ?>

                                        <div class="contacts-list-info">
                                            <span class="contacts-list-name">
                                                Count Dracula
                                                <small class="contacts-list-date float-right">2/28/2015</small>
                                            </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <div class="input-group">
                            <?= $this->Form->text('message', ['placeholder' => 'Type Message...', 'class' => 'form-control']) ?>
                            <span class="input-group-append">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-danger']) ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mb-2">Custom Shadows Variations <small><i>Using Bootstrap's Shadow Utility</i></small></h5>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline direct-chat direct-chat-primary shadow-none">
                    <div class="card-header">
                        <h3 class="card-title">Shadow - None</h3>

                        <div class="card-tools">
                            <span title="3 New Messages" class="badge bg-primary">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                            </div>

                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                            </div>
                        </div>

                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'contacts-list-img', 'alt' => 'User Avatar']) ?>

                                        <div class="contacts-list-info">
                                            <span class="contacts-list-name">
                                                Count Dracula
                                                <small class="contacts-list-date float-right">2/28/2015</small>
                                            </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <div class="input-group">
                            <?= $this->Form->text('message', ['placeholder' => 'Type Message...', 'class' => 'form-control']) ?>
                            <span class="input-group-append">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-danger']) ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-success card-outline direct-chat direct-chat-success shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Shadow - Small</h3>

                        <div class="card-tools">
                            <span title="3 New Messages" class="badge bg-success">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                            </div>

                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                            </div>
                        </div>

                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'contacts-list-img', 'alt' => 'User Avatar']) ?>

                                        <div class="contacts-list-info">
                                            <span class="contacts-list-name">
                                                Count Dracula
                                                <small class="contacts-list-date float-right">2/28/2015</small>
                                            </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <div class="input-group">
                            <?= $this->Form->text('message', ['placeholder' => 'Type Message...', 'class' => 'form-control']) ?>
                            <span class="input-group-append">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-danger']) ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-warning direct-chat direct-chat-warning shadow">
                    <div class="card-header">
                        <h3 class="card-title">Shadow - Regular</h3>

                        <div class="card-tools">
                            <span title="3 New Messages" class="badge bg-danger">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                            </div>

                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                            </div>
                        </div>

                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'contacts-list-img']) ?>

                                        <div class="contacts-list-info">
                                            <span class="contacts-list-name">
                                                Count Dracula
                                                <small class="contacts-list-date float-right">2/28/2015</small>
                                            </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <div class="input-group">
                            <?= $this->Form->text('message', ['placeholder' => 'Type Message...', 'class' => 'form-control']) ?>
                            <span class="input-group-append">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-danger']) ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-danger direct-chat direct-chat-danger shadow-lg">
                    <div class="card-header">
                        <h3 class="card-title">Shadow - Large</h3>

                        <div class="card-tools">
                            <span title="3 New Messages" class="badge">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                            </div>

                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'direct-chat-img', 'alt' => 'Message User Image']) ?>
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                            </div>
                        </div>

                        <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'contacts-list-img', 'alt' => 'User Avatar']) ?>

                                        <div class="contacts-list-info">
                                            <span class="contacts-list-name">
                                                Count Dracula
                                                <small class="contacts-list-date float-right">2/28/2015</small>
                                            </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <div class="input-group">
                            <?= $this->Form->text('message', ['placeholder' => 'Type Message...', 'class' => 'form-control']) ?>
                            <span class="input-group-append">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-danger']) ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="mt-4 mb-4">Social Widgets</h3>

        <div class="row">
            <div class="col-md-4">
                <div class="card card-widget widget-user-2">
                    <div class="widget-user-header bg-warning">
                        <div class="widget-user-image">
                            <?= $this->Html->image('AdminLTE.user7-128x128.jpg', ['class' => 'img-circle elevation-2', 'alt' => 'User Avatar']) ?>
                        </div>
                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                        <h5 class="widget-user-desc">Lead Developer</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Projects <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Tasks <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Completed Projects <span class="float-right badge bg-success">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Followers <span class="float-right badge bg-danger">842</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username">Alexander Pierce</h3>
                        <h5 class="widget-user-desc">Founder & CEO</h5>
                    </div>
                    <div class="widget-user-image">
                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'img-circle elevation-2', 'alt' => 'User Avatar']) ?>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">SALES</span>
                                </div>
                            </div>
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header text-white" style="background: url('<?= $this->Url->image('AdminLTE.photo1.png') ?>') center center;">
                        <h3 class="widget-user-username text-right">Elizabeth Pierce</h3>
                        <h5 class="widget-user-desc text-right">Web Designer</h5>
                    </div>
                    <div class="widget-user-image">
                        <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'img-circle', 'alt' => 'User Avatar']) ?>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">SALES</span>
                                </div>
                            </div>
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                            <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
                            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                            <span class="description">Shared publicly - 7:30 PM Today</span>
                        </div>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" title="Mark as read">
                                <i class="far fa-circle"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->Html->image('AdminLTE.photo2.png', ['class' => 'img-fluid pad', 'alt' => 'Photo']) ?>

                        <p>I took this photo this morning. What do you guys think?</p>
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                        <span class="float-right text-muted">127 likes - 3 comments</span>
                    </div>
                    <div class="card-footer card-comments">
                        <div class="card-comment">
                            <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'img-circle img-sm', 'alt' => 'User Image']) ?>

                            <div class="comment-text">
                                <span class="username">
                                    Maria Gonzales
                                    <span class="text-muted float-right">8:03 PM Today</span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                            </div>
                        </div>
                        <div class="card-comment">
                            <?= $this->Html->image('AdminLTE.user4-128x128.jpg', ['class' => 'img-circle img-sm', 'alt' => 'User Image']) ?>

                            <div class="comment-text">
                                <span class="username">
                                    Luna Stark
                                    <span class="text-muted float-right">8:03 PM Today</span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <div class="input-group">
                            <?= $this->Form->text('message', ['placeholder' => 'Type Message...', 'class' => 'form-control']) ?>
                            <span class="input-group-append">
                                <?= $this->Form->button('Send', ['class' => 'btn btn-danger']) ?>
                            </span>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                            <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
                            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                            <span class="description">Shared publicly - 7:30 PM Today</span>
                        </div>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" title="Mark as read">
                                <i class="far fa-circle"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind
                            texts. Separated they live in Bookmarksgrove right at</p>

                        <p>the coast of the Semantics, a large language ocean.
                            A small river named Duden flows by their place and supplies
                            it with the necessary regelialia. It is a paradisematic
                            country, in which roasted parts of sentences fly into
                            your mouth.</p>

                        <div class="attachment-block clearfix">
                            <?= $this->Html->image('AdminLTE.photo1.png', ['class' => 'attachment-img', 'alt' => 'Attachment Image']) ?>

                            <div class="attachment-pushed">
                                <h4 class="attachment-heading"><a href="https://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                                <div class="attachment-text">
                                    Description about the attachment can be placed here.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                        <span class="float-right text-muted">45 likes - 2 comments</span>
                    </div>
                    <div class="card-footer card-comments">
                        <div class="card-comment">
                            <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'img-circle img-sm', 'alt' => 'User Image']) ?>

                            <div class="comment-text">
                                <span class="username">
                                    Maria Gonzales
                                    <span class="text-muted float-right">8:03 PM Today</span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                            </div>
                        </div>
                        <div class="card-comment">
                            <?= $this->Html->image('AdminLTE.user5-128x128.jpg', ['class' => 'img-circle img-sm', 'alt' => 'User Image']) ?>

                            <div class="comment-text">
                                <span class="username">
                                    Nora Havisham
                                    <span class="text-muted float-right">8:03 PM Today</span>
                                    The point of using Lorem Ipsum is that it hrs a morer-less
                                    normal distribution of letters, as opposed to using
                                    'Content here, content here', making it look like readable English.
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?= $this->Form->create() ?>
                        <?= $this->Html->image('AdminLTE.user4-128x128.jpg', ['class' => 'img-fluid img-circle img-sm', 'alt' => 'Alt Text']) ?>
                        <div class="img-push">
                            <?= $this->Form->text('comment', ['class' => 'form-control form-control-sm', 'placeholder' => 'Press enter to post comment']) ?>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mb-2">Custom Shadows Variations <small><i>Using Bootstrap's Shadow Utility</i></small></h5>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-widget widget-user-2 shadow-sm">
                    <div class="widget-user-header bg-warning">
                        <div class="widget-user-image">
                            <?= $this->Html->image('AdminLTE.user7-128x128.jpg', ['class' => 'img-circle elevation-2', 'alt' => 'User Avatar']) ?>
                        </div>
                        <h3 class="widget-user-username">Nadia Carmichael</h3>
                        <h5 class="widget-user-desc">Lead Developer</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Projects <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Tasks <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Completed Projects <span class="float-right badge bg-success">12</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Followers <span class="float-right badge bg-danger">842</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-widget widget-user shadow">
                    <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username">Alexander Pierce</h3>
                        <h5 class="widget-user-desc">Founder & CEO</h5>
                    </div>
                    <div class="widget-user-image">
                        <?= $this->Html->image('AdminLTE.user1-128x128.jpg', ['class' => 'img-circle elevation-2', 'alt' => 'User Avatar']) ?>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">SALES</span>
                                </div>
                            </div>
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-widget widget-user shadow-lg">
                    <div class="widget-user-header text-white" style="background: url('<?= $this->Url->image('AdminLTE.photo1.png') ?>') center center;">
                        <h3 class="widget-user-username text-right">Elizabeth Pierce</h3>
                        <h5 class="widget-user-desc text-right">Web Designer</h5>
                    </div>
                    <div class="widget-user-image">
                        <?= $this->Html->image('AdminLTE.user3-128x128.jpg', ['class' => 'img-circle', 'alt' => 'User Avatar']) ?>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">SALES</span>
                                </div>
                            </div>
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mb-2">Card with Image Overlay</h5>
        <div class="card card-success">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                            <?= $this->Html->image('AdminLTE.photo1.png', ['class' => 'card-img-top', 'alt' => 'Dist Photo 1']) ?>
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title text-primary text-white">Card Title</h5>
                                <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                                <a href="#" class="text-white">Last update 2 mins ago</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2">
                            <?= $this->Html->image('AdminLTE.photo2.png', ['class' => 'card-img-top', 'alt' => 'Dist Photo 2']) ?>
                            <div class="card-img-overlay d-flex flex-column justify-content-center">
                                <h5 class="card-title text-white mt-5 pt-2">Card Title</h5>
                                <p class="card-text pb-2 pt-1 text-white">
                                    Lorem ipsum dolor sit amet, <br>
                                    consectetur adipisicing elit <br>
                                    sed do eiusmod tempor.
                                </p>
                                <a href="#" class="text-white">Last update 15 hours ago</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2">
                            <?= $this->Html->image('AdminLTE.photo3.jpg', ['class' => 'card-img-top', 'alt' => 'Dist Photo 3']) ?>
                            <div class="card-img-overlay">
                                <h5 class="card-title text-primary">Card Title</h5>
                                <p class="card-text pb-1 pt-1 text-white">
                                    Lorem ipsum dolor <br>
                                    sit amet, consectetur <br>
                                    adipisicing elit sed <br>
                                    do eiusmod tempor. </p>
                                <a href="#" class="text-primary">Last update 3 days ago</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
</a>

<?= $this->Html->script('demo', ['block' => true]) ?>
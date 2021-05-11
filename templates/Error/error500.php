<?php

/**
 * @var \App\View\AppView $this
 * @var string $message
 * @var string $code
 * @var string $url
 * @var \Cake\Core\Exception\Exception $error
 */

$this->setLayout('AdminLTE.default');
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Server Error</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Server Error</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="error-page">
        <h2 class="headline text-danger"><?= $code ?></h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-danger"></i> <?= $message ?></h3>

            <p>
                We will work on fixing that right away.
                Meanwhile, you may <a href="/">return home</a> or try using the search form.
            </p>

            <form class="search-form">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

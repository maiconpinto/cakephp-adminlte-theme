<?php

/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Editors'));
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Text Editors</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Text Editors</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Summernote
                    </h3>
                </div>
                <div class="card-body">
                    <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
                </div>
                <div class="card-footer">
                    Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        CodeMirror
                    </h3>
                </div>
                <div class="card-body p-0">
                    <textarea id="codeMirrorDemo" class="p-3">
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
              </textarea>
                </div>
                <div class="card-footer">
                    Visit <a href="https://codemirror.net/">CodeMirror</a> documentation for more examples and information about the plugin.
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->Html->css([
    'AdminLTE./plugins/summernote/summernote-bs4.min',
    'AdminLTE./plugins/codemirror/codemirror',
    'AdminLTE./plugins/codemirror/theme/monokai',
    'AdminLTE./plugins/simplemde/simplemde.min'
], ['block' => true]) ?>

<?= $this->Html->script([
    'AdminLTE.demo',
    'AdminLTE./plugins/summernote/summernote-bs4.min',
    'AdminLTE./plugins/codemirror/codemirror',
    'AdminLTE./plugins/codemirror/mode/css/css',
    'AdminLTE./plugins/codemirror/mode/xml/xml',
    'AdminLTE./plugins/codemirror/mode/htmlmixed/htmlmixed',
], ['block' => true]) ?>

<?php $this->append('script'); ?>
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
<?php $this->end(); ?>
---
layout: page
title: Quick start
permalink: start
color: green
---

<header id="header" class="header">
    <div class="container">
        <div class="branding">
            <h1 class="logo"><a href="/">
                    <span class="icon_documents_alt icon" aria-hidden="true"></span>
                    <span class="text-highlight">CakePHP</span>
                    <span class="text-bold">AdminLTE</span>
                </a></h1>
        </div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Quick Start</li>
        </ol>
    </div>
</header>

<div class="doc-wrapper">
    <div class="container">
        <div id="doc-header" class="doc-header text-center">
            <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i>Quick Start</h1>
            <div class="meta"><i class="fa fa-clock"></i>Last updated: November 21, 2018</div>
        </div>
        <div class="doc-body row">
            <div class="doc-content col-md-9 col-12 order-1">
                <div class="content-inner">
                    <section id="installation-section" class="doc-section">
                        <h2 class="section-title">Installation</h2>
                        <div class="section-block">
                            <p>You can install using <a href="http://getcomposer.org">composer</a>.</p>
                            <div class="code-block">
                                <pre><code class="language-handlebars">composer require maiconpinto/cakephp-adminlte-theme</code></pre>
                            </div><!--//code-block-->
                        </div>
                    </section>
                    <section id="enable-plugin-section" class="doc-section">
                        <h2 class="section-title">Enable Plugin</h2>
                        <div class="section-block">
                            <div class="code-block">
                                <pre><code class="language-php">// config/bootstrap.php

Plugin::load('AdminLTE', ['bootstrap' => true, 'routes' => true]);</code></pre>
                            </div><!--//code-block-->
                        </div>
                    </section>
                    <section id="enable-theme-section" class="doc-section">
                        <h2 class="section-title">Enable Theme</h2>
                        <div class="section-block">
                            <div class="code-block">
                                <pre><code class="language-php">// src/Controller/AppController.php

public function beforeRender(Event $event)
{
    $this->viewBuilder()->setTheme('AdminLTE');

    // For CakePHP before 3.5
    $this->viewBuilder()->theme('AdminLTE');
}
</code></pre>
                            </div><!--//code-block-->
                        </div>
                    </section>
                    <section id="enable-form-section" class="doc-section">
                        <h2 class="section-title">Enable Form</h2>
                        <div class="section-block">
                            <div class="code-block">
                                <pre><code class="language-php">// src/View/AppView.php

public function initialize()
{
    $this->loadHelper('Form', ['className' => 'AdminLTE.Form']);
}
</code></pre>
                            </div><!--//code-block-->
                        </div>
                    </section>
                    <section id="configure-section" class="doc-section">
                        <h2 class="section-title">Configure</h2>
                        <div class="section-block">
                            <div class="code-block">
                                <pre><code class="language-php">// To customize configuration paste it at end of file config/bootstrap.php

Configure::write('Theme', [
    'title' => 'AdminLTE',
    'logo' => [
        'mini' => '<b>A</b>LT',
        'large' => '<b>Admin</b>LTE'
    ],
    'login' => [
        'show_remember' => true,
        'show_register' => true,
        'show_social' => true
    ],
    'folder' => ROOT,
    'skin' => 'blue' // default is 'blue'
]);
</code></pre>
                            </div><!--//code-block-->
                        </div>
                    </section>
                    <section id="customize-section" class="doc-section">
                        <h2 class="section-title">Customize</h2>
                        <div class="section-block">
                            <p>If you want to <a href="https://github.com/maiconpinto/cakephp-adminlte-theme/wiki/Customize-Layout" target="_blank">Customize Layout</a></p>
                        </div>
                    </section>
                    <section id="page-debug-section" class="doc-section">
                        <h2 class="section-title">Page debug</h2>
                        <div class="section-block">
                            <p>Added link to default page of CakePHP.</p>
                            <img src="{{ '/assets/docs/page-debug.png' | prepend: site.url }}" class="img-fluid" alt="Page Debug">
                        </div>
                    </section>
                    <section id="contributing-section" class="doc-section">
                        <h2 class="section-title">Contributing</h2>
                        <div class="section-block">
                            <ul>
                                <li>1. Fork it</li>
                                <li>2. Create your feature branch (`git checkout -b my-new-feature`)</li>
                                <li>3. Commit your changes (`git commit -am 'Add some feature'`)</li>
                                <li>4. Push to the branch (`git push origin my-new-feature`)</li>
                                <li>5. Create new Pull Request</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                <div id="doc-nav" class="doc-nav">
                    <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                    <a href="#installation-section" class="nav-link scrollto">Installation</a>
                    <a href="#enable-plugin-section" class="nav-link scrollto">Enable Plugin</a>
                    <a href="#enable-theme-section" class="nav-link scrollto">Enable Theme</a>
                    <a href="#enable-form-section" class="nav-link scrollto">Enable Form</a>
                    <a href="#configure-section" class="nav-link scrollto">Configure</a>
                    <a href="#customize-section" class="nav-link scrollto">Customize</a>
                    <a href="#page-debug-section" class="nav-link scrollto">Page Debug</a>
                    <a href="#contributing-section" class="nav-link scrollto">Contributing</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
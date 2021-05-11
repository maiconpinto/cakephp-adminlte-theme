# CakePHP AdminLTE Theme (2.1.0)

**What's the news**

The AdminLTE was updated version to 3.1.0.

The CakePHP was updated version compatible to 4.0.0.

This release 2.1.0 is can be considered the stable version, as indicated in the [SemVer.org](https://semver.org/) recommendations.

### Installation

You can install using [composer](http://getcomposer.org).

```
composer require maiconpinto/cakephp-adminlte-theme
```

### Enable Plugin

```php
// src/Application.php

public function bootstrap()
{
    $this->addPlugin('AdminLTE');
}
```

### Enable Theme

```php
// src/Controller/AppController.php

public function beforeRender(Event $event)
{
    $this->viewBuilder()->setTheme('AdminLTE');
}
```

### Enable Form

```php
// src/View/AppView.php

public function initialize()
{
    $this->loadHelper('Form', ['className' => 'AdminLTE.Form']);
}
```

### Configure

````php
// new config/theme.php file

return [
    'Theme' => [
        'title' => 'AdminLTE 3',
        'logo' => 'AdminLTE.AdminLTELogo.png',
        'login' => [
            'show_remember' => true,
            'show_register' => true,
            'show_social' => true,
        ],
        'layout' => [
            'boxed' => false,
            'sidebar_collapse' => false,
            'fixed' => [
                'sidebar' => true,
                'navbar' => false,
                'footer' => false,
            ],
        ],
        // select 'sweetalert', 'toastr', 'default'
        'flash' => 'default',
        'iframe' => false,
    ]
];


# Customize Layout

If you want to [Customize Layout](https://github.com/maiconpinto/cakephp-adminlte-theme/wiki/Customize-Layout)

# What's the features

### Layouts

There are 4 layout files.

- default **it's the main layout**
- lockscreen
- login
- login-v2

### View Blocks

There are 2 Blocks where you can extend your theme.

- **css**

```php
<?php echo $this->fetch('css'); ?>
````

One example is `templates/Pages/home.php`:

```php
<?php echo $this->Html->css('AdminLTE./plugins/daterangepicker/daterangepicker', ['block' => 'css']); ?>
```

- **script**

```php
<?php echo $this->fetch('script'); ?>
```

One example is `templates/Pages/home.ctp`:

```php
<?php echo $this->Html->script('AdminLTE./plugins/daterangepicker/daterangepicker', ['block' => 'script']); ?>
```

### Elements

There are 12 element files.

- templates/
  - element/
    - flash/
      - default
      - error
      - success
    - navbar/
      - left
      - right
      - search
    - sidebar/
      - brand
      - control
      - menu
      - search
      - user
    - footer

### Flash Message

The theme is prepared to show Flash Messages.

```php
<?php echo $this->Flash->render(); ?>
<?php echo $this->Flash->render('auth'); ?>
```

### Bake

One of the better Cake features. The theme is prepared to use Bake.

```
bin/cake bake all user --theme AdminLTE
```

### View

- **AdminLTEView**

This is one of the better theme features. It changes the pattern how Cake shows view files.

Basically, you overwrite any theme, plugin and prefix files.

1. templates/Plugin/$theme/Plugin/$plugin/$prefix/
2. templates/Plugin/$theme/Plugin/$plugin/
3. templates/Plugin/$theme/$prefix/
4. templates/Plugin/$theme/

### FormHelper

FormHelper by default has format template based on Foundation template. This helper overwrite these templates.

### Behavior

- **DatepickerBehavior**

When you configure `App.defaultLocale` to `pt_BR` this Behavior is util.

# Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

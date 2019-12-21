# CakePHP AdminLTE Theme

**What's the update**

The AdminLTE is upgraded to work with CakePHP4

### Installation

You can install using [composer](http://getcomposer.org).

Add following to composer.json file of CakePHP4:

```
....
....
"require": {
    .....
    .....
	"maiconpinto/cakephp-adminlte-theme": "dev-cake4upgrade"
    .....
    .....
},
....
....
....
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/hareshpatel1990/cakephp-adminlte-theme"
    }
]
....
....
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
//Import EventInterface Interface
use Cake\Event\EventInterface;

public function beforeRender(EventInterface $event)
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

```php
//generae new config/adminlte.php file with following code

return [
    'Theme' => [
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
        'skin' => 'blue'
    ]
];

// In config/bootstrap.php add following line

Configure::load('adminlte', 'default');
```

# Customize Layout

```PHP
// src/Controller/AppController.php
//Import Configure Package
use Cake\Core\Configure;

public function beforeRender(EventInterface $event)
{
    ....
    ....
    ....
    // Overwrite AppView class
    $this->viewBuilder()->setClassName('AdminLTE.AdminLTE');
    ....
    ....
    ....
}
```

After you enable the AdminLTEView class in the AppController.php file, you can overwrite any View file,only by creating the ```Plugin/AdminLTE/``` folder inside the ```templates``` folder.

For example, to overwrite the elements files, you must create them as follow:

1. ```templates/Plugin/AdminLTE/Element/nav-top.ctp```
2. ```templates/Plugin/AdminLTE/Element/aside-main-sidebar.ctp```
3. ```templates/Plugin/AdminLTE/Element/aside/user-panel.ctp```
4. ```templates/Plugin/AdminLTE/Element/aside/form.ctp```
5. ```templates/Plugin/AdminLTE/Element/aside/sidebar-menu.ctp```
6. ```templates/Plugin/AdminLTE/Element/aside-control-sidebar.ctp```
7. ```templates/Plugin/AdminLTE/Element/footer.ctp```


# What's the features

### Layouts

There are 10 layout files.

- boxed
- collapsed
- default **it's the main layout**
- documentation
- fixed
- lockscreen
- login
- print
- register
- top

### View Blocks

There are 3 Blocks where you can extend your theme.

- **css**

```php
<?php echo $this->fetch('css'); ?>
```

One example is `templates/Pages/home.php`:

```php
<?php echo $this->Html->css('AdminLTE./bower_components/morris.js/morris', ['block' => 'css']); ?>
```

- **script**

```php
<?php echo $this->fetch('script'); ?>
```

One example is `templates/Pages/home.php`:

```php
<?php echo $this->Html->script('AdminLTE./bower_components/morris.js/morris.min', ['block' => 'script']); ?>
```

- **scriptBottom**

```php
<?php echo $this->fetch('scriptBottom'); ?>
```

One example is `templates/Pages/home.php`:

```php
<?php $this->start('scriptBottom'); ?>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
<?php  $this->end(); ?>
```

### Elements

There are 7 element files.

- element/
    - aside/
        - form
        - sidebar-menu
        - user-panel
    - aside-control-sidebar
    - aside-main-sidebar
    - footer
    - nav-top

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

This is one the better theme feature. It change the pattern how Cake show view files.

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

### Locale

When you configure `App.defaultLocale` to `pt_BR` this Locale is util.

### Page debug

Added link to default page of CakePHP.

![Page debug](docs/page-debug.png)

# Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

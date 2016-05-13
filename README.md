# CakePHP AdminLTE Theme

## Installation

You can install using [composer](http://getcomposer.org).

    composer require maiconpinto/cakephp-adminlte-theme

### Enable Plugin

```php
// config/bootstrap.php

Plugin::load('AdminLTE');
```

### Enable theme

```php
// src/Controller/AppController.php

public function beforeRender(Event $event)
{
	$this->viewBuilder()->theme('AdminLTE');
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

## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

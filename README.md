# CakePHP AdminLTE Theme

## Instalação

Você pode instalar usando [composer](http://getcomposer.org).

    composer require maiconpinto/cakephp-adminlte-theme

### Ativar Plugin

```php
// config/bootstrap.php

Plugin::load('AdminLTE');
```

### Ativar theme

```php
// src/Controller/AppController.php

public function beforeRender(Event $event)
{
	$this->viewBuilder()->theme('AdminLTE');
}
```

### Ativar Form

```php
// src/View/AppView.php

public function initialize()
{
    $this->loadHelper('Form', ['className' => 'AdminLTE.Form.Form']);
}
```

## Para contribuir

Faça um fork deste projeto.

# CakePHP AdminLTE Theme

## Instalação

Você pode instalar usando [composer](http://getcomposer.org) através do comando a seguir.

	composer require maiconpinto/cakephp-adminlte-theme

Certifique-se de carregar o plugin em **config/bootstrap.php**.

	Plugin::load('AdminLTE');

### Ativar theme

```php
// src/Controller/AppController.php

public function beforeRender(Event $event)
{
	$this->viewBuilder()->theme('AdminLTE');
}
```

### Form

```php
// src/View/AppView.php

public function initialize()
{
    $this->loadHelper('Form', ['className' => 'TwitterBootstrap.Form']);
}
```

## Para contribuir

Faça um fork deste projeto.

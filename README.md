# CakePHP AdminLTE Theme

## Instalação

Você pode instalar usando [composer](http://getcomposer.org) através do comando a seguir.

	composer require maiconpinto/cakephp-adminlte-theme

Certifique-se de carregar o plugin em **config/bootstrap.php**.

	Plugin::load('AdminLTE');

### Para ativar o layout

Informe `$this->viewBuilder()->theme('AdminLTE');` no seu controller (por exemplo, AppController para usar em qualquer página).

```php
public function beforeRender(Event $event)
{
	$this->viewBuilder()->theme('AdminLTE');
}
```

### Form

```
// src/View/AppView.php

public function initialize()
{
    $this->loadHelper('Form', ['className' => 'TwitterBootstrap.Form']);
}
```

## Para contribuir

Faça um fork deste projeto.

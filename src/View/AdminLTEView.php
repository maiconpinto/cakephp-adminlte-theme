<?php

declare(strict_types=1);

namespace AdminLTE\View;

use App\View\AppView;

class AdminLTEView extends AppView
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize(): void
    {
        $this->loadHelper('Paginator', ['templates' => 'AdminLTE.paginator-templates']);
        $this->loadHelper('Form', ['templates' => 'AdminLTE.app_form']);
    }
}

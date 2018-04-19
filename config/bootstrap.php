<?php
use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Core\Plugin;

if (!Configure::check('Theme.title')) {
    Configure::write('Theme.title', 'AdminLTE');
}

if (!Configure::check('Theme.logo.mini')) {
    Configure::write('Theme.logo.mini', '<b>A</b>LT');
}

if (!Configure::check('Theme.logo.large')) {
    Configure::write('Theme.logo.large', '<b>Admin</b>LTE');
}

if (!Configure::check('Theme.login.show_remember')) {
    Configure::write('Theme.login.show_remember', true);
}

if (!Configure::check('Theme.login.show_register')) {
    Configure::write('Theme.login.show_register', true);
}

if (!Configure::check('Theme.login.show_social')) {
    Configure::write('Theme.login.show_social', true);
}

if (!Configure::check('Theme.folder')) {
    Configure::write('Theme.folder', ROOT);
}

if (!Configure::check('Theme.skin')) {
    Configure::write('Theme.skin', 'blue');
}

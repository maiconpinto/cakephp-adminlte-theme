<?php
use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Core\Plugin;

Configure::write('Theme.title', 'AdminLTE');
Configure::write('Theme.logo.mini', '<b>A</b>LT');
Configure::write('Theme.logo.large', '<b>Admin</b>LTE');
Configure::write('Theme.login.show_remember', true);
Configure::write('Theme.login.show_register', true);
Configure::write('Theme.login.show_social', true);
Configure::write('Theme.login.show_social', true);
Configure::write('Theme.folder', ROOT);
Configure::write('Theme.skin', 'blue');

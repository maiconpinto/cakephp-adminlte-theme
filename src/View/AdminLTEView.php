<?php
namespace AdminLTE\View;

use \App\View\AppView;
use \Cake\Core\App;
use \Cake\Utility\Inflector;

class AdminLTEView extends AppView
{
    protected function _paths($plugin = null, $cached = true)
    {
        $prefix = $this->request->getParam('prefix') ? Inflector::camelize($this->request->getParam('prefix')) : false;
        $theme = $this->theme;

        $templatePaths = App::path(static::NAME_TEMPLATE);

        $pluginPaths = [];

        foreach ($templatePaths as $templateCurrent) {
            if (!empty($theme)) {
                if (!empty($plugin)) {
                    for ($i = 0, $count = count($templatePaths); $i < $count; $i++) {
                        if ($prefix) {
                            $pluginPaths[] = $templatePaths[$i] . 'Plugin'.  DIRECTORY_SEPARATOR . $theme . DIRECTORY_SEPARATOR . 'Plugin' . DIRECTORY_SEPARATOR . $plugin . DIRECTORY_SEPARATOR . $prefix . DIRECTORY_SEPARATOR;
                        }

                        $pluginPaths[] = $templatePaths[$i] . 'Plugin'.  DIRECTORY_SEPARATOR . $theme . DIRECTORY_SEPARATOR . 'Plugin' . DIRECTORY_SEPARATOR . $plugin . DIRECTORY_SEPARATOR;
                    }
                }

                if ($prefix) {
                    $themePaths[] = $templateCurrent . 'Plugin'.  DIRECTORY_SEPARATOR . $theme . DIRECTORY_SEPARATOR . $prefix . DIRECTORY_SEPARATOR;
                }

                $themePaths[] = $templateCurrent . 'Plugin'.  DIRECTORY_SEPARATOR . $theme . DIRECTORY_SEPARATOR;
            }
        }

        $paths = array_merge(
            $pluginPaths,
            $themePaths,
            parent::_paths($plugin, $cached)
        );

        return $this->_paths = $paths;
    }
}

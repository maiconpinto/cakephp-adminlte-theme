<?php
namespace AdminLTE\Test\TestCase;

use Cake\Core\Configure;
use Cake\TestSuite\TestCase;

/**
 * Class ConfiguresTest
 * @package AdminLTE\Test\TestCase
 */
class ConfiguresTest extends TestCase
{

    public function testDefaultConfigures()
    {
        $expected = [
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
        ];

        include dirname(dirname(dirname(__FILE__))) . '/config/bootstrap.php';
        $this->assertEquals($expected, Configure::read('Theme'));
    }
}


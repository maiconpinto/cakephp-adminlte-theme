<?php
namespace AdminLTE\Model\Behavior;

use Cake\ORM\Behavior;

class DatepickerBehavior extends Behavior
{
    /**
     * @var array
     */
    protected $_defaultConfig = [
        'fields' => ['date']
    ];

    /**
     * inspired in:
     * https://github.com/dereuromark/cakephp-tools/blob/00f9829f4ea7240a23a8708855db8390867b5c36/src/Model/Behavior/PasswordableBehavior.php
     */
    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options) {

    }
}

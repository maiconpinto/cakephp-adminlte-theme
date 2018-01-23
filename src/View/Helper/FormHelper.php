<?php

namespace AdminLTE\View\Helper;

use Cake\View\Helper\FormHelper as CakeFormHelper;
use Cake\Utility\Hash;
use Cake\View\View;
use Cake\Utility\Inflector;

class FormHelper extends CakeFormHelper {

    private $templates = [
        'button' => '{{before}}<button{{attrs}}>{{text}}</button>{{after}}',
        'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
        'checkboxFormGroup' => '{{label}}',
        'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',
        'dateWidget' => '<div class="form-group">{{label}} {{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}</div>',
        'error' => '<div class="error-message">{{content}}</div>',
        'errorList' => '<ul>{{content}}</ul>',
        'errorItem' => '<li>{{text}}</li>',
        'file' => '<input type="file" name="{{name}}"{{attrs}}>',
        'fieldset' => '<fieldset{{attrs}}>{{content}}</fieldset>',
        'formStart' => '<form{{attrs}}>',
        'formEnd' => '</form>',
        'formGroup' => '{{label}}{{input}}',
        'hiddenBlock' => '<div style="display:none;">{{content}}</div>',
        'control' => '<input type="{{type}}" name="{{name}}"{{attrs}}/>',
        'input' => '<input type="{{type}}" name="{{name}}"{{attrs}}/>',
        'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
        'inputContainer' => '<div class="form-group input {{type}}{{required}}">{{content}}</div>',
        'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
        'label' => '<label{{attrs}}>{{text}}</label>',
        'nestingLabel' => '{{hidden}}<label{{attrs}}>{{input}}{{text}}</label>',
        'legend' => '<legend>{{text}}</legend>',
        'multicheckboxTitle' => '<legend>{{text}}</legend>',
        'multicheckboxWrapper' => '<fieldset{{attrs}}>{{content}}</fieldset>',
        'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
        'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
        'select' => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
        'selectMultiple' => '<select name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
        'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
        'radioWrapper' => '<div class="radio">{{label}}</div>',
        'textarea' => '<textarea name="{{name}}"{{attrs}}>{{value}}</textarea>',
        'submitContainer' => '<div class="box-footer {{required}}">{{content}}</div>'
    ];

    public function __construct(View $View, array $config = [])
    {
        $this->_defaultConfig['templates'] = array_merge($this->_defaultConfig['templates'], $this->templates);
        parent::__construct($View, $config);
    }

    public function create($context = null, array $options = [])
    {
        $options += ['role' => 'form'];
        return parent::create($context, $options);
    }

    public function button($title, array $options = array())
    {
        $options += ['escape' => false, 'secure' => false, 'class' => 'btn btn-success'];
        $options['text'] = $title;
        return $this->widget('button', $options);
    }

    public function submit($caption = null, array $options = array())
    {
        $options += ['class' => 'btn btn-success'];
        return parent::submit($caption, $options);
    }

    public function input($fieldName, array $options = [])
    {

        $_options = [];

        if (!isset($options['type'])) {
            $options['type'] = $this->_inputType($fieldName, $options);
        }

        switch($options['type']) {
            case 'checkbox':
            case 'radio':
            case 'date':
                break;
            default:
                $_options = ['class' => 'form-control'];
                break;

        }

        $options += $_options;

        return parent::input($fieldName, $options);
    }
	public function control($fieldName, array $options = [])
	{
		
		$_options = [];
		
		if (!isset($options['type'])) {
			$options['type'] = $this->_inputType($fieldName, $options);
		}
		
		switch($options['type']) {
			case 'checkbox':
			case 'radio':
			case 'date':
				break;
			default:
				$_options = ['class' => 'form-control'];
				break;
			
		}
		
		$options += $_options;
		
		return parent::control($fieldName, $options);
	}
}

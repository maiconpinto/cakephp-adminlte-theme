<?php

namespace AdminLTE\View\Helper;

use Cake\View\Helper\FormHelper as CakeFormHelper;
use Cake\Utility\Hash;
use Cake\View\View;
use Cake\Utility\Inflector;

class FormHelper extends CakeFormHelper {

    private $templates = [
        'dateWidget' => '<span class="form-inline">{{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}</span>',
        'error' => '<div class="text-danger">{{content}}</div>',
        'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
        'inputContainerError' => '<div class="form-group {{type}}{{required}} error">{{content}}{{error}}</div>',
    ];

    private $templates_horizontal = [
        'label' => '<label class="control-label col-md-2"{{attrs}}>{{text}}</label>',
        'formGroup' => '{{label}}<div class=" col-md-10">{{input}}{{error}}{{help}}</div>',
        'checkboxFormGroup' => '<div class="checkbox">{{label}}</div>{{error}}{{help}}',
        'submitContainer' => '<div class="col-md-10 col-md-offset-2">{{content}}</div>',
        'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
        'inputContainerError' => '<div class="form-group {{type}}{{required}} has-error">{{content}}</div>',
    ];

    public function __construct(View $View, array $config = []) {
        $this->_defaultConfig['templates'] = array_merge($this->_defaultConfig['templates'], $this->templates);
        parent::__construct($View, $config);
    }

    public function create($model = null, array $options = []) {
        $options += ['role' => 'form'];
        if (isset($options['class']) and $options['class']=='form-horizontal') {
            $options['templates'] = $this->templates_horizontal;
        }

        return parent::create($model, $options);
    }

    public function button($title, array $options = array()) {
        return parent::button($title, $this->_injectStyles($options, 'btn btn-success'));
    }

    public function submit($caption = null, array $options = []) {
        return parent::submit($caption, $this->_injectStyles($options, 'btn btn-success'));
    }

    public function input($fieldName, array $options = []) {
        $options += [
            'type' => null,
            'label' => null,
            'error' => null,
            'required' => null,
            'options' => null,
            'templates' => []
        ];
        $options = $this->_parseOptions($fieldName, $options);
        $options += ['id' => $this->_domId($fieldName)];
        $finalClasses = 'form-control';
        switch ($options['type']) {
            case 'checkbox':
                $finalClasses = '';
                $options['templates']['checkboxWrapper'] = '<div class="checkbox"><label>{{input}}{{label}}</label></div>';
                $options['templates']['label'] = '{{text}}';
                break;
            case 'radio':
                $options['templates']['radioWrapper'] = '<div class="radio"><label>{{input}}{{label}}</label></div>';
                $options['templates']['label'] = '{{text}}';
                break;
            case 'file':
                $options['templates']['inputContainer'] = '<div class="form-group {{type}}{{required}}">{{content}}</div>';
                $options['templates']['label'] = isset($options['templates']['label']) ? $options['templates']['label'] : '<label>{{input}}{{text}}</label>';
                break;
            case 'password':
                $options['templates']['inputContainer'] = '<div class="form-group {{type}}{{required}}">{{content}}</div>';
                $options['templates']['label'] = isset($options['templates']['label']) ? $options['templates']['label'] : '<label>{{input}}{{text}}</label>';
                break;
            default:
        }
        return parent::input($fieldName, $this->_injectStyles($options, $finalClasses));
    }

    public function select($fieldName, $options = [], array $attributes = [])
    {
        $attributes = $this->_injectStyles($attributes, 'form-control');
        return parent::select($fieldName, $options, $attributes);
    }

    public function textarea($fieldName, array $options = array()) {
        $options += ['rows' => 3];
        $options = $this->_injectStyles($options, 'form-control');
        return parent::textarea($fieldName, $options);
    }

    public function hour($fieldName, array $options = [])
    {
        $options = $this->_injectStyles($options, 'form-control');
        return parent::hour($fieldName, $options);
    }

    public function time($fieldName, array $options = [])
    {
        $options = $this->_injectStyles($options, 'form-control');
        return parent::time($fieldName, $options);
    }

    public function year($fieldName, array $options = [])
    {
        $options = $this->_injectStyles($options, 'form-control');
        return parent::year($fieldName, $options);
    }

    public function month($fieldName, array $options = [])
    {
        $options = $this->_injectStyles($options, 'form-control');
        return parent::month($fieldName, $options);
    }

    public function day($fieldName = null, array $options = [])
    {
        $options = $this->_injectStyles($options, 'form-control');
        return parent::day($fieldName, $options);
    }

    public function minute($fieldName, array $options = [])
    {
        $options = $this->_injectStyles($options, 'form-control');
        return parent::minute($fieldName, $options);
    }

    public function dateTime($fieldName, array $options = [])
    {
        $options = $this->_injectStyles($options, 'form-control');
        return parent::dateTime($fieldName, $options);
    }

    protected function _injectStyles($options, $styles) {
        $options += ['class' => [], 'skip' => []];
        if (!is_array($options['class'])) {
            $options['class'] = explode(' ', $options['class']);
        }
        if (!is_array($styles)) {
            $styles = explode(' ', $styles);
        }
        foreach ($styles as $style) {
            if (!in_array($style, $options['class']) && !in_array($style, (array) $options['skip'])) {
                array_push($options['class'], $style);
            }
        }
        unset($options['skip']);
        return $options;
    }

    protected function _mergeStyles($current, $new) {
        $current = explode(' ', $current);
        $new = explode(' ', $new);
        foreach ($new as $style) {
            if (!in_array($style, $current)) {
                array_push($current, $style);
            }
        }
        return $current;
    }

    protected function _datetimeOptions($options)
    {

        if (isset($options['year']) and is_array($options['year'])) {
            $options['year'] = $this->_injectStyles($options['year'], 'form-control');
        }

        if (isset($options['month']) and is_array($options['month'])) {
            $options['month'] = $this->_injectStyles($options['month'], 'form-control');
        }

        if (isset($options['hour']) and is_array($options['hour'])) {
            $options['hour'] = $this->_injectStyles($options['hour'], 'form-control');
        }

        if (isset($options['minute']) and is_array($options['minute'])) {
            $options['minute'] = $this->_injectStyles($options['minute'], 'form-control');
        }

        return $options;
    }

    public function __call($method, $params)
    {
        $options = [];
        if (empty($params)) {
            throw new \Exception(sprintf('Missing field name for FormHelper::%s', $method));
        }
        if (isset($params[1])) {
            $options = $params[1];
        }
        if (!isset($options['type'])) {
            $options['type'] = $method;
        }
        if (isset($options['class']) and is_array($options['class'])) {
            $options['class'] = implode(' ', $options['class']);
        }
        $options = $this->_initInputField($params[0], $options);

        $options = $this->_injectStyles($options, 'form-control');
        return $this->widget($options['type'], $options);
    }

}

<?php
return [
    'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="form-group input {{type}}{{required}} error">{{content}}{{error}}</div>',
    'label' => '<label class="form" {{attrs}}>{{text}}</label>',
    'nestingLabel' => '{{hidden}}<label class="form-check-label"{{attrs}}>{{input}}{{text}}</label>',
    'checkboxWrapper' => '<div class="form-check">{{label}}</div>'
];

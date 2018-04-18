<?php
$config['list']['toolbar'] = [
    'buttons' => [
        'create'  => ['label' => 'lang:admin::default.button_new', 'class' => 'btn btn-primary', 'href' => 'mail_templates/create'],
        'delete'  => [
            'label'                => 'lang:admin::default.button_delete', 'class' => 'btn btn-danger', 'data-request-form' => '#list-form',
            'data-request'         => 'onDelete', 'data-request-data' => "_method:'DELETE'",
            'data-request-confirm' => 'lang:admin::default.alert_warning_confirm',
        ],
        'layouts' => [
            'label' => 'lang:system::mail_templates.text_layouts',
            'class' => 'btn btn-default',
            'href'  => 'mail_layouts',
        ],
    ],
];

$config['list']['columns'] = [
    'edit'         => [
        'type'         => 'button',
        'iconCssClass' => 'fa fa-pencil',
        'attributes'   => [
            'class' => 'btn btn-edit',
            'href'  => 'mail_templates/edit/{template_data_id}',
        ],
    ],
    'code'         => [
        'label'      => 'lang:system::mail_templates.column_code',
        'type'       => 'text',
        'searchable' => TRUE,
    ],
    'title'        => [
        'label'      => 'lang:system::mail_templates.column_title',
        'type'       => 'text',
        'searchable' => TRUE,
    ],
    'template_id'  => [
        'label'     => 'lang:system::mail_templates.column_layout',
        'relation'  => 'layout',
        'valueFrom' => 'name',
    ],
    'date_updated' => [
        'label'      => 'lang:system::mail_templates.column_date_updated',
        'type'       => 'datesince',
        'searchable' => TRUE,
    ],
    'date_added'   => [
        'label'      => 'lang:system::mail_templates.column_date_added',
        'type'       => 'datesince',
        'searchable' => TRUE,
    ],
];

$config['form']['toolbar'] = [
    'buttons' => [
        'save'      => ['label' => 'lang:admin::default.button_save', 'class' => 'btn btn-primary', 'data-request-form' => '#edit-form', 'data-request' => 'onSave'],
        'saveClose' => [
            'label'             => 'lang:admin::default.button_save_close',
            'class'             => 'btn btn-default',
            'data-request'      => 'onSave',
            'data-request-form' => '#edit-form',
            'data-request-data' => 'close:1',
        ],
        'delete'    => [
            'label'                => 'lang:admin::default.button_icon_delete', 'class' => 'btn btn-danger',
            'data-request-form'    => '#edit-form', 'data-request' => 'onDelete', 'data-request-data' => "_method:'DELETE'",
            'data-request-confirm' => 'lang:admin::default.alert_warning_confirm', 'context' => 'edit',
        ],
        'back'      => ['label' => 'lang:admin::default.button_icon_back', 'class' => 'btn btn-default', 'href' => 'mail_templates'],
    ],
];

$config['form']['fields'] = [
    'code'        => [
        'label' => 'lang:system::mail_templates.label_code',
        'span'  => 'left',
        'type'  => 'text',
    ],
    'label'       => [
        'label'     => 'lang:system::mail_templates.label_description',
        'span'      => 'right',
        'valueFrom' => 'title',
        'type'      => 'text',
    ],
    'subject'     => [
        'label' => 'lang:system::mail_templates.label_subject',
        'span'  => 'left',
        'type'  => 'text',
    ],
    'template_id' => [
        'label'        => 'lang:system::mail_templates.label_layout',
        'span'         => 'right',
        'type'         => 'relation',
        'relationFrom' => 'layout',
        'placeholder'  => 'lang:admin::default.text_please_select',
    ],
];

$config['form']['tabs'] = [
    'fields' => [
        'body'       => [
            'tab'  => 'lang:system::mail_templates.label_body',
            'type' => 'codeeditor',
        ],
        'plain_body' => [
            'tab'        => 'lang:system::mail_templates.label_plain_body',
            'type'       => 'textarea',
            'attributes' => [
                'rows' => 10,
            ],
        ],
        'variables'  => [
            'tab'      => 'lang:system::mail_templates.text_variables',
            'type'     => 'partial',
            'path'     => 'mailtemplates/variables',
            'disabled' => TRUE,
        ],
    ],
];

return $config;
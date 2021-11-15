<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('Live_Hours');

//These are the fields for Live Hours a Shelf Exclusive extenstion for the CPT Branches

$fields
	->setLocation('options_page', '==', 'theme-general-settings')
    ->addTab('Hours')
    ->addPostObject('main_branch_object', [
        'label' => 'Select Main Branch',
        'instructions' => 'Select the branch hours that should show in the header by default.',
        'wrapper' => [
            'width' => '70',
        ],
        'post_type' => ['branch'],
        'return_format' => 'object',
    ])
    ->addLink('live_hours_url', [
        'label' => 'Live Hours URL',
        'instructions' => 'Specify the URL for all hours or branches.',
        'wrapper' => [
            'width' => '30',
        ],
    ])
    ->addSelect('disable_live_hours', [
        'label' => 'Live Hours Display',
        'instructions' => 'You may set the live hours to enabled (show) or disabled (hidden) within the header.',
        'wrapper' => [
            'width' => '30',
        ],
        'choices' => ['true' =>'Enable Live Hours', 'false' =>'Disable Live Hours'],
        'default_value' => ['true' =>'Enable'],
    ])
    ->addTextarea('live_hours_override', [
        'label' => 'Special Circumstances - Message',
        'rows' => '2',
        'instructions' => 'Provide an optional message for special circumstances when disabling hours.',
        'wrapper' => [
            'width' => '40',
        ],
    ])
    ->addLink('live_hours_override_url', [
        'label' => 'Special Circumstances -  URL',
        'instructions' => 'Specify an optional URL for the message.',
        'wrapper' => [
            'width' => '30',
        ],
    ]);

return $fields;

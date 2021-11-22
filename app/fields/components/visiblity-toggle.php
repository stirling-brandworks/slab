<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('visibility');

$fields
	->addTrueFalse('section_display', [
        'instructions' => "Toggle this section's visibility, when set to false it will not display",
        'default_value' => 1,
        'ui' => 1,
        'ui_on_text' => 'Show',
        'ui_off_text' => 'Hide',
    ]);

return $fields;

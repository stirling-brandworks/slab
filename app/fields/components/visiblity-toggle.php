<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('visibility');

$fields
    ->addSelect('section_display')
      ->setInstructions("Toggle this section's visibility, when set to hidden it will not display.")
      ->setChoices(['true' =>'Visible', 'false' =>'Hidden'])
      ->setDefaultValue('true');

return $fields;

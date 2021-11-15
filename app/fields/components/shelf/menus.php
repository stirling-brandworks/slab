<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('Secondary_Nav');

//These are the fields for configuring icons for the secondary nav menu items

$fields
	->setLocation('nav_menu_item', '==', 'secondary_navigation')
    ->addImage('menu_item_icon', [
        'label' => 'Icon',
    ]);

return $fields;

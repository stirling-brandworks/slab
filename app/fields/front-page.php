<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('front_page');

$fields->setLocation('page_type', '==', 'front_page');

$fields
    ->addTab('hero')
        ->addFields(get_field_partial('partials.hero'))

    ->addTab('quicklinks')
        ->addGroup('quicklinks_section')
            ->setLabel(null)
            ->addFields(get_field_partial('components.visiblity-toggle'))
            ->addFields(get_field_partial('components.section-title'))
        ->endGroup()
        ->addGroup('quicklinks')
            ->addFields(get_field_partial('components.quicklinks'))
        ->endGroup()

    ->addTab('books')
        ->addGroup('books')
            ->setLabel(null)
            ->addFields(get_field_partial('components.visiblity-toggle'))
            ->addFields(get_field_partial('components.section-title'))
            ->addFields(get_field_partial('components.tabs'))
        ->endGroup()

    ->addTab('resources')
        ->addGroup('resources')
            ->setLabel(null)
            ->addFields(get_field_partial('components.visiblity-toggle'))
            ->addFields(get_field_partial('components.section-title'))
            ->addFields(get_field_partial('components.shelf.database-list'))
        ->endGroup()

    ->addTab('news')
        ->addGroup('news')
            ->setLabel(null)
            ->addFields(get_field_partial('components.visiblity-toggle'))
            ->addFields(get_field_partial('components.section-title'))
            ->addPostObject('featured_post')
                ->setWidth('50%')
                ->setInstructions('Select a published post to feature in the highlighted space to show more prominently than the rest of the posts.')
            ->addTaxonomy('news_category',[
                    'instructions' => 'Select a category (or categories) to show posts *only* from that category. If none is selected posts from all categories will show.',
                    'field_type' => 'multi_select',
                    'return_format' => 'id',
                    'wrapper' => [
                        'width' => '50%',
                    ],
                ],
            )
        ->endGroup();

return $fields;

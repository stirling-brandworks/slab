<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('front_page');

$fields->setLocation('page_type', '==', 'front_page');

$fields
    ->addTab('hero')
        ->addGroup('slider')
            ->addFields(get_field_partial('components.slider'))
        ->endGroup()
        ->addText('hero_sidebar_title')
            ->setLabel('Sidebar Title')
            ->setWrapper(['width' => '30'])
        ->addWysiwyg('hero_sidebar_content')
            ->setLabel('Sidebar Content')
            ->setWrapper(['width' => '50'])
        ->addLink('hero_sidebar_link')
            ->setLabel('Sidebar Button')
            ->setWrapper(['width' => '20'])

    ->addTab('quicklinks')
        ->addText('quicklinks_section_title')
            ->setLabel('Title')
            ->setWrapper(['width' => '75'])
        ->addLink('quicklinks_section_link')
            ->setLabel('Link')
            ->setWrapper(['width' => '25'])
        ->addFields(get_field_partial('components.quicklinks'))

    ->addTab('books')
        ->addText('books_section_title')
            ->setLabel('Title')
            ->setWrapper(['width' => '75'])
        ->addLink('books_section_link')
            ->setLabel('Link')
            ->setWrapper(['width' => '25'])
        ->addFields(get_field_partial('components.tabs'))

    ->addTab('resources')
        ->addText('resources_section_title')
            ->setLabel('Title')
            ->setWrapper(['width' => '75'])
        ->addLink('resources_section_link')
            ->setLabel('Link')
            ->setWrapper(['width' => '25'])

    ->addTab('news')
        ->addText('news_section_title')
            ->setLabel('Title')
            ->setWrapper(['width' => '75'])
        ->addLink('news_section_link')
            ->setLabel('Link')
            ->setWrapper(['width' => '25']);

return $fields;

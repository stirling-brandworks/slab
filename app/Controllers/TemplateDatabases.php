<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateDatabases extends Controller
{
    protected $acf = true;

    protected $databaseItems = [];

    public function __construct()
    {
        $this->databaseItems = (new \WP_Query($this->query()))->posts;
    }

    public function query(): array
    {
        return [
            'post_type' => 'database',
            'posts_per_page' => 100,
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => [],
            'no_found_rows' => true
        ];
    }

    public function itemsAz(): array
    {
        $grouped = [];
        foreach ($this->databaseItems as $item) {
            $grouped[strtoupper(substr($item->post_title, 0, 1))][] = $item;
        }
        return $grouped;
    }

    public function itemsAzTransformed(): array
    {
        return array_map([self::class, 'transformData'], $this->itemsAz());
    }

    public static function transformData($item)
    {
        return [
            'title' => get_the_title($item),
            'subtitle' => \get_field('subtitle', $item),
            'content' => get_the_content(null, false, $item),
            'imageId' => get_post_thumbnail_id($item),
            'cardRequired' =>   in_array('cardRequired', \get_field('special_details', $item)),
            'inLibraryOnly' =>   in_array('inLibraryOnly', \get_field('special_details', $item)),
            'link' => [
                'title' => 'Visit',
                'url' => \get_field('database_url', $item),
                'target' => '_blank'
            ]
        ];
    }

    public function itemsBySubject()
    {
        $grouped = [];
        foreach ($this->databaseItems as $item) {
            $terms = get_the_terms($item->ID, 'subject_area');
            if (!$terms) {
                continue;
            }
            foreach ($terms as $term) {
                $grouped[$term->name][] = static::transformData($item);
            }
        }
        ksort($grouped);
        return $grouped;
    }

    public function letters(): array
    {
        $itemsAzKeys = array_keys($this->itemsAz());
        $letters = range('A', 'Z');
        return array_merge($letters, array_diff($itemsAzKeys, $letters));
    }

    public static function filteredBySubjects($subjectSlug)
    {
        $args = [
            'post_type' => 'database',
            'subject_area' => $subjectSlug,
            'posts_per_page' => 250,
            'no_found_rows' => true,
            'orderby' => 'title',
            'order' => 'ASC'
        ];

        return new \WP_Query($args);
    }
}

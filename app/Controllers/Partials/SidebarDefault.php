<?php

namespace App\Controllers\Partials;

trait SidebarDefault
{
    protected function postParent()
    {
        return \get_post_parent() ? \get_post_parent()->ID : 0;
    }

    public function related()
    {
        return wp_list_pages([
            'title_li' => null,
            'child_of' => $this->postParent(),
            'exclude' => get_option('page_on_front'),
            'echo' => false,
            'depth' => 1,
            'sort_column' => 'menu_order'
        ]);
    }
}
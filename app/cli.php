<?php

namespace App;

use WP_CLI;

class CLI
{
    protected $kitchenSinkId;

    /**
     * Runs the demo setup
     *
     * @return void
     */
    public function demo()
    {

        $this->kitchenSinkId = wp_insert_post([
            'post_title'  => 'Kitchen Sink',
            'post_status' => 'publish',
            'post_type'   => 'page',
        ]);

        $this->setPageTemplate();
        $this->setAlertData();
        $this->setQuicklinkData();
        $this->setCardData();
        $this->setSliderData();
        $this->setAccordionTabData();
        $this->addMenu();

        // Present link to page
        $url = get_permalink($this->kitchenSinkId);
        WP_CLI::line(
            'Done! See the kitchen sink page at ' . WP_CLI::colorize("%B$url%n")
        );
    }


    /**
     * Adds a menu to the primary_navigation theme location with the
     * Kitchen Sink page
     *
     * @link https://wordpress.stackexchange.com/a/44739/65403
     *
     * @return void
     */
    protected function addMenu()
    {
        $menuName = 'Main Menu';
        $menuExists = wp_get_nav_menu_object($menuName);
        if ($menuExists) return;

        $menuId = wp_create_nav_menu($menuName);

        wp_update_nav_menu_item($menuId, 0, array(
            'menu-item-title' => 'Kitchen Sink',
            'menu-item-object' => 'page',
            'menu-item-object-id' => $this->kitchenSinkId,
            'menu-item-type' => 'post_type',
            'menu-item-status' => 'publish'
        ));

        if (!has_nav_menu('primary_navigation')) {
            $locations = get_theme_mod('nav_menu_locations');
            $locations['primary_navigation'] = $menuId;
            set_theme_mod('nav_menu_locations', $locations);
        }
    }

    protected function setAlertData(): void
    {
        $data = [
            'type' => 'info',
            'text' => 'This is an info alert',
            'link' => [
                'title' => 'More Info',
                'url' => '#'
            ]
        ];
        update_field('alert', $data, $this->kitchenSinkId);
    }

    /**
     * Sets the data for the quicklinks field
     *
     * @return void
     */
    protected function setQuicklinkData(): void
    {
        $data = [];
        for ($i = 0; $i < 3; $i++) {
            $data[] = [
                'link' => [
                    'title' => 'Visit Link',
                    'url' => '#'
                ]
            ];
        }

        update_field('quicklinks', $data, $this->kitchenSinkId);
    }

    /**
     * Sets the data for the single and mult-card fields
     *
     * @return void
     */
    protected function setCardData(): void
    {
        $multiCardData = [];
        for ($i = 0; $i < 3; $i++) {
            $multiCardData[] = $this->generateCardData();
        }
        update_field('multi_card', $multiCardData, $this->kitchenSinkId);
        update_field('single_card', $multiCardData[0], $this->kitchenSinkId);
    }

    /**
     * Sets the data for the slider and carousel fields
     *
     * @return void
     */
    protected function setSliderData(): void
    {
        $data = [];
        for ($i = 0; $i < 3; $i++) {
            $data[] = [
                'background_image' => $this->saveRandomImage(),
                'title' => 'Test',
                'description' => 'Test',
                'link' => [
                    'title' => 'Visit Link',
                    'url' => '#'
                ]
            ];
        }

        update_field('slider', ['slides' => $data], $this->kitchenSinkId);
        update_field('carousel', ['slides' => $data], $this->kitchenSinkId);
    }

    /**
     * Sets the data for the accordion and tab fields
     *
     * @return void
     */
    public function setAccordionTabData(): void
    {
        for ($i = 1; $i < 5; $i++) {
            $data[] = [
                'title' => "Test $i",
                'content' => 'Test Content',
            ];
        }

        update_field('tabs', $data, $this->kitchenSinkId);
        update_field('accordion_items', $data, $this->kitchenSinkId);
    }

    /**
     * Set the page template to the kitchen sink template
     *
     * @return void
     */
    protected function setPageTemplate(): void
    {
        update_post_meta($this->kitchenSinkId, '_wp_page_template', 'views/template-kitchen-sink.blade.php');
    }

    /**
     * Generate data for a single card
     *
     * @return array
     */
    protected function generateCardData(): array
    {
        return [
            'image' => $this->saveRandomImage(),
            'title' => 'Lorem Ipsum',
            'content' => 'Test',
            'link' => [
                'title' => 'Visit Link',
                'url' => '#'
            ]
        ];
    }

    /**
     * Download a random image from Unsplash, save and
     * add to media library
     *
     * @return integer attachment ID
     */
    protected function saveRandomImage(): int
    {
        $url = 'https://source.unsplash.com/random/800x600';
        $filename = uniqid() . '.jpg';
        $uploaddir = wp_upload_dir();
        $uploadfile = $uploaddir['path'] . '/' . $filename;

        $contents = file_get_contents($url);
        $savefile = fopen($uploadfile, 'w');
        fwrite($savefile, $contents);
        fclose($savefile);

        $wp_filetype = wp_check_filetype(basename($filename), null);

        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => $filename,
            'post_content' => '',
            'post_status' => 'inherit'
        );

        $attach_id = wp_insert_attachment($attachment, $uploadfile);

        $imagenew = get_post($attach_id);
        $fullsizepath = get_attached_file($imagenew->ID);
        $attach_data = wp_generate_attachment_metadata($attach_id, $fullsizepath);
        wp_update_attachment_metadata($attach_id, $attach_data);

        return $imagenew->ID;
    }
}

add_action('cli_init', function () {
    $instance = new CLI();
    WP_CLI::add_command('slab', $instance);
});

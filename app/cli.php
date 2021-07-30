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
        $this->setQuicklinkData();
        $this->setCardData();
        $this->setSliderData();
        $this->setAccordionTabData();

        // Present link to page
        $url = get_permalink($this->kitchenSinkId);
        WP_CLI::line(
            'Done! See the kitchen sink page at ' . WP_CLI::colorize("%B$url%n")
        );
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
            'card' => [
                'image' => $this->saveRandomImage(),
                'title' => 'Lorem Ipsum',
                'content' => 'Test',
                'link' => [
                    'title' => 'Visit Link',
                    'url' => '#'
                ]
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

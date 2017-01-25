<?php

namespace Carbon_Fields\Field;

class Hidden_Field extends Field
{
    /**
     * Returns data
     *
     * @param bool $load Should the value be loaded from the database or use the value from the current instance.
     * @return array
     */
    public function to_json($load)
    {
        return parent::to_json($load);
    }

    /**
     * template()
     *
     * Prints the main Underscore template
     **/
    function template()
    {
        ?>
        <input id="{{{ id }}}" type="hidden" name="{{{ name }}}" value="{{ value }}" class="regular-text"/>
        <?php
    }

    /**
     * Enqueues admin scripts
     */
    public static function admin_enqueue_scripts()
    {
        $dir = plugin_dir_url(__FILE__);

        # Enqueue CSS
        wp_enqueue_style('carbon-field-Hidden', $dir . 'css/field.css');
    }

    function get_label() {
        return '';
    }
}

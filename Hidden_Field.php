<?php

namespace Carbon_Fields\Field;

class Hidden_Field extends Field
{
    public $html;

    /**
     * Returns data
     *
     * @param bool $load Should the value be loaded from the database or use the value from the current instance.
     * @return array
     */
    function to_json($load) {
        $data = parent::to_json($load);

        $data = array_merge($data, array(
            'html' => $this->html,
        ));

        return $data;
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
        {{{ html }}}
        <?php
    }

    /**
     * Set a html notice
     *
     * @param $html
     * @return $this
     */
    function set_html($html)
    {
        $this->html = $html;
        return $this;
    }

    function get_label() {
        return '';
    }
}

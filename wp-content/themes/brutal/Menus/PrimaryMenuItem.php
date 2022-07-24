<?php

class PrimaryMenuItem
{
    protected $post; //mode protégé pour protégé les attribus dans l'objet qui ne sont pas utilisés à l'extérieur de l'objet
    public $url;
    public $title;
    public $label;


    function __construct($post){
        $this->post = $post;
            $this->url = $post->url;
            $this->label = $post->title;
            $this->title = $post->attr_title;
    }
    public function getBemClasses($base)
    {
        $modifiers = [];

        $icon = get_field('icon', $this->post);

        if($icon) {
            $modifiers[] = $icon;
        }

        if($this->post->object_id == get_queried_object_id()) {
            $modifiers[] = 'current';
        }

        if(in_array('menu-item-type-custom', $this->post->classes)) {
            $modifiers[] = 'custom';
        }

        $value = $base;

        foreach ($modifiers as $modifier) {
            $value .= ' ' . $base . '--' . $modifier;
        }

        return $value;
    }
}
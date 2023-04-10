<?php

namespace App\Entities;

class Setting_Entities
{
    private $titel;
    private $keywords;
    private $description;
    private $author;
    private $logo;
    private $footer;

    #titel
    public function set_titel($titel)
    {
        $this->titel = $titel;
    }
    public function get_titel()
    {
        return $this->titel;
    }

    #keywords
    public function set_keywords($keywords)
    {
        $this->keywords = $keywords;
    }
    public function get_keywords()
    {
        return $this->keywords;
    }

    #description
    public function set_description($description)
    {
        $this->description = $description;
    }
    public function get_description()
    {
        return $this->description;
    }

    #author
    public function set_author($author)
    {
        $this->author = $author;
    }
    public function get_author()
    {
        return $this->author;
    }

    #logo
    public function set_logo($logo)
    {
        $this->logo = $logo;
    }
    public function get_logo()
    {
        return $this->logo;
    }

    #footer
    public function set_footer($footer)
    {
        $this->footer = $footer;
    }
    public function get_footer()
    {
        return $this->footer;
    }

}
<?php

namespace App\Entities;

class Post_Entities
{
    private $id;
    private $titel;
    private $content;
    private $category;
    private $view;
    private $image;
    private $date;

    #id
    public function set_id($id)
    {
        $this->id = $id;
    }
    public function get_id()
    {
        return $this->id;
    }

    #titel
    public function set_titel($titel)
    {
        $this->titel = $titel;
    }
    public function get_titel()
    {
        return $this->titel;
    }

    #content
    public function set_content($content)
    {
        $this->content = $content;
    }
    public function get_content()
    {
        return $this->content;
    }

    #category
    public function set_category($category)
    {
        $this->category = $category;
    }
    public function get_category()
    {
        return $this->category;
    }

    #view
    public function set_view($view)
    {
        $this->view = $view;
    }
    public function get_view()
    {
        return $this->view;
    }

    #image
    public function set_image($image)
    {
        $this->image = $image;
    }
    public function get_image()
    {
        return $this->image;
    }

    #date
    public function set_date($date)
    {
        $this->date = $date;
    }
    public function get_date()
    {
        return $this->date;
    }   
}
<?php

namespace App\Entities;

class Post_Entities
{
    private $id;
    private $title;
    private $content;
    private $category;
    private $view;
    private $image;
    private $date;

    public function __construct($array)
    {
        $this->id = ($array["id"]);
        $this->title = ($array["title"]);
        $this->content = ($array["content"]);
        $this->category = ($array["category"]);
        $this->view = ($array["view"]);
        $this->image = ($array["image"]);
        $this->date = ($array["date"]);
    }

    public function toArray(){
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'category' => $this->category,
            'view' => $this->view,
            'image' => $this->image,
            'date' => $this->date
        ];
    }

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
    public function set_titel($title)
    {
        $this->title = $title;
    }
    public function get_titel()
    {
        return $this->title;
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
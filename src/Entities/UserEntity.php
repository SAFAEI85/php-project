<?php

namespace App\Entities;

class User_Entities
{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
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

    #first_name
    public function set_first_name($first_name)
    {
        $this->first_name = $first_name;
    }
    public function get_first_name()
    {
        return $this->first_name;
    }

    #last_name
    public function set_last_name($last_name)
    {
        $this->last_name = $last_name;
    }
    public function get_last_name()
    {
        return $this->last_name;
    }

    #email
    public function set_email($email)
    {
        $this->email = $email;
    }
    public function get_email()
    {
        return $this->email;
    }

    #password
    public function set_password($password)
    {
        $this->password = $password;
    }
    public function get_password()
    {
        return $this->password;
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
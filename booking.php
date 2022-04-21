<?php
class booking
{
    private $name, $email, $phone, $date, $time, $people, $message;
    function __construct($n, $e, $p, $d, $t, $pe, $m)
    {
        $this->name = $n;
        $this->email = $e;
        $this->phone = $p;
        $this->date = $d;
        $this->time = $t;
        $this->people = $pe;
        $this->message = $m;
    }
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Get the value of time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Get the value of people
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }
}

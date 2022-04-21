<?php
require "connect.php";
require "booking.php";
class CRUD
{
    private $pdo;
    function __construct()
    {
        $obj = new connect();
        $this->pdo = $obj->getConnexion();
    }
    function add(booking $b)
    {
        $sql = "insert into booking values('" . $b->getName() . "','" . $b->getEmail() . "','" . $b->getPhone() . "','" . $b->getDate() . "','" . $b->getTime() . "'," . $b->getPeople() . ",'" . $b->getMessage() . "')";
        $res = $this->pdo->exec($sql);
        return ($res);
    }
}

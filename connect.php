<?php
class connect
{
    function getConnexion()
    {
        $db = "mysql:host=localhost;dbname=la_casa_del_cibo";
        $user = "root";
        $pw = "";
        $cnx = new PDO($db, $user, $pw) or die('Connection failed !!!!!!!');
        return $cnx;
    }
}

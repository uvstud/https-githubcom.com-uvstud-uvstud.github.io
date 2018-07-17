<?php
/**
 * Created by PhpStorm.
 * User: Uldis.Vinklers
 * Date: 17.07.2018
 * Time: 22:44
 */

class db_class
{
    protected $server = "localhost";
    protected $db = "mafindb";
    protected $dbuser = "root";
    protected $dbpw = "1111";

    /**
     * db_class constructor.
     */
    function __construct() {
        $this->con = new mysqli($this->server,$this->dbuser,$this->dbpw, $this->db);
        $this->con->set_charset("utf8");
    }

    function insertUser($aemail, $apswd){
        $sql = "INSERT INTO lietotaji (email, user) VALUES ('{$aemail}','{$auser}')";
        $rs=$this->con->query($sql);
        echo $sql;
    }



}
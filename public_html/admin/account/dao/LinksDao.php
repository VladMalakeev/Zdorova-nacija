<?php
/**
 * Created by PhpStorm.
 * User: 08091
 * Date: 27.02.2019
 * Time: 13:30
 */

class LinksDao
{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }
}
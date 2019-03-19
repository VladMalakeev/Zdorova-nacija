<?php
/**
 * Created by PhpStorm.
 * User: 08091
 * Date: 27.02.2019
 * Time: 13:29
 */

class PageDao
{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }

    public function getPage(){
        $uri = $_SERVER['REQUEST_URI'];
        if($uri = '/'){
            return $this->db->query("SELECT * FROM pages WHERE is_main = 1")->fetch(PDO::FETCH_LAZY);
        }else{
            $path = explode('/',$uri);
            $name = $path[0];
            return $this->db->query("SELECT * from pages WHERE name = '$name'")->fetch(PDO::FETCH_LAZY);
        }

    }
    public function getPageById($id){
        return $this->db->query("SELECT * FROM pages WHERE id = $id")->fetch(PDO::FETCH_LAZY);
    }
    public function updatePage($header,$page_text,$description,$keywords,$page_id){
      return $this->db->exec("UPDATE pages 
        SET header='$header', page_text = '$page_text', description='$description',keywords ='$keywords'
        WHERE id = $page_id");
    }


}
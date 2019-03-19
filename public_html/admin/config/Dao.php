<?php

class Dao
{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }
    //geters

    public function getPage(){
        $uri = $_SERVER['HTTP_URI'];
        if($uri = '/'){
            return $this->db->query("SELECT * FROM pages WHERE is_main = 1")->fetch(PDO::FETCH_LAZY);
        }else{
            $path = explode('/',$uri);
            $name = $path[0];
            return $this->db->query("SELECT * from pages WHERE name = '$name'")->fetch(PDO::FETCH_LAZY);
        }

    }

    public function getTitleByPageId($id){
        $header = $this->db->query("SELECT header from pages WHERE id = '$id'")->fetch();
        $host = $_SERVER['HTTP_HOST'];
        return $host.' | '.$header['header'];
    }
    public function getMetaDescriptionByPageId($id){
        $data = $this->db->query("SELECT description from pages WHERE id = '$id'")->fetch();
        return $data['description'];
    }
    public function getMetaKeywordsByPageId($id){
        $data = $this->db->query("SELECT keywords from pages WHERE id = '$id'")->fetch();
        return$data['keywords'];
    }
    public function getSlidesByPageId($id){
        return $this->db->query("SELECT * from slides WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
    }
    public function getFeaturesByPageId($id){
        return $this->db->query("SELECT * from features WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
    }
    public function getVideosByPageId($id){
        return $this->db->query("SELECT * from videos WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
    }
    public function getSocialLinskByPageId($id){
        return $this->db->query("SELECT * from social_link WHERE id = '$id'")->fetch(PDO::FETCH_ASSOC);
    }

    //seters


}


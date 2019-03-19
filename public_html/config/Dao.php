<?php
class Dao{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }

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
         return $this->db->query("SELECT * FROM slides WHERE page_id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getImagesById($id){
        return $this->db->query("SELECT * FROM images WHERE page_id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFeaturesByPageId($id){
        return $this->db->query("SELECT * FROM features WHERE page_id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getVideosByPageId($id){
        return $this->db->query("SELECT * FROM videos WHERE page_id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getSocialLinksByPageId($id){
        return $this->db->query("SELECT * FROM social_link WHERE page_id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
    }


}
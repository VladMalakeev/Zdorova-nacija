<?php
/**
 * Created by PhpStorm.
 * User: 08091
 * Date: 04.03.2019
 * Time: 20:52
 */

class ImagesDao
{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }

    public function getAllImages($page_id){
        return $this->db->query("SELECT * FROM images WHERE page_id = $page_id")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function setImage($image, $page_id){
        return $this->db->exec("INSERT INTO images(image) 
                                VALUES('$image') WHERE page_id = $page_id");
    }
    public function updateImage($image, $page_id){
        return $this->db->exec("UPDATE images 
                                SET image = '$image'
                                WHERE page_id = $page_id");
    }
    public function deleteImage($id){
        return $this->db->exec("DELETE FROM image WHERE id = $id");
    }
}
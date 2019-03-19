<?php
/**
 * Created by PhpStorm.
 * User: 08091
 * Date: 27.02.2019
 * Time: 13:29
 */

class SliderDao
{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }

    public function getAllSlides($page_id){
      return $this->db->query("SELECT * FROM slides WHERE page_id = $page_id")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function setSlide($slide_photo, $slide_header, $slide_text, $page_id){
        return $this->db->exec("INSERT INTO `slides`(`slide_photo`, `slide_header`, `slide_text`, `page_id`)
                                VALUES ('$slide_photo','$slide_header','$slide_text',$page_id)");
    }
    public function updateSlide($slide_photo, $slide_header, $slide_text,$slide_id, $page_id){
        return $this->db->exec("UPDATE slides 
                                SET slide_photo = '$slide_photo', slide_header = '$slide_header', slide_text = '$slide_text'
                                WHERE id = $slide_id AND page_id = $page_id");
    }
    public function deleteSlide($slide_id, $page_id){
        return $this->db->exec("DELETE FROM slides WHERE id = $slide_id AND page_id = $page_id");
    }
}
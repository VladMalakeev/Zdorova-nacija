<?php
/**
 * Created by PhpStorm.
 * User: 08091
 * Date: 27.02.2019
 * Time: 13:30
 */

class VideosDao
{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }

    public function getAllVideos($page_id){
        return $this->db->query("SELECT * FROM videos WHERE page_id = $page_id")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function setVideo($link, $page_id){
        return $this->db->exec("INSERT INTO `videos`(`link`, `page_id`) VALUES ('$link',$page_id)");
    }
    public function updateVideo($link, $video_id, $page_id){
        return $this->db->exec("UPDATE videos
                                SET link = '$link'
                                WHERE id = $video_id AND page_id = $page_id");
    }
    public function deleteVideo($video_id, $page_id){
        return $this->db->exec("DELETE FROM videos WHERE id = $video_id AND page_id = $page_id");
    }
}
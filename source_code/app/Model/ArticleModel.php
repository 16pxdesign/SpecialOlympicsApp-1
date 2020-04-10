<?php
/**
 * ArticleModel.php
 * ArticleModel data model
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */

class ArticleModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getArticle($id)
    {
        if($id!=null){
            $sql = "SELECT * FROM ArticleSO where id = ".$id;
            return $this->db->run($sql);
        }
        return null;
    }

    public function getMessage($id)
    {
        if($id!=null){
            $sql = "SELECT id as ID, message as Body, title as Title FROM AmbassadorMSG where id = ".$id;
            return $this->db->run($sql);
        }
        return null;
    }

    public function getArticleImages($id)
    {
        if($id!=null){
            $sql = "SELECT * FROM ImageSO where ArticleID = ".$id;
            return $this->db->run($sql);
        }
        return null;
    }
}
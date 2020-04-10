<?php
/**
 * CategoryModel.php
 * CategoryModel data model
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */

class IndexModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCategories(){
        $sql = "SELECT * FROM Category";
        return $this->db->run($sql);
    }

    public function getSliderPhotos()
    {
        $sql = "SELECT * FROM Slider";
        return $this->db->run($sql);
    }

}
<?php
/**
 * CategoryModel.php
 * CategoryModel data model
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */

class NavModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll(){
        $sql = "SELECT * FROM NavMenu";
        return $this->db->run($sql);
    }

}
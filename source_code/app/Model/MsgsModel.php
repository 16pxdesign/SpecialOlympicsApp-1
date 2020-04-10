<?php
/**
 * CategoryModel.php
 * CategoryModel data model
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */

class MsgsModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMsgs()
    {
        $sql = "SELECT * FROM AmbassadorMSG";
        return $this->db->run($sql);
    }

}
<?php
/**
 * View.php
 * Generic view class
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */


class View
{
    public function __construct()
    {

    }

    public function render($view, $data = false, $err = false)
    {
        //$this->_data = $data;
        $file = DOCROOT . '/app/View/' . $view . '.php';
        if (file_exists($file)) {
            require_once $file;
        }else{

            echo "Problem to load view: " + $file;

        }
    }




}

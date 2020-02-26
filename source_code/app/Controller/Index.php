<?php
/**
 * Index.php
 * Home controller for website
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */


class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->_view->render('index/index');
    }

}
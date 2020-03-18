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
        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header');
        $this->_view->render('shared/corousel');
        $this->_view->render('shared/article');
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }

    public function test(){
        $this->_view->render('shared/html_header');
        $this->_view->render('temp/test');
        $this->_view->render('shared/html_footer');
    }

}
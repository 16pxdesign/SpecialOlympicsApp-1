<?php
/**
 * Index.php
 * Home controller for website
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */


class Index extends Controller
{
    private $_navModel;
    public function __construct()
    {
        parent::__construct();
        $this->_navModel = new NavModel();
        $this->_model = new IndexModel();
    }
    public function index()
    {

        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header', $this->_navModel->getAll());
        $this->_view->render('shared/corousel', $this->_model->getSliderPhotos());
        $this->_view->render('shared/tiles', $this->_model->getCategories());
        //$this->_view->render('shared/qr2');
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }

    public function contact()
    {
        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header', $this->_navModel->getAll());
        $this->_view->render('shared/contactus');
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }

    public function about(){
        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header', $this->_navModel->getAll());
        echo "TODO about";
        //$this->_view->render('shared/contactus');
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }



}
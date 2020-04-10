<?php
/**
 * Categories.php
 * Show categories articles
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */

class Categories extends Controller
{
    private $_navModel;
    public function __construct()
    {
        parent::__construct();
        $this->_navModel = new NavModel();
        $this->_model = new CategoryModel();
    }
    public function index($id = null)
    {

        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header', $this->_navModel->getAll());
        if($id!=null)
            $this->_view->render('shared/tiles_long', $this->_model->getArticleList($id));
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }


}
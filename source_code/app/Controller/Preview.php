<?php

/**
 * Preview.php
 * Display articles content
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */

class Preview extends Controller
{

    private $_navModel;
    public function __construct()
    {
        parent::__construct();
        $this->_navModel = new NavModel();
        $this->_model = new ArticleModel();
    }
    public function index($id=null)
    {

        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header', $this->_navModel->getAll());
        $article = $this->_model->getArticle($id);
        if($article!=null)
        $data["article"] = $article[0];
        $data["media"] = $this->_model->getArticleImages($id);
        if($article!=null)
        $this->_view->render('shared/article', $data);
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }

    public function msg($id=null)
    {

        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header', $this->_navModel->getAll());
        $article = $this->_model->getMessage($id);
        if($article!=null)
            $data["article"] = $article[0];
        $data["media"] = null;
        if($article!=null)
            $this->_view->render('shared/article', $data);
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }


}
<?php
/**
 * Msgs.php
 * Display list of messages
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */

class Msgs extends Controller
{
    private $_navModel;
    public function __construct()
    {
        parent::__construct();
        $this->_navModel = new NavModel();
        $this->_model = new MsgsModel();
    }
    public function index()
    {

        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header', $this->_navModel->getAll());
        $this->_view->render('shared/tiles_long_mgs', $this->_model->getMsgs());
        //$this->_view->render('shared/qr2');
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }

}
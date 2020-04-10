<?php
/**
 * QR.php
 * Hangle qr reader
 * @author     Aleksy Ruszala <16pxdesign@gmial.com>
 * @copyright  2020 Aleksy Ruszala
 */

class QR extends Controller
{
    private $_navModel;

    public function __construct()
    {
        parent::__construct();
        $this->_navModel = new NavModel();

    }
    public function index()
    {
        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header', $this->_navModel->getAll());
        $this->_view->render('shared/qr2');
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }



}
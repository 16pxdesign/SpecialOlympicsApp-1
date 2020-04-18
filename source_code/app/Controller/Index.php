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
        $this->_view->render('shared/map');
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }
    public function send(){
        $this->_view->render('shared/html_header');
        $this->_view->render('shared/header', $this->_navModel->getAll());
        if(!empty($_POST) && !empty($_POST["email"]) && !empty($_POST["message"])) {
            mail("16pxdesign@gmail.com", "Message from Olympics App contact form", $_POST["message"],  'CC: '. $_POST["email"]);
            echo "Message sent. We will replay shortly.";
        }elseif (empty($_POST["message"])){
            echo "Error: Message empty.";
        }else{
            echo "Error: Message not sent. Please try again";
        }
        $this->_view->render('shared/footer');
        $this->_view->render('shared/html_footer');
    }



}
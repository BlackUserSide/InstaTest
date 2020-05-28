<?php


class AdminpanelController extends Controller
{
    private $pageTpl = '/views/adminpanel.tpl.php';

    public function __construct()
    {
        $this->model = new AdminpanelModel();
        $this->view = new View();
    }

    public function index()
    {
        if (!isset($_SESSION)) {
            header('Location: /');
        }
        $this->pageData['title'] = 'Админ панель';
        $this->view->render($this->pageTpl, $this->pageData);
    }
}

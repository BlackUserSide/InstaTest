<?php



class IndexController extends Controller 
{
    private $pageTpl = '/views/index.tpl.php';
    
    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view = new View();
    }
    public function index()
    {
        $this->pageData['title'] = "INSTA";
        $this->view->render($this->pageTpl, $this->pageData);
    }
}
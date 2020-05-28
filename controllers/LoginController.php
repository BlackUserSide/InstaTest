<?php


class LoginController extends Controller 
{
    private $pageTpl = '/views/login.tpl.php';

    public function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new View();
    }
    public function index()
    {
        $this->pageData['title'] = 'LOGIN ADMIN';
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function loginUser()
    {
        if(!empty($_POST)){
            $userName = $_POST['username'];
            $pass = $_POST['pass'];
            if($this->model->checkUser($userName, $pass)){
                echo json_encode(array('status' => 'success'));
            } else {
                echo json_encode(array('status' => 'wrong'));
            }
        }
    }
}
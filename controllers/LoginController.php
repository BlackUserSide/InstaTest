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
        if (isset($_SESSION['user'])) {
            header('Location: /adminpanel');
        }
        $this->pageData['title'] = 'LOGIN ADMIN';
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function loginUser()
    {
        
        if (!empty($_POST)) {
            $userName = $_POST['username'];
            $pass = $_POST['pass'];
            $dataUser = $this->model->checkUser($userName, $pass);
            if($dataUser == null){
                echo json_encode(array('status' => 'wrong'));
            } else {
                foreach($dataUser as $key => $val) {
                    $_SESSION['user']['nickName'] = $val['nickName'];
                    $_SESSION['user']['email'] = $val['email'];
                }
                echo json_encode(array('status' => 'success'));
            }
        }
    }
}

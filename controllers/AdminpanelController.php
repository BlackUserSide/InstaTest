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
        if (!isset($_SESSION['user'])) {
            header('Location: /');
        }
        $this->pageData['serviceAdm'] = $this->model->getServiceAdm();
        $this->pageData['title'] = 'Админ панель';
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function dataSerf()
    {
        $id = $_POST['id'];
        $data = $this->model->getDataSer($id);
        echo json_encode($data);
    }
    public function updateService()
    {
        if(!empty($_POST)) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $oldPrice = $_POST['oldPrice'];
            $this->model->setOldPrice($id, $name, $price, $oldPrice);
            echo json_encode(array('status' => 'success'));
        } else{
            echo json_encode(array('status' => 'wrong'));
        }
    }
    public function delProd()
    {
        if(!empty($_POST)){
            $id = $_POST['id'];
            $this->model->delProd($id);
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'wrong'));
        }
    }
    public function logout(){
        session_destroy();
    }
}

<?php

class OrderController extends Controller
{
    private $pageTpl = '/views/order.tpl.php';

    public function __construct()
    {
        $this->model = new OrderModel();
        $this->view = new View();
    }

    public function index()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /');
        }
        $this->pageData['title'] = 'Заказы';
        $this->pageData['orderData'] = $this->model->getDataOrder();
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function changeAdminStatus()
    {
        if (!empty($_POST)) {
            $status = $_POST['status'];
            $id = $_POST['id'];
            $this->model->changeStatusAdmin($status, $id);
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'wrong'));
        }
    }
}

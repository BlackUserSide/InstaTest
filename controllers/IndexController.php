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
        $this->pageData['title'] = "Самая быстрая и легкая накрутка INSTAGRAM || Заказывай прямо сейчас";
        $this->pageData['liksServ'] = $this->model->getLiks();
        $this->pageData['subsServ'] = $this->model->getSubs();
        $this->pageData['statServ'] = $this->model->getStat();
        $this->pageData['whatchStat'] = $this->model->getAutoWhatc();
        $this->pageData['autoLike'] = $this->model->getAutoLike();
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function setOrder()
    {
        if (!empty($_POST)) {
            $nickName = $_POST['nickName'];
            $date = $_POST['dataOrder'];
            $price = $_POST['price'];
            $name = $_POST['id'];
            $this->model->setOrder($nickName, $price, $name, $date);
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'wrong'));
        }
    }
    public function getSignature ()
    {
        if(!empty($_POST)) {
            $account = $_POST['accaunt'];
            $desc = $_POST['desc'];
            $secretKey = $_POST['secret'];
            $sum = $_POST['sum'];
            $hashStr = $account.'{up}'.$desc.'{up}'.$sum.'{up}'.$secretKey;
            $result =  hash('sha256', $hashStr);
            echo json_encode($result);
        }
    }
}

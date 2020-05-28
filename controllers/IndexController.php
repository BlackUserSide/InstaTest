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
            $price = $_POST['price'];
            $idService = $_POST['id'];
            $this->model->setOrder($nickName, $price, $idService);
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'wrong'));
        }
    }
}

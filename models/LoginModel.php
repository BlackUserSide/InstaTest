<?php


class LoginModel extends Model
{
    public function checkUser($userName, $pass)
    {
        $pass = md5($pass);
        $sql = "SELECT * FROM users WHERE nickName = :nick AND password = :pass";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('nick', $userName, PDO::PARAM_STR);
        $stmt->bindValue('pass', $pass, PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $res[$row['id']] = $row;
        }
        if(!empty($res)) {
            return true;
            foreach($res as $key => $val) {
                $_SESSION['user']['nickName'] = $val['nickName'];
                $_SESSION['user']['email'] = $val['email'];
            }
        } else {
            return false;
        }
    }
}
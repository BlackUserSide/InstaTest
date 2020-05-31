<?php


class IndexModel extends Model
{
    public function getLiks()
    {
        $sql = "SELECT * FROM service WHERE category = 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getSubs()
    {
        $sql = "SELECT * FROM service WHERE category = 2";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getStat()
    {
        $sql = "SELECT * FROM service WHERE category = 3";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getAutoWhatc()
    {
        $sql = "SELECT * FROM service WHERE category = 4";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getAutoLike()
    {
        $sql = "SELECT * FROM service WHERE category = 5";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function setOrder($nickName, $price, $name, $date)
    {
        $sql = "INSERT INTO orderservice (nameService, nickName, price, status, dataOrder, dataChangeStatus, statusAdmin)
        VALUES (:name, :nick, :price, 0, :data, 0, 0)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('name', $name, PDO::PARAM_STR);
        $stmt->bindValue('nick', $nickName, PDO::PARAM_STR);
        $stmt->bindValue('price', $price, PDO::PARAM_STR);
        $stmt->bindValue('data', $date, PDO::PARAM_STR);
        $stmt->execute();
    }
}

<?php


class OrderModel extends Model
{
    public function getDataOrder()
    {
        $sql = "SELECT * FROM orderservice";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function changeStatusAdmin($status, $id) 
    {
        $sql = "UPDATE orderservice SET statusAdmin = :status WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('status', $status, PDO::PARAM_STR);
        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();
    }
}
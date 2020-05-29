<?php

class AdminpanelModel extends Model 
{
    public function getServiceAdm() 
    {
        $sql = "SELECT * FROM service";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }
        return $result;
    }
    public function getDataSer($id)
    {
        $sql = "SELECT * FROM service WHERE id =:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }
        return $result;
    }
    public function setOldPrice($id, $name, $price, $oldPrice)
    {
        $sql = "UPDATE service SET name =:name, price = :price, oldPrice = :oldPrice WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->bindValue('name', $name, PDO::PARAM_STR);
        $stmt->bindValue('price', $price, PDO::PARAM_STR);
        $stmt->bindValue('oldPrice', $oldPrice, PDO::PARAM_STR);
        $stmt->execute();
    }
    public function delProd($id)
    {
        $sql = "DELETE FROM service WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();
    }
}
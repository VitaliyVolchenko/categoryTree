<?php

class CategoryModel extends Model
{
    public function getCategories()
    {
        $sql = "SELECT * FROM `categories`";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
}
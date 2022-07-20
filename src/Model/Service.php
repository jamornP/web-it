<?php
namespace App\Model;

use App\Database\Db;

class Service extends Db {

    public function getAllService() {
        $sql = "
            SELECT 
                *
            FROM 
                `tb_service`
            ORDER BY
                num 
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
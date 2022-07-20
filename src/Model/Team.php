<?php
namespace App\Model;

use App\Database\Db;

class Team extends Db {

    public function getAllTeam() {
        $sql = "
            SELECT 
                *
            FROM 
                `tb_team`
            ORDER BY
                num 
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
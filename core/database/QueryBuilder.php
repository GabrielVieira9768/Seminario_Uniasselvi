<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $start = null, $itensPage = null)
    {
        $sql = "select * from {$table}";

        if($start >= 0 && $itensPage > 0) {
            $sql .= " LIMIT {$start}, {$itensPage}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die("Ocorreu um erro ao tentar percorrer pelo banco de dados: {$e->getMessage()}");
        }
    }

    public function countAll($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute();

            return intval($statement->fetch(PDO::FETCH_NUM)[0]);

        } catch (Exception $e) {
            die("Ocorreu um erro ao tentar contar pelo banco de dados: {$e->getMessage()}");
        }
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table , implode(', ', array_keys($parameters)),
             ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stnt = $this->pdo->prepare($sql);
            $stnt->execute($parameters);

        } catch (Exception $e) {
            die("Ocorreu um erro ao tentar inserir no banco de dados: {$e->getMessage()}");
        }
    }
}
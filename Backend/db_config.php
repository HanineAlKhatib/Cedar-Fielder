<?php


try {
    // Establish a database connection using PDO
    $pdo = new PDO('mysql:host=localhost; dbname=cedar-fields_db', 'root', 'AaAa123123?');

    // Create a new Table object using the PDO instance
    $table = new Table($pdo);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

ini_set('display_errors', 1);
error_reporting(E_ALL);
class Table {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function findSql($sql, $params = array()) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($table, $id) {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }

      public function insert($tableName,array $data): bool {
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_fill(0, count($data), '?'));
    
        $statement = $this->pdo->prepare("INSERT INTO $tableName ($columns) VALUES ($values)");
    
        return $statement->execute(array_values($data));
      }
}


?>
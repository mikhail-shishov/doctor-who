<?php

namespace otazkyodpovede;
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/config.php');

use PDO;
use PDOException;

class QnA
{
    private $conn;
    public function __construct()
    {
        $this->connect();
    }
    private function connect()
    {
        $config = DATABASE;
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
        try {
            $this->conn = new PDO('mysql:host=' . $config['HOST'] . ';dbname=' . $config['DBNAME'] . ';port=' . $config['PORT'], $config['USER_NAME'], $config['PASSWORD'], $options);
        } catch (PDOException $e) {
            die("Chyba pripojenia: " . $e->getMessage());
        }
    }
    public function getQnA() {
        $sql = "SELECT otazka, odpoved FROM qna";
        $result = $this->conn->query($sql);

        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($rows as $row) {
            echo "<div class='accordion-block'>";
            echo "<button class='accordion-heading'><span class='accordion-heading-name'>" . $row["otazka"] . "</span></button>";
            echo "<div class='accordion-text'>" . $row["odpoved"] . "</div>";
            echo "</div>";
        }
    }
}

$qna = new QnA();
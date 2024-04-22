<?php define('__ROOT__', dirname(dirname(__FILE__)));
// error_reporting(E_ALL);
// ini_set("display_errors", "On");
require_once(__ROOT__ . '/classes/database.php');

class QnA extends Database
{
    protected $connection;

    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function otazky($otazka, $odpoved)
    {
        $sql = "SELECT otazka, odpoved FROM qna";
        $result = $this->connection->query($sql);

        if ($result) {
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($rows as $row) {
                echo "<div class='accordion-block'>";
                echo "<button class='accordion-heading'><span class='accordion-heading-name'>" . $row["otazka"] . "</span></button>";
                echo "<div class='accordion-text'>" . $row["odpoved"] . "</div>";
                echo "</div>";
            }
        } else {
            echo "Chyba: " . $this->connection->errorInfo()[2];
        }
    }
}

// define('__ROOT__', dirname(dirname(__FILE__)));
// require_once(__ROOT__ . '/config.php');

// use PDO;
// use PDOException;

// class QnA
// {
//     private $conn;
//     public function __construct()
//     {
//         $this->connect();
//     }
//     private function connect()
//     {
//         $config = DATABASE;
//         $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
//         try {
//             $this->conn = new PDO('mysql:host=' . $config['HOST'] . ';dbname=' . $config['DBNAME'] . ';port=' . $config['PORT'], $config['USER_NAME'], $config['PASSWORD'], $options);
//         } catch (PDOException $e) {
//             die("Chyba pripojenia: " . $e->getMessage());
//         }
//     }
//     public function getQnA() {
//         $sql = "SELECT otazka, odpoved FROM qna";
//         $result = $this->conn->query($sql);

//         $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        
//         foreach ($rows as $row) {
//             echo "<div class='accordion-block'>";
//             echo "<button class='accordion-heading'><span class='accordion-heading-name'>" . $row["otazka"] . "</span></button>";
//             echo "<div class='accordion-text'>" . $row["odpoved"] . "</div>";
//             echo "</div>";
//         }
//     }
// }

// $qna = new QnA();
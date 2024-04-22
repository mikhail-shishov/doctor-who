<?php define('__ROOT__', dirname(dirname(__FILE__)));
// error_reporting(E_ALL);
// ini_set("display_errors", "On");
// require_once(__ROOT__ . '/classes/database.php');
require_once(__ROOT__ . '/classes/users.php');

class QnA extends Database
{
    protected $connection;

    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    // public function otazky($otazka, $odpoved)
    // {
    //     $sql = "SELECT otazka, odpoved FROM qna";
    //     $result = $this->connection->query($sql);

    //     if ($result) {
    //         $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    //         foreach ($rows as $row) {
    //             echo "<div class='accordion-block'>";
    //             echo "<button class='accordion-heading'><span class='accordion-heading-name'>" . $row["otazka"] . "</span></button>";
    //             echo "<div class='accordion-text'>" . $row["odpoved"] . "</div>";
    //             echo "</div>";
    //         }
    //     } else {
    //         echo "Chyba: " . $this->connection->errorInfo()[2];
    //     }
    // }

    public function updateQnA($id, $question, $answer)
    {
        if (!is_numeric($id)) {
            echo 'ID otázky musí byť číslo.';
            exit;
        }
        $sql = "UPDATE qna SET otazka = :question, odpoved = :answer WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':question', $question);
        $statement->bindParam(':answer', $answer);
        $statement->execute();
    }

    public function getQnAById($id)
    {
        if (!is_numeric($id)) {
            echo "ID otázky musí byť číslo.";
            exit;
        }
        $sql = "SELECT * FROM qna WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getQnA()
    {
        $sql = "SELECT * FROM qna";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        $admin = new Users();
        if ($admin->isAdmin()) {
            foreach ($data as $row) {
                echo "<div class='accordion-block'>";
                echo "<button class='accordion-heading'><span class='accordion-heading-name'>" . $row["otazka"] . "</span></button>";
                echo "<div class='accordion-text'>" . $row["odpoved"] . "</div>";
                echo "vy ste admin";
                echo "</div>";
            }
        } else {
            if ($data) {
                foreach ($data as $row) {
                    echo "<div class='accordion-block'>";
                    echo "<button class='accordion-heading'><span class='accordion-heading-name'>" . $row["otazka"] . "</span></button>";
                    echo "<div class='accordion-text'>" . $row["odpoved"] . "</div>";
                    echo "</div>";
                }
            } else {
                echo "Otázky a odpovede nie sú.";
            }
        }
    }

    public function deleteQnA($id) {
        if (!is_numeric($id)) {
            echo 'ID otázky musí byť číslo.';
        }
        $sql = "DELETE FROM qna WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
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
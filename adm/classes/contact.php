<?php define('__ROOT__', dirname(dirname(__FILE__)));

// error_reporting(E_ALL);
// ini_set("display_errors", "On");
require_once(__ROOT__ . '/classes/database.php');

class contact extends Database
{
    protected $connection;

    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }
    public function ulozitSpravu($meno, $email, $sprava)
    {
        $sql = "INSERT INTO kontakt_formular (meno, email, sprava) VALUES (:meno, :email, :sprava)";
        $statement = $this->connection->prepare($sql);
        try {
            $insert = $statement->execute(array(':meno' => $meno, ':email' => $email, ':sprava' => $sprava));
            http_response_code(200);
            return $insert;
        } catch (\Exception $exception) {
            http_response_code(500);
            return false;
        }
    }
}

/*
namespace formular;
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/config.php');

use PDO;
use PDOException;

class Kontakt
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

    public function ulozitSpravu($meno, $email, $sprava)
    {
        $sql = "INSERT INTO udaje (meno, email, sprava) VALUE ('" . $meno . "', '" . $email . "', '" . $sprava . "')";
        $statement = $this->conn->prepare($sql);
        try {
            $insert = $statement->execute();
            http_response_code(200);
            return $insert;
        } catch (\Exception $exception) {
            return http_response_code(404);
        }
    }
    public function __destruct()
    {
        $this->conn = null;
    }
}
*/
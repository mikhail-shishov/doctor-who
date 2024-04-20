<?php define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/database.php');
class Users extends Database
{
    private $role;
    protected $connection;
    public function __construct()
    {
        $this->role = "user";
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function register($login, $email, $password)
    {
        try {
            $hashed_pw = password_hash($password, PASSWORD_BCRYPT);
            $sql = "SELECT * FROM users WHERE (login = ? OR email = ?) LIMIT 1;";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $login);
            $statement->bindParam(2, $email);
            $statement->execute();
            $existingUser = $statement->fetch();
            if ($existingUser) {
                throw new Exception("Použivateľ už existuje.");
            }
            $sql = "INSERT INTO users (login, email, password, role) VALUES (?, ?, ?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $login);
            $statement->bindParam(2, $email);
            $statement->bindParam(3, $hashed_pw);
            $statement->bindParam(4, $this->role);
            $statement->execute();
        } catch (Exception $e) {
            echo "Chyba" . $e->getMessage();
        } finally {
            $this->connection = null;
        }
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $email);
        $statement->execute();
        $user = $statement->fetch();
        if (!$user) {
            throw new Exception("Použivateľ s daným menom neexistuje.");
        }
        $stored_pw = $user["password"];
        if (!password_verify($password, $stored_pw)) {
            throw new Exception("Nespravné heslo");
        }
        session_start();
        $_SESSION["user_id"] = $user["ID"];
        $_SESSION["login"] = $user["login"];
        $_SESSION["role"] = $user["role"];
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: http://localhost/doctor-who/index.php');
        exit();
    }

    public function isAdmin()
    {
        session_start();
        if (isset($_SESSION["role"]) && $_SESSION["user_id"]) {
            if ($_SESSION["role"] == "admin") {
                echo "admin";
                return true;
            } else {
                echo "session sa spustil, ale nie je admin";
            }
        } else {
            echo "nenašiel sa session";
            return false;
        }
    }
}

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
        $sql = "INSERT INTO contact_data (meno, email, sprava, time_sent) VALUES (:meno, :email, :sprava, :time_sent)";
        $currentTimestamp = date('Y-m-d H:i:s');
        $statement = $this->connection->prepare($sql);
        try {
            $insert = $statement->execute(array(':meno' => $meno, ':email' => $email, ':sprava' => $sprava, ':time_sent' => $currentTimestamp));
            http_response_code(200);
            return $insert;
        } catch (\Exception $exception) {
            http_response_code(500);
            return false;
        }
    }

    public function getData_adm()
    {
        $sql = "SELECT * FROM contact_data ORDER BY id DESC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
            echo "<tr>";
            echo "<th>" . $row["id"] . "</th>";
            echo "<td>" . $row["meno"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["sprava"] . "</td>";
            echo "<td style='width:200px'>" . $row["time_sent"] . "</td>";
            echo "</tr>";
        }
    }
}
<?php define('__ROOT__', dirname(dirname(__FILE__)));
// error_reporting(E_ALL);
// ini_set("display_errors", "On");
require_once(__ROOT__ . '/classes/database.php');

class enemy extends Database
{
    protected $connection;

    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function updateEnemy($id, $enemy_name, $enemy_desc, $enemy_photo, $enemy_video, $enemy_quote)
    {
        if (!is_numeric($id)) {
            echo 'ID musí byť číslo.';
            exit;
        }
        $sql = "UPDATE enemies SET enemy_name = :enemy_name, enemy_desc = :enemy_desc, enemy_photo = :enemy_photo, enemy_video = :enemy_video, enemy_quote = :enemy_quote WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':enemy_name', $enemy_name);
        $statement->bindParam(':enemy_desc', $enemy_desc);
        $statement->bindParam(':enemy_photo', $enemy_photo);
        $statement->bindParam(':enemy_video', $enemy_video);
        $statement->bindParam(':enemy_quote', $enemy_quote);
        $statement->execute();
    }

    public function getEnemyById($id)
    {
        if (!is_numeric($id)) {
            echo "ID doktora musí byť číslo.";
            exit;
        }
        $sql = "SELECT * FROM enemies WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getEnemy()
    {
        $sql = "SELECT * FROM enemies";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
            echo "<div class='tab-group' data-tab-group='" . $row["id"] . "'>";
            echo "<div class='tab-menu'>";
            echo "<a href='#" . $row["enemy_name"] . "' class='tab-btn' data-tab-select='" . $row["enemy_name"] . "'>" . $row["enemy_name"] . "</a>";
            echo "</div>";
            echo "<div class='tab' data-tab='" . $row["enemy_name"] . "' id='" . $row["enemy_name"] . "'>";
            echo "<h2 class='h2'>" . $row["enemy_name"] . "</h2>";
            echo "<p class='text'>" . $row["enemy_desc"] . "</p>";
            echo "<div class='enemy-tab-img'>";
            echo "<img src='data:image/jpg;base64," . base64_encode($row["enemy_photo"]) . "' alt='" . $row["enemy_name"] . "' />";
            echo "</div>";
            echo "<div class='row'>";
            echo "<div class='col-6'>";
            echo "<h3 class='h3'>Príklad</h3>";
            echo $row["enemy_video"];
            echo "</div>";
            echo "<div class='col-6'>";
            echo "<h3 class='h3'>Citát</h3>";
            echo "<cite class='enemy-quote'>" . $row["enemy_quote"] . "</cite>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }

    public function getEnemy_adm()
    {
        $sql = "SELECT * FROM enemies";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
            echo "<tr>";
            echo "<th>" . $row["id"] . "</th>";
            echo "<td><img width='200' src='data:image/jpg;base64," . base64_encode($row["enemy_photo"]) . "'/></td>";
            echo "<td style='width:150px'>" . $row["enemy_name"] . "</td>";
            echo "<td style='width:250px;font-size:14px'>" . $row["enemy_desc"] . "</td>";
            echo "<td style='width:250px'>" . $row["enemy_video"] . "</td>";
            echo "<td style='width:150px'>" . $row["enemy_quote"] . "</td>";
            echo "<td>" . "<div class='link-edit-wrap'><a class='link-edit' href='enemy-edit.php?id=" . $row["id"] . "'>Editovať</a><a class='link-delete' href='enemy-delete.php?id=" . $row["id"] . "'>Vymazať</a>" . "</td>";
            echo "</tr>";
        }
    }

    public function deleteEnemy($id) {
        if (!is_numeric($id)) {
            echo 'ID musí byť číslo.';
        }
        $sql = "DELETE FROM enemies WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
}
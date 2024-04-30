<?php define('__ROOT__', dirname(dirname(__FILE__)));
// error_reporting(E_ALL);
// ini_set("display_errors", "On");
require_once(__ROOT__ . '/classes/database.php');

class doctor extends Database
{
    protected $connection;

    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function updateDoctor($id, $doctor_name, $actor_name, $years_active, $doctor_desc)
    {
        if (!is_numeric($id)) {
            echo 'ID otázky musí byť číslo.';
            exit;
        }
        $sql = "UPDATE doctors SET doctor_name = :doctor_name, actor_name = :actor_name, years_active = :years_active, doctor_desc = :doctor_desc WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':doctor_name', $doctor_name);
        $statement->bindParam(':actor_name', $actor_name);
        $statement->bindParam(':years_active', $years_active);
        $statement->bindParam(':doctor_desc', $doctor_desc);
        $statement->execute();
    }

    public function getDoctorById($id)
    {
        if (!is_numeric($id)) {
            echo "ID otázky musí byť číslo.";
            exit;
        }
        $sql = "SELECT * FROM doctors WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getDoctor()
    {
        $sql = "SELECT * FROM doctors";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
            echo "<div class='accordion-block'>";
            echo "<button class='accordion-heading'><span class='accordion-heading-name'>" . $row["otazka"] . "</span></button>";
            echo "<div class='accordion-text'>" . $row["odpoved"] . "</div>";
            echo "<div class='link-edit-wrap'>";
            echo "<a class='link-edit' href='edit-qna.php?id=" . $row["id"] . "'>Editovať</a>";
            echo "<a class='link-delete' href='delete-qna.php?id=" . $row["id"] . "'>Vymazať</a>";
            echo "</div>";
            echo "</div>";
        }
    }

    public function getDoctor_adm()
    {
        $sql = "SELECT * FROM doctors";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
            echo "<tr>";
            echo "<th>" . $row["id"] . "</th>";
            echo "<td><img width='250' src='data:image/jpg;base64," . base64_encode($row["actor_photo"]) . "'/></td>";
            echo "<td style='width:150px'>" . $row["doctor_name"] . "</td>";
            echo "<td style='width:150px'>" . $row["actor_name"] . "</td>";
            echo "<td style='width:150px'>" . $row["years_active"] . "</td>";
            echo "<td>" . $row["doctor_desc"] . "</td>";
            echo "<td>" . "<div class='link-edit-wrap'><a class='link-edit' href='edit-qna.php?id=" . $row["id"] . "'>Editovať</a><a class='link-delete' href='delete-qna.php?id=" . $row["id"] . "'>Vymazať</a>" . "</td>";
            echo "</tr>";
        }
    }

    public function deleteDoctor($id) {
        if (!is_numeric($id)) {
            echo 'ID otázky musí byť číslo.';
        }
        $sql = "DELETE FROM doctors WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
}
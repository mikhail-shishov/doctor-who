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

    public function updateDoctor($id, $doctor_name, $actor_name, $years_active, $doctor_desc, $featured)
    {
        if (!is_numeric($id)) {
            echo 'ID doktora musí byť číslo.';
            exit;
        }
        $sql = "UPDATE doctors SET doctor_name = :doctor_name, actor_name = :actor_name, years_active = :years_active, doctor_desc = :doctor_desc, featured = :featured WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':doctor_name', $doctor_name);
        $statement->bindParam(':actor_name', $actor_name);
        $statement->bindParam(':years_active', $years_active);
        $statement->bindParam(':doctor_desc', $doctor_desc);
        $statement->bindParam(':featured', $featured);
        $statement->execute();
    }

    public function getDoctorById($id)
    {
        if (!is_numeric($id)) {
            echo "ID doktora musí byť číslo.";
            exit;
        }
        $sql = "SELECT * FROM doctors WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function getDoctorTable()
    {
        $sql = "SELECT * FROM doctors";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
            echo "<tr>";
            echo "<th>" . $row["doctor_name"] . "</th>";
            echo "<td>" . $row["actor_name"] . "</td>";
            echo "<td style='width:120px;'>" . $row["years_active"] . "</td>";
            echo "<td>" . $row["doctor_desc"] . "</td>";
            echo "</tr>";
        }
    }

    public function getDoctor()
    {
        $sql = "SELECT * FROM doctors WHERE featured = 1";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
            echo "<div class='splide__slide'>";
            echo "<p class='doctor-name'>Herec " . $row["actor_name"] . " ako " . $row["doctor_name"] . "</p>";
            echo "<div class='enemy-pic'>";
            echo "<img src='data:image/jpg;base64," . base64_encode($row["actor_photo"]) . "' alt='" . $row["actor_name"] . "' />";
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
            echo "<td>" . "<div class='link-edit-wrap'><a class='link-edit' href='edit-doctor.php?id=" . $row["id"] . "'>Editovať</a><a class='link-delete' href='delete-doctor.php?id=" . $row["id"] . "'>Vymazať</a>" . "</td>";
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
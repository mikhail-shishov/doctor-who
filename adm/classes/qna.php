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

    public function getQnAAdm()
    {
        $sql = "SELECT * FROM qna";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $row) {
            echo "<tr>";
            echo "<th>" . $row["id"] . "</th>";
            echo "<td style='width:260px'>" . $row["otazka"] . "</td>";
            echo "<td>" . $row["odpoved"] . "</td>";
            echo "<td>" . "<div class='link-edit-wrap'><a class='link-edit' href='edit-qna.php?id=" . $row["id"] . "'>Editovať</a><a class='link-delete' href='delete-qna.php?id=" . $row["id"] . "'>Vymazať</a>" . "</td>";
            echo "</tr>";
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
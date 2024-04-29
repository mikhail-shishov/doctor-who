<?php define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/database.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new Database();
    $connection = $db->getConnection();

    $otazka = $_POST['otazka'];
    $odpoved = $_POST['odpoved'];

    if (!empty($otazka) && !empty($odpoved)) {
        try {
            $sql = "INSERT INTO qna (otazka, odpoved) VALUES (?, ?)";
            $stmt = $connection->prepare($sql);
            $stmt->execute([$otazka, $odpoved]);

            echo "Obsah formulára bol úspešne uložený.";
        } catch (PDOException $e) {
            echo "Chyba pri ukladaní obsahu formulára: " . $e->getMessage();
        }
        header("Location: ../../qna.php");
        exit;
    } else {
        echo "<p>Všetky polia musia byť vyplnené.</p>";
        echo "<a class='link' href='../../create.php'>Späť</a>";
    }
}

<?php
ini_set('display_error', 1);
//ini_set('log_errors', 1);
error_reporting(E_ALL);
//get item id
$pst_id_v = $_POST['pst_id'];
require_once('global/connection.php');
$query =
    "DELETE FROM petstore
WHERE pst_id = :pst_id_p";
try {
    $statement = $db->prepare($query);
    $statement->bindParam(':pst_id_p', $pst_id_v);
    $row_count = $statement->execute();
    $statement->closeCursor();

    header('Location: index.php');
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo $error;
}
?>
<?php
include './core/connexion.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$task_title = $_POST["title"];
$task_description = $_POST["description"];
$task_start_timestamp = strtotime($_POST["startat"]);
$task_end_timestamp = strtotime($_POST["endat"]);
$task_ended_on_timestamp = "";

try{
  $bdd->exec("INSERT INTO task (task_title, task_description, task_start_timestamp, task_end_timestamp, task_ended_on_timestamp) VALUES ('$task_title', '$task_description', '$task_start_timestamp', '$task_end_timestamp', '$task_ended_on_timestamp')");
}
catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
header('Location: ./index.php');
/*$bdd->exec("INSERT INTO task (task_title, task_description, task_start_timestamp, task_end_timestamp, task_ended_on_timestamp)
VALUES ('$task_title', '$task_description', '$task_start_timestamp', '$task_end_timestamp', '$task_ended_on_timestamp')");*/

?>

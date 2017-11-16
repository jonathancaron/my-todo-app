<?php
include './core/connexion.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$taskid = $_GET["id"];


try{
  $bdd->exec("DELETE FROM task WHERE task_id=$taskid");
}
catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
header('Location: ./index.php');
/*$bdd->exec("INSERT INTO task (task_title, task_description, task_start_timestamp, task_end_timestamp, task_ended_on_timestamp)
VALUES ('$task_title', '$task_description', '$task_start_timestamp', '$task_end_timestamp', '$task_ended_on_timestamp')");*/

?>

<?php
include './core/connexion.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$taskid = $_GET["id"];


try{

  $date = new DateTime();
  $var = $date->getTimestamp();
  $bdd->exec("UPDATE task SET task_ended_on_timestamp = '$var' WHERE task_id=$taskid");
  header('Location: ./index.php');
}
catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
/*$bdd->exec("INSERT INTO task (task_title, task_description, task_start_timestamp, task_end_timestamp, task_ended_on_timestamp)
VALUES ('$task_title', '$task_description', '$task_start_timestamp', '$task_end_timestamp', '$task_ended_on_timestamp')");*/

?>

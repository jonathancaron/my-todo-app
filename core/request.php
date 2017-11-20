<?php
declare(strict_types=1);
  include 'connexion.php';

  $query=$bdd->prepare('SELECT task_id, task_title, task_description, task_start_timestamp, task_end_timestamp, task_ended_on_timestamp FROM task');
  $query->execute();
  $tab = array();
  while($data = $query->fetch(PDO::FETCH_ASSOC)){
    $task_id = $data['task_id'];
    $task_title = $data['task_title'];
    $task_description = $data['task_description'];
    $task_start_timestamp = $data['task_start_timestamp'];
    $task_end_timestamp = $data['task_end_timestamp'];
    $task_ended_on_timestamp = $data['task_ended_on_timestamp'];
    array_push($tab, array($task_id, $task_title, $task_description, $task_start_timestamp, $task_end_timestamp,$task_ended_on_timestamp));

  }
  $query->CloseCursor();

  /*ADD TASK*/
  if(isset($_POST["title"])){
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
    header('Location: ../index.php');
  }
  /*DELETE TASK*/
  else if(isset($_GET["id"])){
    $taskid = $_GET["id"];
    try{
      $bdd->exec("DELETE FROM task WHERE task_id=$taskid");
    }
    catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
    header('Location: ../index.php');
  }
  /*DONE TASK*/
  else if(isset($_GET["iddone"])){
    $taskid = $_GET["iddone"];
    try{

      $date = new DateTime();
      $var = $date->getTimestamp();
      $bdd->exec("UPDATE task SET task_ended_on_timestamp = '$var' WHERE task_id=$taskid");
      header('Location: ../index.php');
    }
    catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  }
?>

<?php


  include 'connexion.php';

  $query=$bdd->prepare('SELECT task_id, task_title, task_description, task_start_timestamp, task_end_timestamp, task_ended_on_timestamp FROM task');
  $query->execute();

  while($data = $query->fetch(PDO::FETCH_ASSOC)){
    $task_id = $data['task_id'];
    $task_title = $data['task_title'];
    $task_description = $data['task_description'];
    $task_start_timestamp = $data['task_start_timestamp'];
    $task_end_timestamp = $data['task_end_timestamp'];
    $task_ended_on_timestamp = $data['task_ended_on_timestamp'];
    echo $task_id;
  }
  $query->CloseCursor();
?>

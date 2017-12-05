<?php
declare(strict_types=1);
  include 'connexion.php';
  if($_GET['q'] === "one"){
    $q = $_GET['q'];
    $query=$bdd->prepare("SELECT * FROM task ORDER BY task_id DESC");
    $query->execute();
    $tabPuce1 = array();
    ?>

    <?php
      while($row = $query->fetch()){
        $tabPuce1[] = $row;
      }
      foreach ($tabPuce1 as $task) {
        if($task['task_ended_on_timestamp'] > $task['task_end_timestamp'] && $task['task_ended_on_timestamp'] !=""){
        ?>
          <li><?php echo $task['task_title'] ?></li>
        <?php
        }
      }
    ?>
    </br>
    <?php
    $query->CloseCursor();
  }
  if($_GET['q'] === "two"){
    $q = $_GET['q'];
    $query=$bdd->prepare("SELECT * FROM task ORDER BY task_id DESC");
    $query->execute();
    $tabPuce2 = array();
    ?>
    <?php
      while($row = $query->fetch()){
        $tabPuce2[] = $row;
      }
      foreach ($tabPuce2 as $task) {
        if($task['task_ended_on_timestamp'] ==""){
          $taskid = $task['task_id'];
          $addTitle =  $task['task_title'];
          $addDec =  $task['task_description'];
          $date_timestamp= $task['$task_start_timestamp'];
          $date_end_timestamp= $task['$task_end_timestamp'];

        ?>
          <li class="list-item">
          </span class"left"><?php echo $addTitle ?></span> <div class="desc"><span class="right haut ecrituremin2"><a href="./core/request.php?iddone=<?php echo $taskid ?>">Done</a> Edit <a href="./core/request.php?id=<?php echo $taskid ?>" class="button">Delete</a></span><br>
              <p><span class="left"><?php echo $addDec ?></span></p><br><br>
              <div class="ecrituremin"> Start At <strong><?php echo $date_timestamp ?></strong><br>End At <strong><?php echo $date_end_timestamp ?></strong></div><hr/><br>
            </div>
          </li>
        <?php
        }
      }
    ?>
    </br>
    <?php
    $query->CloseCursor();
  }
  if($_GET['q'] === "three"){
    $q = $_GET['q'];
    $query=$bdd->prepare("SELECT * FROM task ORDER BY task_id DESC");
    $query->execute();
    $tabPuce3 = array();
    ?>
    <?php
      while($row = $query->fetch()){
        $tabPuce3[] = $row;
      }
      foreach ($tabPuce3 as $task) {
        if($task['task_ended_on_timestamp'] < $task['task_end_timestamp'] && $task['task_ended_on_timestamp'] !=""){
        ?>
          <li><?php echo $task['task_title'] ?></li>
            <?php
          }
      }
    ?>
    </br>
    <?php
    $query->CloseCursor();
  }


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

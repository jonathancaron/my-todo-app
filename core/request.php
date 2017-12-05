<?php
declare(strict_types=1);
  include 'connexion.php';
  if($_GET['q'] === "one"){
    $q = $_GET['q'];

    $query=$bdd->prepare("SELECT * FROM task ORDER BY task_id DESC");
    $query->execute();
    $tabPuce1 = array();
    ?>
    <div class="barre" id="puce1">
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

    </div>
    </br>
    <?php
    $query->CloseCursor();
  }
  /*if($_GET['q'] === "one"){
    $q = intval($_GET['q']);

    $query=$bdd->prepare("SELECT * FROM task WHERE task_id");
    $query->execute();

    echo "<div class=\"barre\" id=\"puce1\">";
      while($row = $query->fetch(PDO::FETCH_ASSOC)){
        if($row['task_ended_on_timestamp'] > $row['task_end_timestamp'] && $row['task_ended_on_timestamp'] !=""){
          echo "<li class=\"list-item\">";
            echo $row['task_title'];
          echo "</li>";
        }
      }
    echo "</div>";
    echo "</br>";

    $query->CloseCursor();
  }*/
  if($_GET['q'] === "two"){
    $q = intval($_GET['q']);

    $query=$bdd->prepare("SELECT * FROM task WHERE task_id");
    $query->execute();

    echo "<div id=\"puce2\">";
      while($row = $query->fetch(PDO::FETCH_ASSOC)){
        if($row['task_ended_on_timestamp'] ==""){
          echo "<li class=\"list-item\">";
            echo $row['task_title'];
            echo "<div class =\"desc\">";
              echo $row['task_title'];
            echo "</div>";
          echo "</li>";
          /*$taskid = $row['task_id'];
          $addTitle =  $row['task_title'];
          $addDec =  $row['task_desc'];
          $date_timestamp = date('d/m/Y - H:m:s', $task_start_timestamp);
          $date_end_timestamp = date('d/m/Y - H:m:s', $task_end_timestamp);
          echo "<li class=\"list-item\">" +
          "</span class\"left\">$addTitle</span> <div class=\"desc\"><span class=\"right haut ecrituremin2\"><a href=\"./core/request.php?iddone=$taskid\">Done</a> Edit <a href=\"./core/request.php?id=$taskid\" class=\"button\">Delete</a></span><br>" +
              "<p><span class=\"left\">$addDec</span></p><br><br>" +
              "<div class=\"ecrituremin\"> Start At <strong>$date_timestamp</strong><br>End At <strong>$date_end_timestamp</strong></div><hr/><br>" +
            "</div>" +
          "</li>";*/
        }
      }
    echo "</div>";
    echo "</br>";

    /*
    for ($i=0; $i < count($tab); $i++) {
      if($tab[$i][5] === "")
      {
        $taskid = $tab[$i][0];
        $addTitle =  $tab[$i][1];
        $addDec =  $tab[$i][2];
        $date_timestamp = date('d/m/Y - H:m:s', $task_start_timestamp);
        $date_end_timestamp = date('d/m/Y - H:m:s', $task_end_timestamp);
        echo "<li class=\"list-item\">
        </span class\"left\">$addTitle</span> <div class=\"desc\"><span class=\"right haut ecrituremin2\"><a href=\"./core/request.php?iddone=$taskid\">Done</a> Edit <a href=\"./core/request.php?id=$taskid\" class=\"button\">Delete</a></span><br>
            <p><span class=\"left\">$addDec</span></p><br><br>
            <div class=\"ecrituremin\"> Start At <strong>$date_timestamp</strong><br>End At <strong>$date_end_timestamp</strong></div><hr/><br>
          </div>
        </li>";
      }
    }*/
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

<?php include('./core/request.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Todo App</title>
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php
      echo $eche;
    ?>
    <div id="main">
      <div id="main-header">
        <!--header-->
        <p class="title left">MY TODOLIST</p>
        <div class="one">
          <a href="#add" id="button_add"><img class="right" src="./img/add.png" alt="Add Task" width="50px"></a>
        </div>
        <div class="two">
          <a href="#close" id="button_close"><img class="right" src="./img/close.png" alt="Close" width="50px"></a>
        </div>

        <hr class="clear">
        <!--end header-->
        <div class="clear"></div>
      </div>
      <div id="main-container">
        <!--tasks -->
        <ul class="list p2" id="todo">
          <?php


            include 'connexion.php';

            $query=$bdd->prepare('SELECT task_id, task_title, task_description, task_start_timestamp, task_end_timestamp, task_ended_on_timestamp FROM task');
            $query->execute();
            $eche = "";
            while($data = $query->fetch(PDO::FETCH_ASSOC)){
              $task_id = $data['task_id'];
              $task_title = $data['task_title'];
              $task_description = $data['task_description'];
              $task_start_timestamp = $data['task_start_timestamp'];
              $task_end_timestamp = $data['task_end_timestamp'];
              $task_ended_on_timestamp = $data['task_ended_on_timestamp'];
              ?>
              <div id="puce2">
                <?php
                if($task_ended_on_timestamp === "")
                {
                  echo "<li class=\"list-item\">
                          $task_title
                          <div class=\"desc\">
                            <p><span class=\"left\">$task_description</span> <span class=\"right haut\">Done Edit</span></p><br></br>
                          </div>
                        </li>";
                }
                ?>
              </div>

            <?php
            }
            $query->CloseCursor();
          ?>

          <div class="barre" id="puce1">
            <li class="list-item">Take a shower</li>
            <li class="list-item">Make my bag</li>
            <li class="list-item">Take a breakfast</li>
            <br>
          </div>

          <div class="barre-red" id="puce3">
            <li class="list-item">Go to the bus stop</li>
          </div>
        </ul>
        <!--end tasks-->
        <div class="clear"></div>


      </div>


      <div id="next-container">
        <div class="p2 right"><a id="clear" href="#clear"><u>Clear</u></a></div>
        <br>
        <p class="title left">TITLE</p>
        <br>
        <input id="title" type="search" name="Title" placeholder="  My todo title">
        <div class="clear"></div>
        <br>
        <p class="title left">DESCRIPTION</p>
        <br>
        <input id="desc"  type="search" name="Description" placeholder="  My todo description">
        <div class="clear"></div>
        <br>
        <p class="title left">START AT</p>
        <br>
        <input id="start_date" type="date"  name="End at">
        <div class="clear"></div>
        <br>
        <p class="title left">END AT</p>
        <br>
        <input id="end_date" type="date" name="End at">

        <div class="clear"></div>
      </div>


      <div id="main-footer">
        <div id="footer-one">
          <div class="p2">
            <hr>
            <p>Show: <span id="task_all"><a href="#alltask">All task</a></span><span id="task_todo"><a href="#todotask">Todo task</a></span><span id="task_done"><a href="#donetask">Done task</a></span></p>
            <hr>
          </div>
        </div>
        <div id="footer-two">
          <div class="p2">
            <hr>
            <p><span>Add task and create new one</span><span>Add task</span></p>
            <hr>
          </div>
        </div>
      </div>

    </div>
  </body>
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>

  </script>
</html>

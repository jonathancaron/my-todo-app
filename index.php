<?php include('./core/request.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Todo App</title>
    <!--<link rel="stylesheet" href="./reset.css">-->
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
    <script>


    </script>
    <div id="main">
      <div id="main-border">
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

            <div class="barre" id="puce1">

            </div>
            <div id="puce2">
              <?php
                /*for ($i=0; $i < count($tab); $i++) {
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
              ?>

              <br>
            </div>
            <div class="barre-red" id="puce3">
              
              <br>
            </div>
          </ul>
          <!--end tasks-->
          <div class="clear"></div>


        </div>


        <div id="next-container">
          <form action="./core/request.php" method="post">


            <div class="p2 right"><a id="clear" href="#clear"><u>Clear</u></a></div>
            <br>
            <p class="title">TITLE</p>
            <br>
            <input id="title" type="search" name="title" placeholder="  My todo title">
            <div class="clear"></div>
            <br>
            <p class="title left">DESCRIPTION</p>
            <br>
            <input id="desc"  type="search" name="description" placeholder="  My todo description">
            <div class="clear"></div>
            <br>
            <p class="title left">START AT</p>
            <br>
            <input id="start_date" type="datetime-local"  name="startat">
            <div class="clear"></div>
            <br>
            <p class="title left">END AT</p>
            <br>
            <input id="end_date" type="datetime-local" name="endat">

            <div class="clear"></div>
            <button class="button" type="submit" name="button">Valider</button>
          </form>
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

    </div>

  </body>
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  </script>
</html>

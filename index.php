<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Todo App</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <div id="main">
      <div id="main-header">

      </div>
      <div id="main-container">
        <!--header-->
        <div class="line">
          <div class="col un haut"><p></p>
          </div>
          <div class="col deux haut">
            <p class="title left">MY TODOLIST</p>
            <img class="right" src="./img/add.png" alt="Add Task" width="50px">
            <hr class="clear">
          </div>
          <div class="col trois haut">
            <p>Add Task</p>
          </div>
        </div>
        <div class="clear"></div>
        <!--end header-->
        <!--tasks done-->
        <div class="line">
          <div class="col un haut">
            <p>Done task on time</p>
          </div>
          <div class="col deux haut">
            <ul class="p2 barre">
              <li>Take a shower </li>
              <li>Make my bag </li>
              <li>Take a breakfast </li>
            </ul>
          </div>
          <div class="col trois haut">
            <p></p>
          </div>
        </div>
        <div class="clear"></div>
        <!--end tasks done-->

      </div>


      <div class="next-container">
      </div>


      <div id="main-footer">
      </div>

    </div>
  </body>
  <script src="./script.js"></script>
</html>

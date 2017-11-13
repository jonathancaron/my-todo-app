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
        <!--header-->
        <p class="title left">MY TODOLIST</p>
        <img class="right" src="./img/add.png" alt="Add Task" width="50px">
        <hr class="clear">
        <!--end header-->
        <div class="clear"></div>
      </div>
      <div id="main-container">
        <!--tasks -->
        <ul class="list p2" id="todo">
          <div class="puce1 barre">
            <li class="list-item">Take a shower</li>
            <li class="list-item">Make my bag</li>
            <li class="list-item">Take a breakfast</li>
          </div>
          <br>
          <div class="puce2">
            <li class="list-item">Go to the bus stop</li>
            <li class="list-item">Be at BeCode on 9:00</li>
            <li class="list-item">Start coding</li>
            <li class="list-item">I need a real BREAK</li>
          </div>
          <br>
          <div class="puce3 barre-red">
            <li class="list-item">Go to the bus stop</li>
          </div>
        </ul>
        <!--end tasks-->
        <div class="clear"></div>


      </div>


      <div class="next-container">
      </div>


      <div id="main-footer">
      </div>

    </div>
  </body>
  <script src="./script.js"></script>
</html>

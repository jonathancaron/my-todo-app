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

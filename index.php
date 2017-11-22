<?php include('./core/request.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Todo App</title>
    <!--<link rel="stylesheet" href="./reset.css">-->
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    function showTasks1() {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("todo").innerHTML=this.responseText;
          console.log(this.responseText);
        }
      }
      xmlhttp.open("GET","./core/request.php?q=one",true);
      xmlhttp.send();
    }
    showTasks1();
    function showTasks2() {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("todo").innerHTML=this.responseText;
          console.log(this.responseText);
        }
      }
      xmlhttp.open("GET","./core/request.php?q=two",true);
      xmlhttp.send();
    }
    showTasks2();
    </script>
  </head>
  <body>
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
            <div class="barre" id="puce1"></div>
            <div id="puce2"></div>
            <div class="barre-red" id="puce3">
              <?php for ($i=0; $i < count($tab); $i++) {
                  if($tab[$i][5] < $tab[$i][4] && $tab[$i][5] !="")
                    {$addTitle =  $tab[$i][1];echo "<li class=\"list-item\">$addTitle</li>";}
                } ?>
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
  <script type="text/javascript" src="script.js"></script>
  </body>

  </script>
</html>

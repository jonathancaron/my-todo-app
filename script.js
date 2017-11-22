/*let app = {
  config:{
    //AJOUTER ATTRIBUT AJAXURL

  },
  data:[

  ],
  start: function(){

  }
}*/
let app = {
  config : {
      ajaxUrl : "http://localhost:8888/todo_app/core/request.php"
  },
  data : [
          //se remplit automatiquement via la ligne 33
  ],
  start : function(){
      const request = new XMLHttpRequest(); //on crée une constante 'requête' qui va elle, créer une nouvelle req Http, XML = json
      request.onreadystatechange = function(event) { //dès que l'état de la requête change, on exécute une fct (en cours d'envoi, envoyée, ...)
          // XMLHttpRequest.DONE === 4
          if (this.readyState === XMLHttpRequest.DONE) { //est-ce que requête done ?
              if (this.status === 200) { // 200 : everything is ok
                  app.data=JSON.parse(this.responseText);//parse : méthode qui transforme du texte en objet javascript MAIS ce texte est au format JSON
                  var container_task = document.getElementById("container_task");
                  for (var i in app.data) { //for qui parcoure toutes les tâches
                      container_task.innerHTML+="<div>"+"<h2>"+app.data[i].task_title+"</h2>"+// on crée un p qui contient le titre de la tâche
                      "<p>"+app.data[i].task_description+"</p>"+"</div>";
                  }
                  //JSON : format qui permet de représenter de l'information, le MP3 du web
                  console.log("Réponse reçue : " + this.responseText);  // this = réponse du serveur, la rép se trouve dans l'attribut responseText qui est défini de base dans JS
              } else {
                  console.log("Statut de la réponse : " + this.status + " : " + this.statusText);
              }
          }
      };
      request.open('GET', app.config.ajaxUrl, true);
      request.send(null);
    }
}

let add = document.getElementById('button_add');
let close = document.getElementById('button_close');

let maincontainer = document.getElementById('main-container');
let nextcontainer = document.getElementById('next-container');

let footerone = document.getElementById('footer-one');
let footertwo = document.getElementById('footer-two');

let clear = document.getElementById('clear');

let title = document.getElementById('title');
let desc = document.getElementById('desc');
let startdate = document.getElementById('start_date');
let enddate = document.getElementById('end_date');

let taskall = document.getElementById('task_all');
let tasktodo = document.getElementById('task_todo');
let taskdone = document.getElementById('task_done');
let puce1 = document.getElementById('puce1');
let puce2 = document.getElementById('puce2');
let puce3 = document.getElementById('puce3');

var listItems = document.getElementsByClassName('list-item');

let i = 0;
while (listItems[i]) {
listItems[i].addEventListener('click',
function () {
let children = this.children;
if (this.id == 'clicked') {

  for (j = 0; j < children.length; j++) {
    if(children[j].className == 'desc') {
      children[j].style.display = 'none';
    }
  }
  this.id = 'hidden';
}
else {

  for (j = 0; j < children.length; j++) {
    if (children[j].className == 'desc') {
      children[j].style.display = 'block';
    }
    else {
      children[j].style.display = 'block';
    }
  }
  this.id = 'clicked';
}
}
);
i++;
}




add.addEventListener('click', function(event) {
  add.style.display = 'none';
  maincontainer.style.display = 'none';
  footerone.style.display = 'none';

  nextcontainer.style.display = 'block';
  footertwo.style.display = 'block';
  close.style.display = 'block';

});
close.addEventListener('click', function(event) {
  add.style.display = 'block';
  maincontainer.style.display = 'block';
  footerone.style.display = 'block';

  nextcontainer.style.display = 'none';
  footertwo.style.display = 'none';
  close.style.display = 'none';

});
clear.addEventListener('click', function(event) {
  title.value = "";
  desc.value = "";
  startdate.value = "";
  enddate.value = "";

});
taskall.addEventListener('click', function(event) {
  puce1.style.display = 'block';
  puce2.style.display = 'block';
  puce3.style.display = 'block';
});
tasktodo.addEventListener('click', function(event) {
  puce1.style.display = 'none';
  puce2.style.display = 'block';
  puce3.style.display = 'none';
});
taskdone.addEventListener('click', function(event) {
  puce1.style.display = 'block';
  puce2.style.display = 'none';
  puce3.style.display = 'block';
});

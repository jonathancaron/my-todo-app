$(document).on('click', '.list-item', function() {
    $(this).children(".desc").toggle();
});

recupPuce1();
recupPuce2();
recupPuce3();
function recupPuce1(){
  $.post('./core/request.php?q=one', function(data){
    $('#puce1').html(data);
  });
}
function recupPuce2(){
  $.post('./core/request.php?q=two', function(data){
    $('#puce2').html(data);
  });
}
function recupPuce3(){
  $.post('./core/request.php?q=three', function(data){
    $('#puce3').html(data);
  });
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
/*
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
}*/




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

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

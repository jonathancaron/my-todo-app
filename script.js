let add = document.getElementById('button_add');
let close = document.getElementById('button_close');

let maincontainer = document.getElementById('main-container');
let nextcontainer = document.getElementById('next-container');

let footerone = document.getElementById('footer-one');
let footertwo = document.getElementById('footer-two');


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

/*$(function(){
  $("#button_add").click(function() {
    $(".one").hide();
    $("#main-container").hide();
    $(".two").show(1000);
    $("#next-container").show(1000);
  });

  $("#button_close").click(function() {
    $(".two").hide();
    $("#next-container").hide();
    $(".one").show(1000);
    $("#main-container").show(1000);
  });
  $("#clear").click(function() {
    $('input').val('').change();
  });
  $("#task_all").click(function() {
    $(".puce1").show(500);
    $(".puce2").show(500);
    $(".puce3").show(500);
  });
  $("#task_todo").click(function() {
    $(".puce1").hide(500);
    $(".puce2").show(500);
    $(".puce3").hide(500);
  });
  $("#task_done").click(function() {
    $(".puce1").show(500);
    $(".puce2").hide(500);
    $(".puce3").show(500);
  });
});*/

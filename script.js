$(function(){
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
});

/*let add = document.getElementById('button_add');
let close = document.getElementById('button_close');
add.addEventListener('click', function(event) {
  add.style.display = 'none';
  close.style.display = 'inline-block';
});*/

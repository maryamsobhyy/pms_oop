const paragraph = document.getElementById(show);
$(document).ready(function(){
    $(".btn").click(function(){
      $("#show").fadeIn(3000);
    });
  });
$(document).ready(function(){
    $(".btn").click(function(){
      $(".btn").fadeOut(500);
    });
  });
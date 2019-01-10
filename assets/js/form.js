$(document).ready(function(){
  $(".thumbnail").click(function(){
    $(this).css("background-color", "#17a2b8");
  });
  $(".thumbnail").dbclick(function(){
    $(this).css("background-color", "#ffffff");
  });

});
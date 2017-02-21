$(document).ready(function(){
  document.getElementById("mySearch").style.height = "100%";
  $("#mySearch").removeAttr('class');
  $("#content-search").removeAttr('class');
});
$(document).ready(function(){
  $("#book").removeAttr('class');
});
$(window).scroll(function(e){

if ($(this).scrollTop() > 500 && $(this).scrollTop() < 1500){
  $('.fixedElement').removeClass("clearFixed").addClass("doFixed");
}
if ($(this).scrollTop() < 500){
  $('.fixedElement').removeClass("doFixed").addClass("clearFixed");

}
if ($(this).scrollTop() > 1500){
  $('.fixedElement').removeClass("doFixed").addClass("clearFixed");

}
});

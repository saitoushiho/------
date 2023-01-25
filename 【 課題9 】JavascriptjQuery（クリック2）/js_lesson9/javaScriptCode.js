$(function(){
  var btn = $('button');
  btn.click(function(){
    btn.removeClass('active');
    $(this).addClass('active');
  });
});
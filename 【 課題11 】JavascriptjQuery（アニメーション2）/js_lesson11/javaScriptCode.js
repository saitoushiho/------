$(function() { 
  // ボタンをクリックしたら発動
  $('button').click(function() {
    // 連打で暴走しないようにstop()も設定
    // $('img').stop().fadeToggle(1000);
    $('img').toggleClass('imgView');
  });
});


function f() {
  var e = document.getElementById("buttonFade");
  
  var data = e.innerHTML;
  data = data == "フェードイン" ? "フェードアウト" : "フェードイン";
  e.innerHTML = data;
  }


// 
const cursor = document.getElementById("cursor");

// カーソル用のdivタグをマウスに追従させる
document.addEventListener("mousemove", function (e) {
  cursor.style.transform =
    "translate(" + e.clientX + "px, " + e.clientY + "px)";
});

// リンクにホバーした時にクラス追加、離れたらクラス削除
const link = document.querySelectorAll("a");
for (let i = 0; i < link.length; i++) {
  link[i].addEventListener("mouseover", function (e) {
    cursor.classList.add("cursor--hover");
  });
  link[i].addEventListener("mouseout", function (e) {
    cursor.classList.remove("cursor--hover");
  });
}

$(".openbtn").click(function () {
  //ボタンがクリックされたら
  $(this).toggleClass("active"); //ボタン自身に activeクラスを付与し
  $("#g-nav").toggleClass("panelactive"); //ナビゲーションにpanelactiveクラスを付与
  $("#header,#container,#footer").toggleClass("mainblur"); //ぼかしたいエリアにmainblurクラスを付与
});

$("#g-nav a").click(function () {
  //ナビゲーションのリンクがクリックされたら
  $(".openbtn").removeClass("active"); //ボタンの activeクラスを除去し
  $("#g-nav").removeClass("panelactive"); //ナビゲーションのpanelactiveクラスを除去し
  $("#header,#container,#footer").removeClass("mainblur"); //ぼかしているエリアのmainblurクラスを除去
});

function BlurTextAnimeControl() {
  $(".blurTrigger").each(function () {
    //blurTriggerというクラス名が
    let elemPos = $(this).offset().top - 50; //要素より、50px上の
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("blur"); // 画面内に入ったらblurというクラス名を追記
    } else {
      $(this).removeClass("blur"); // 画面外に出たらblurというクラス名を外す
    }
  });
}

$(window).scroll(function () {
  BlurTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  BlurTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
});

//nav下層

//ドロップダウンの設定を関数でまとめる
function mediaQueriesWin() {
  const width = $(window).width();
  if (width <= 768) {
    //横幅が768px以下の場合
    $(".has-child>a").off("click"); //has-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
    $(".has-child>a").on("click", function () {
      //has-childクラスがついたaタグをクリックしたら
      let parentElem = $(this).parent(); // aタグから見た親要素の<li>を取得し
      $(parentElem).toggleClass("active"); //矢印方向を変えるためのクラス名を付与して
      $(parentElem).children("ul").stop().slideToggle(500); //liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
      return false; //リンクの無効化
    });
  } else {
    //横幅が768px以上の場合
    $(".has-child>a").off("click"); //has-childクラスがついたaタグのonイベントをoff(無効)にし
    $(".has-child").removeClass("active"); //activeクラスを削除
    $(".has-child").children("ul").css("display", ""); //スライドトグルで動作したdisplayも無効化にする
  }
}

// ページがリサイズされたら動かしたい場合の記述
$(window).resize(function () {
  mediaQueriesWin(); /* ドロップダウンの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  mediaQueriesWin(); /* ドロップダウンの関数を呼ぶ*/
});

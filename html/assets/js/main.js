'use strict';

$(function() {
  //header Navのアコーディオン機能
  $('.header-nav__item').on('click', function() {
    var $subListItem = $(this).find('.header-nav__subList');
    var $arrowAccordion = $(this).find('.header-nav__item__accordion');
    $arrowAccordion.toggleClass('active');
      // 現在のサブメニューをトグル
    if ($subListItem.hasClass('open')) {
      $subListItem.removeClass('open').slideUp(300);
    } else {
      $subListItem.addClass('open').slideDown(300);
    }
  });
  //headerアイコンの変更
  $('.header-nav__item__recruit').on('click', function() {
    var $img = $(".header-nav__item__recruit img");
    var originalSrc = "assets/images/header-recruit-icon.png"; // 元の画像パス
    var newSrc = "assets/images/header-recruit-icon_2.png"; // 変更後の画像パス
    // 現在の画像ソースを判定して切り替える
    if ($img.attr("src") === newSrc) {
        $img.attr("src", originalSrc); // 元の画像に戻す
    } else {
        $img.attr("src", newSrc); // 変更後の画像に切り替える
    }
  });
  $('.header-nav__item__applicant').on('click', function() {
    var $img = $(".header-nav__item__applicant img");
    var originalSrc = "assets/images/header-applicant-icon.png"; // 元の画像パス
    var newSrc = "assets/images/header-applicant-icon_2.png"; // 変更後の画像パス
    // 現在の画像ソースを判定して切り替える
    if ($img.attr("src") === newSrc) {
        $img.attr("src", originalSrc); // 元の画像に戻す
    } else {
        $img.attr("src", newSrc); // 変更後の画像に切り替える
    }
  });
  $('.header-nav__item__seeker').on('click', function() {
    var $img = $(".header-nav__item__seeker img");
    var originalSrc = "assets/images/header-seeker-icon.png"; // 元の画像パス
    var newSrc = "assets/images/header-seeker-icon_2.png"; // 変更後の画像パス
    // 現在の画像ソースを判定して切り替える
    if ($img.attr("src") === newSrc) {
        $img.attr("src", originalSrc); // 元の画像に戻す
    } else {
        $img.attr("src", newSrc); // 変更後の画像に切り替える
    }
  });
  $('.header-nav__item__setting').on('click', function() {
    var $img = $(".header-nav__item__setting img");
    var originalSrc = "assets/images/header-setting-icon.png"; // 元の画像パス
    var newSrc = "assets/images/header-setting-icon_2.png"; // 変更後の画像パス
    // 現在の画像ソースを判定して切り替える
    if ($img.attr("src") === newSrc) {
        $img.attr("src", originalSrc); // 元の画像に戻す
    } else {
        $img.attr("src", newSrc); // 変更後の画像に切り替える
    }
  });

  //アカウント管理のポップアップ機能
  $('.home-search-box__admin').on('click', function() {
    $('.home-search-box__admin__popup__inner').fadeToggle();
  });

  //メッセージ一覧のタブ機能
  $('.home-msg-list-top__tab').on('click', function() {
    $('.home-msg-list-top__tab').removeClass('active');
    $(this).addClass('active');
    var index = $(this).index();
    $('.home-msg-list-msg').hide().eq(index).show();
  });

  //企業アカウント_メッセージ一覧のタブ機能
  $('.home-company-msg-list-top__tab').on('click', function() {
    $('.home-company-msg-list-top__tab').removeClass('active');
    $(this).addClass('active');
    var index = $(this).index();
    $('.home-company-msg-list-msg').hide().eq(index).show();
  });

  //掲示板一覧のタブ機能
  $('.home-board-list-top__tab').on('click', function() {
    $('.home-board-list-top__tab').removeClass('active');
    $(this).addClass('active');
    var index = $(this).index();
    $('.home-board-list-msg').hide().eq(index).show();
  });

  //掲示板画面のタブ機能
  $(document).ready(function() {
    $('.home-board-screen-content__inner').hide().first().show();
    $('.home-board-screen-top__tab').on('click', function() {
      $('.home-board-screen-top__tab').removeClass('active');
      $(this).addClass('active');
      var index = $(this).index();
      $('.home-board-screen-content__inner').hide().eq(index).show();
    });
  });

  //掲示板作成画面(マスター管理者)バイネームのポップアップ機能
  $('.by-name').on('click', function() {
    $('.by-name__inner').show();
  });
});
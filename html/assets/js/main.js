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
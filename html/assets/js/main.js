'use strict';

/////// ホーム画面のjs実装 ///////
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

  //掲示板作成画面の送信確認画面の表示(マスター管理画面)
  $('#confirm-btn').click(function () {
    $('.home-board-create-master-confirm__inner').fadeIn();
    $('.home-board-create-master-confirm__inner').css('display', 'flex')
    setTimeout(function () {
      $('.home-board-create-master-confirm__inner').fadeOut();
    }, 3000);
  });

  //掲示板作成画面の送信確認画面の表示(管理者画面)
  $('#confirm-btn').click(function () {
    $('.home-board-create-admin-confirm__inner').fadeIn();
    $('.home-board-create-admin-confirm__inner').css('display', 'flex')
    setTimeout(function () {
      $('.home-board-create-admin-confirm__inner').fadeOut();
    }, 3000);
  });
  

  /////// 求職者管理のjs実装 ///////
  //求職者一覧フィルター・面談ログのポップアップの機能
  $('#filter, #close, #cancel').on('click', function() {
    $('.seeker-list-content-table__thead, .seeker-applicant-list-content-table__thead, .applicant-selection-list-content-table__thead, .seeker-applicant-list-content-table-ca__thead').toggleClass('onFilter');
    $('.seeker-list-content-filter__inner, .filter-inner').fadeToggle();
  });

  //ラベルの削除
  $('.remove').on('click', function() {
    var $hide = $(this).closest('.option');
    $hide.hide();
  });

  //登録者情報、基本情報_面談ログの表示・非表示
  $('#close, #cancel, #add-log').on('click', function() {
    //面談ログの編集用_表示・非表示
    $('.seeker-register-sidebar-log__edit').fadeToggle();
    //面談ログの追加用_表示・非表示
    $('.seeker-register-sidebar-log__add').fadeToggle();
  });

  //求職者登録_中途入力欄の開閉機能
  $('.seeker-register-content-form__midCareer__title__inner').on('click', function () {
    var $midCareer = $(this).siblings('.seeker-register-content-form__midCareer');
    var $span = $(this).find('span');
    $midCareer.slideToggle(300, function () {
      if ($midCareer.is(':visible')) {
        $span.text('ー');
      } else {
        $span.text('＋');
      }
    });
  });

  //求職者登録_面談ログのメモの開閉機能
  $('.seeker-register-sidebar-log__list__item__name').on('click', function () {
    var $memo = $(this)
      .closest('.seeker-register-sidebar-log__list__item')
      .find('.seeker-register-sidebar-log__list__item__memo');
    var $arrow = $(this);
    $memo.slideToggle(300); // 300msのアニメーションで表示/非表示
    $arrow.toggleClass('open');
  });

  //求職者登録_面談ログの追加ポップアップの表示
  $('.seeker-register-sidebar-log__list__item__edit').on('click', function() {
    $('.seeker-register-sidebar-log__add').fadeToggle();
  });
  //求職者登録_面談ログの削除ポップアップの表示
  $('.seeker-register-sidebar-log__list__item__delete, .seeker-register-sidebar-log__delete__confirm__btn__cancel').on('click', function() {
    $('.seeker-register-sidebar-log__delete__confirm__inner').fadeToggle();
  });
  //求職者登録_面談ログの削除確認ポップアップの表示
  $('.seeker-register-sidebar-log__delete__confirm__btn__submit').on('click', function() {
    $('.seeker-register-sidebar-log__delete__confirm__inner').fadeToggle();
    $('.seeker-register-sidebar-log__delete__complete__inner').fadeToggle();
  });

  //////ポップアップのボタン発火の機能
  /*$('.a').on('click', function() {
    $('.popup-confirm-inner').fadeToggle();
  });*/
  //共通ポップアップのキャンセルボタンの機能
  $('.popup-confirm-body-cancel-btn').on('click', function() {
    $('.popup-confirm-inner').fadeToggle();
  });
  //共通ポップアップの完了ボタンの機能
  $('.popup-confirm-body-decision-btn').on('click', function() {
    $('.popup-confirm-inner').fadeToggle();
    $('.popup-completion-inner').fadeToggle();
  });

  //応募選考管理_一括応募_複数社目 求職者オプションの追加
  $('#option-seeker-plus').on('click', function() {
    $(this).before(`
      <select class='applicant-bulkReq__content__option__box__first' name='seeker' onchange='changeColor(this)'>
        <option value=''>オプション</option>
        <option value=''>山田太郎</option>
        <option value=''>山田華子</option>
        <option value=''>山田麻子</option>
        <option value=''>山田次郎</option>
      </select>
    `);
  });
  //応募選考管理_一括応募_複数社目 企業名オプションの追加
  $('#option-company-plus').on('click', function() {
    $(this).before(`
      <select name="company" id="" onchange="changeColor(this)">
        <option value="">オプション</option>
        <option value="">株式会社サイバーエージェント</option>
      </select>
    `);
  });
  //応募選考管理_一括応募_複数社目 求人オプションの追加
  $('#option-recruit-plus').on('click', function() {
    $(this).before(`
      <select name="recruit" id="" onchange="changeColor(this)">
        <option value="">オプション</option>
      </select>
    `);
  });
  //応募選考管理_一括応募_複数社目 求人オプションの追加
  $('#option-reservation-plus').on('click', function() {
    $(this).before(`
      <select name="reservation" id="" onchange="changeColor(this)">
        <option value="">オプション</option>
      </select>
    `);
  });
  //応募選考管理_一括応募_複数社目 ポップアップの表示機能
  $('#bulkBtn').on('click', function() {
    $('.popup-confirm-inner').fadeToggle();
  });
});

$(document).ready(function() {
  // 現在のURLのパスを取得
  var path = window.location.pathname;
  var currentPage = path.substring(path.lastIndexOf('/') + 1);
  var $img = $(".header-nav__item__home img");
  var newSrc = "assets/images/home_blue.png";
  if (currentPage === 'index.php' || currentPage === 'index-ra-ca.php' || currentPage === 'index-company.php' || currentPage === '') { // ルートアクセスも考慮
    $('.header-nav__item__accordion__first').css({
      'color': '#3A87FD',
      'background': '#F3F6FF'
    });
    $img.attr("src", newSrc);
  }
});

//selectタグの初期値の文字色の変更
function changeColor(e){
  if( e.value == 0 ){
      e.style.color = '';
  }else{
      e.style.color = '#272727';
  }
}


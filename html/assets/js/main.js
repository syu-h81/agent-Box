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
});
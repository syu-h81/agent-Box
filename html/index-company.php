
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex,nofollow" />
  <title>ホーム</title>

  <!-- OGP -->
  <meta property="og:url" content=""> <!-- //ページのURLを設定 -->
  <meta property="og:type" content=""> <!-- //ページの種類を設定 -->
  <meta property="og:title" content=""> <!-- //ページのタイトルを設定 -->
  <meta property="og:description" content=""> <!-- //ページのディスカッションを設定 -->
  <meta property="og:site_name" content=""> <!-- //サイトの名前を設定 -->
  <meta property="og:image" content=""> <!-- //ogp画像の設定 -->
  <meta property="og:locale" content="ja_JP"> <!-- //ページの国コードの設定 -->

  <!-- Import Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Import CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- Import fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" type="text/css" />

  <!-- Import JS/jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
          integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
          crossorigin="anonymous">
  </script>
</head>
<body>
  <div class="wrapper">
    <div class="wrapper-inner">
      <!--======== header ========-->
      <header class="header">
        <div class="header-inner">
          <h1 class="header-logo">
            <a href="index.php"><img src="assets/images/header-logo.png" alt=""></a>
          </h1>
          <nav class="header-nav">
            <ul class="header-nav__list">
              <li class="header-nav__item">
                <a href="index.php" id="accordion" class="header-nav__item__accordion header-nav__item__accordion__first">
                  <img src="assets/images/header-home-icon.png" alt="ホーム">
                  ホーム
                </a>
              </li>
              <li class="header-nav__item">
                <div id="accordion" class="header-nav__item__accordion">
                  <img src="assets/images/header-recruit-icon.png" alt="求人管理">
                  求人管理
                </div>
                <ul class="header-nav__subList">
                  <li class="header-nav__subList__item"><a href="">求人一覧</a></li>
                </ul>
              </li>
              <li class="header-nav__item">
                <div id="accordion" class="header-nav__item__accordion">
                  <img src="assets/images/header-applicant-icon.png" alt="応募選考管理">
                  応募選考管理
                </div>
                <ul class="header-nav__subList">
                  <li class="header-nav__subList__item"><a href="">応募選考一覧</a></li>
                </ul>
              </li>
              <li class="header-nav__item">
                <div id="accordion" class="header-nav__item__accordion">
                  <img src="assets/images/header-seeker-icon.png" alt="求職者管理">
                  求職者管理
                </div>
                <ul class="header-nav__subList">
                  <li class="header-nav__subList__item"><a href="">求職者一覧</a></li>
                  <li class="header-nav__subList__item"><a href="">保留求職者一覧</a></li>
                </ul>
              </li>
              <li class="header-nav__item">
                <div id="accordion" class="header-nav__item__accordion">
                  <img src="assets/images/header-setting-icon.png" alt="">
                  設定
                </div>
                <ul class="header-nav__subList">
                  <li class="header-nav__subList__item"><a href="account-manage-admin.php">ユーザー管理</a></li>
                  <li class="header-nav__subList__item"><a href="">項目管理</a></li>
                  <li class="header-nav__subList__item"><a href="">テンプレート管理</a></li>
                </ul>
              </li>
            </ul>
            <div class="header-nav__help">ヘルプ</div>
          </nav>
        </div>
      </header>
      <main class="main">
        <div class="main-container">
          <div class="home-inner">
            <div class="home-search__inner">
              <div class="home-search-box">
                <div class="home-search-box__search">
                  <input type="search" placeholder="株式会社ANCa内を検索">
                </div>
                <a href="company-message-list.php" class="home-search-box__msg">
                  <img src="assets/images/msg-icon.png" alt="">
                </a>        
              </div>
              <div class="home-search-box__admin home-search-box__admin__company">
                <span class="home-search-box__admin__title">管理者</span>
                <div class="home-search-box__admin__name">山田 太郎</div>
                <div class="home-search-box__admin__popup__inner">
                  <div class="home-search-box__admin__popup__content">
                    <div class="home-search-box__admin__popup__content__info">
                      <span class="home-search-box__admin__popup__content__info__title">管理者</span>
                      <div class="home-search-box__admin__popup__content__info__name">山田 太郎</div>
                      <div class="home-search-box__admin__popup__content__info__email">yamada@gmail.com</div>
                    </div>
                    <div class="home-search-box__admin__popup__content__btn">
                      <div class="home-search-box__admin__popup__content__account__btn">
                        <img src="assets/images/account-setting-icon.png" alt="">
                        <a href="" class="home-search-box__admin__popup__content__account__btn__text">アカウント設定</a>
                      </div>
                      <div class="home-search-box__admin__popup__content__logout__btn">
                        <img src="assets/images/logout-icon.png" alt="">
                        <a href="" class="home-search-box__admin__popup__content__logout__btn__text">ログアウト</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
            <div class="home-company-content">
              <div class="home-company-content__inner">
                <div class="home-company-content__flex">
                  <div class="home-company-content-board">
                    <div class="home-company-content-board__inner">
                      <div class="home-company-content-board__title__inner">
                        <h2>掲示板</h2>
                        <a href="board-list.php" class="home-company-content-board__view__inner">
                          <span>view all</span>
                          <div class="home-company-content-board__view__arrow"></div>
                        </a>
                      </div>
                      <div class="home-company-content-board-card__inner">
                        <div class="home-company-content-board-card">
                          <p class="home-company-content-board-card__text">共有事項など入ります</p>
                          <time class="home-company-content-board-card__time">2024.07.22</time>
                        </div>
                        <div class="home-company-content-board-card">
                          <p class="home-company-content-board-card__text">共有事項など入ります</p>
                          <time class="home-company-content-board-card__time">2024.07.22</time>
                        </div>
                        <div class="home-company-content-board-card">
                          <p class="home-company-content-board-card__text">共有事項など入ります</p>
                          <time class="home-company-content-board-card__time">2024.07.22</time>
                        </div>
                        <div class="home-company-content-board-card">
                          <p class="home-company-content-board-card__text">共有事項など入ります</p>
                          <time class="home-company-content-board-card__time">2024.07.22</time>
                        </div>
                      </div>
                    </div>
                    <div class="home-company-content-board-table__inner">
                      <table class="home-company-content-board-table">
                        <thead class="home-company-content-board-table__thead">
                          <tr class="home-company-content-board-table__section__tr home-company-content-board-table__tr">
                            <th class="home-company-content-board-table__th"><span>求職者名</span></th>
                            <th class="home-company-content-board-table__th"><span>担当企業</span></th>
                            <th class="home-company-content-board-table__th"><span>求人名</span></th>
                            <th class="home-company-content-board-table__th"><span>フェーズ</span></th>
                            <th class="home-company-content-board-table__th"><span>コメント欄</span></th>
                          </tr>
                        </thead>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                        <tr class="home-company-content-board-table__tr">
                          <td class="home-company-content-board-table__td"><a href="">松井良太</a></td>
                          <td class="home-company-content-board-table__td">株式会社ANCa</td>
                          <td class="home-company-content-board-table__td"><a href="">株式会社サイバーエージェント</a></td>
                          <td class="home-company-content-board-table__td">1次選考</td>
                          <td class="home-company-content-board-table__td">この文字はダミーですこの文字はダミーです</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <aside class="home-company-content-sidebar">
                    <div class="home-company-content-sidebar__inner">
                      <div class="home-company-content-sidebar-new-recruit__inner">
                        <div class="home-company-content-sidebar-new-recruit__title__inner">
                          <h3 class="sidebar-title">新着メッセージ</h3>
                          <a href="new-job-info.php" class="home-company-content-sidebar-new-recruit__view__inner">
                            <span>view all</span>
                            <div class="home-company-content-sidebar-new-recruit__view__arrow"></div>
                          </a>
                        </div>
                        <div class="home-company-content-sidebar-new-recruit__card__inner">
                          <div class="home-company-content-sidebar-new-recruit__card">
                            <time>2024.07.22</time>
                            <h4 class="home-company-content-sidebar-new-recruit__card__companyName">この文字はダミーですこの文字・・・</h4>
                            <span class="home-company-content-sidebar-new-recruit__card__text">株式会社ANCa</span>
                            <span class="home-company-content-sidebar-new-recruit__card__text">佐治佳奈子（000-0000-0000）</span>
                          </div>
                          <div class="home-company-content-sidebar-new-recruit__card">
                            <time>2024.07.22</time>
                            <h4 class="home-company-content-sidebar-new-recruit__card__companyName">この文字はダミーですこの文字・・・</h4>
                            <span class="home-company-content-sidebar-new-recruit__card__text">株式会社ANCa</span>
                            <span class="home-company-content-sidebar-new-recruit__card__text">佐治佳奈子（000-0000-0000）</span>
                          </div>
                          <div class="home-company-content-sidebar-new-recruit__card">
                            <time>2024.07.22</time>
                            <h4 class="home-company-content-sidebar-new-recruit__card__companyName">この文字はダミーですこの文字・・・</h4>
                            <span class="home-company-content-sidebar-new-recruit__card__text">株式会社ANCa</span>
                            <span class="home-company-content-sidebar-new-recruit__card__text">佐治佳奈子（000-0000-0000）</span>
                          </div>
                        </div>
                      </div>
                      <div class="home-company-content-sidebar-people__inner">
                        <div class="home-company-content-sidebar-people__title__inner">
                          <h3 class="sidebar-title">応募選考管理</h3>
                        </div>
                        <div class="home-company-content-sidebar-people__card__inner">
                          <div class="home-company-content-sidebar-people__card">
                            <h4 class="home-company-content-sidebar-people__card__event__name">過去の決定人数決定人数の表示</h4>
                            <div class="home-company-content-sidebar-people__card__event__people">
                              <span>200</span>人
                            </div>
                          </div>
                          <div class="home-company-content-sidebar-people__card">
                            <h4 class="home-company-content-sidebar-people__card__event__name">過去の決定人数決定人数の表示</h4>
                            <div class="home-company-content-sidebar-people__card__event__people">
                              <span>200</span>人
                            </div>
                          </div>
                          <div class="home-company-content-sidebar-people__card">
                            <h4 class="home-company-content-sidebar-people__card__event__name">過去の決定人数決定人数の表示</h4>
                            <div class="home-company-content-sidebar-people__card__event__people">
                              <span>200</span>人
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </aside>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <!--======== footer ========-->
    <footer class="footer">
    </footer>
  </div>
  <script src="assets/js/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ホーム</title>
</head>
<body>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

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
            <img src="assets/images/header-logo.png" alt="">
          </h1>
          <nav class="header-nav">
            <ul class="header-nav__list">
              <li class="header-nav__item">
              <div id="accordion" class="header-nav__item__accordion header-nav__item__accordion__first">
                  <img src="assets/images/header-home-icon.png" alt="ホーム">
                  ホーム
                </div>
              </li>
              <li class="header-nav__item">
                <div id="accordion" class="header-nav__item__accordion">
                  <img src="assets/images/header-recruit-icon.png" alt="求人管理">
                  求人管理
                </div>
                <ul class="header-nav__subList">
                  <li class="header-nav__subList__item"><a href="">求人検索</a></li>
                  <li class="header-nav__subList__item"><a href="">保存した求人</a></li>
                  <li class="header-nav__subList__item"><a href="">求人一覧</a></li>
                  <li class="header-nav__subList__item"><a href="">企業一覧</a></li>
                </ul>
              </li>
              <li class="header-nav__item">
                <div id="accordion" class="header-nav__item__accordion">
                  <img src="assets/images/header-applicant-icon.png" alt="応募選考管理">
                  応募選考管理
                </div>
                <ul class="header-nav__subList">
                  <li class="header-nav__subList__item"><a href="">応募選考一覧</a></li>
                  <li class="header-nav__subList__item"><a href="">保留選考一覧</a></li>
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
                  <li class="header-nav__subList__item"><a href="">アカウント管理</a></li>
                  <li class="header-nav__subList__item"><a href="">項目管理</a></li>
                  <li class="header-nav__subList__item"><a href="">テンプレート管理</a></li>
                  <li class="header-nav__subList__item"><a href="">カレンダー連携</a></li>
                  <li class="header-nav__subList__item"><a href="">カレンダー連携</a></li>
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
                <div class="home-search-box__history">
                  <img src="assets/images/history-icon.png" alt="">
                </div>
                <div class="home-search-box__msg">
                  <img src="assets/images/msg-icon.png" alt="">
                </div>        
              </div>
              <div class="home-search-box__admin">
                <span class="home-search-box__admin__title">管理者</span>
                <div class="home-search-box__admin__name">山田 太郎</div>
              </div> 
            </div>
            <div class="home-content">
              <div class="home-content__inner">
                <div class="home-content__flex">
                  <div class="home-content-board">
                    <div class="home-content-board__inner">
                      <div class="home-content-board__title__inner">
                        <h2>掲示板</h2>
                        <a href="" class="home-content-board__view__inner">
                          <span>view all</span>
                          <div class="home-content-board__view__arrow"></div>
                        </a>
                      </div>
                      <div class="home-content-board-card__inner">
                        <div class="home-content-board-card">
                          <p class="home-content-board-card__text">共有事項など入ります</p>
                          <time class="home-content-board-card__time">2024.07.22</time>
                        </div>
                        <div class="home-content-board-card">
                          <p class="home-content-board-card__text">共有事項など入ります</p>
                          <time class="home-content-board-card__time">2024.07.22</time>
                        </div>
                        <div class="home-content-board-card">
                          <p class="home-content-board-card__text">共有事項など入ります</p>
                          <time class="home-content-board-card__time">2024.07.22</time>
                        </div>
                        <div class="home-content-board-card">
                          <p class="home-content-board-card__text">共有事項など入ります</p>
                          <time class="home-content-board-card__time">2024.07.22</time>
                        </div>
                      </div>
                    </div>
                    <div class="home-content-board-google-calendar__inner">
                      <!--<iframe src="https://calendar.google.com/calendar/embed?src=09dba73598b1116f9a246feff62611c9f2a5d101a6ac942eae47866e2c1e76b6%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->
                        <img src="assets/images/google-calendar.png" alt="">
                    </div>
                  </div>
                  <aside class="home-content-sidebar">
                    <div class="home-content-sidebar__inner">
                      <div class="home-content-sidebar-new-recruit__inner">
                        <div class="home-content-sidebar-new-recruit__title__inner">
                          <h3 class="sidebar-title">新着求人案内</h3>
                          <a href="" class="home-content-sidebar-new-recruit__view__inner">
                            <span>view all</span>
                            <div class="home-content-sidebar-new-recruit__view__arrow"></div>
                          </a>
                        </div>
                        <div class="home-content-sidebar-new-recruit__card__inner">
                          <div class="home-content-sidebar-new-recruit__card">
                            <time>2024.07.22</time>
                            <h4 class="home-content-sidebar-new-recruit__card__companyName">会社名ああああああ</h4>
                            <span class="home-content-sidebar-new-recruit__card__text">営業、販売</span>
                            <span class="home-content-sidebar-new-recruit__card__text">営業、販売</span>
                          </div>
                          <div class="home-content-sidebar-new-recruit__card">
                            <time>2024.07.22</time>
                            <h4 class="home-content-sidebar-new-recruit__card__companyName">会社名ああああああ</h4>
                            <span class="home-content-sidebar-new-recruit__card__text">営業、販売</span>
                            <span class="home-content-sidebar-new-recruit__card__text">営業、販売</span>
                          </div>
                          <div class="home-content-sidebar-new-recruit__card">
                            <time>2024.07.22</time>
                            <h4 class="home-content-sidebar-new-recruit__card__companyName">会社名ああああああ</h4>
                            <span class="home-content-sidebar-new-recruit__card__text">営業、販売</span>
                            <span class="home-content-sidebar-new-recruit__card__text">営業、販売</span>
                          </div>
                        </div>
                      </div>
                      <div class="home-content-sidebar-schedule__inner">
                        <div class="home-content-sidebar-schedule__title__inner">
                          <h3 class="sidebar-title">説明会日程</h3>
                          <a href="" class="home-content-sidebar-schedule__view__inner">
                            <span>view all</span>
                            <div class="home-content-sidebar-schedule__view__arrow"></div>
                          </a>
                        </div>
                        <div class="home-content-sidebar-schedule__card__inner">
                          <div class="home-content-sidebar-schedule__card">
                            <h4 class="home-content-sidebar-schedule__card__event__name">イベント名</h4>
                            <div class="home-content-sidebar-schedule__card__event__calendar">
                              <img src="assets/images/calendar-icon.png" alt="">
                              <span>9/5 10:00〜 他日程あり</span>
                            </div>
                            <div class="home-content-sidebar-schedule__card__event__place">
                              <img src="assets/images/pin-icon.png" alt="">
                              <span>新潟県 オンライン</span>
                            </div>
                            <div class="home-content-sidebar-schedule__card__event__occupation">
                            <img src="assets/images/screen-icon.png" alt="">
                              <span>営業、エンジニア</span>
                            </div>
                          </div>
                          <div class="home-content-sidebar-schedule__card">
                            <h4 class="home-content-sidebar-schedule__card__event__name">イベント名</h4>
                            <div class="home-content-sidebar-schedule__card__event__calendar">
                              <img src="assets/images/calendar-icon.png" alt="">
                              <span>9/5 10:00〜 他日程あり</span>
                            </div>
                            <div class="home-content-sidebar-schedule__card__event__place">
                              <img src="assets/images/pin-icon.png" alt="">
                              <span>新潟県 オンライン</span>
                            </div>
                            <div class="home-content-sidebar-schedule__card__event__occupation">
                            <img src="assets/images/screen-icon.png" alt="">
                              <span>営業、エンジニア</span>
                            </div>
                          </div>
                          <div class="home-content-sidebar-schedule__card">
                            <h4 class="home-content-sidebar-schedule__card__event__name">イベント名</h4>
                            <div class="home-content-sidebar-schedule__card__event__calendar">
                              <img src="assets/images/calendar-icon.png" alt="">
                              <span>9/5 10:00〜 他日程あり</span>
                            </div>
                            <div class="home-content-sidebar-schedule__card__event__place">
                              <img src="assets/images/pin-icon.png" alt="">
                              <span>新潟県 オンライン</span>
                            </div>
                            <div class="home-content-sidebar-schedule__card__event__occupation">
                            <img src="assets/images/screen-icon.png" alt="">
                              <span>営業、エンジニア</span>
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
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex,nofollow" />
  <title>ホーム_新着求人案内</title>

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
                  <li class="header-nav__subList__item"><a href="account-manage-admin.php">アカウント管理</a></li>
                  <li class="header-nav__subList__item"><a href="">項目管理</a></li>
                  <li class="header-nav__subList__item"><a href="">テンプレート管理</a></li>
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
                <a href="message-list.php" class="home-search-box__msg">
                  <img src="assets/images/msg-icon.png" alt="">
                </a>        
              </div>
              <div class="home-search-box__admin">
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
            <div class="home-new-job-info__inner">
              <div class="home-new-job-info__block">
                <div class="home-new-job-info__heading__inner">
                  <h2 class="home-title">説明会日程</h2>
                </div>
                <div class="home-new-job-info__card__inner">
                  <div class="home-new-job-info__card">
                    <div class="home-new-job-info__card__title">
                      <time>2024.07.22</time>
                      <h3 class="home-subTitle">求人名入ります求人名入ります</h3>
                      <span>企業名入ります</span>
                    </div>
                    <div class="home-new-job-info__card__content">
                      <div class="home-new-job-info__card__content__img">
                        <img src="assets/images/placeholder-Image.png" alt="">
                      </div>
                      <div class="home-new-job-info__card__content__body">
                        <div class="home-new-job-info__card__content__body__place">
                          <img src="assets/images/pin-icon.png" alt="">
                          <span>新潟県 オンライン</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__occupation">
                          <img src="assets/images/screen-icon.png" alt="">
                          <span>営業、エンジニア</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__text">
                          <p>
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          </p>
                        </div>
                        <a href="new-job-detail.php" class="home-new-job-info__card__content__body__btn">求人を見る</a>
                      </div>
                    </div>
                  </div>
                  <div class="home-new-job-info__card">
                    <div class="home-new-job-info__card__title">
                      <time>2024.07.22</time>
                      <h3 class="home-subTitle">求人名入ります求人名入ります</h3>
                      <span>企業名入ります</span>
                    </div>
                    <div class="home-new-job-info__card__content">
                      <div class="home-new-job-info__card__content__img">
                        <img src="assets/images/placeholder-Image.png" alt="">
                      </div>
                      <div class="home-new-job-info__card__content__body">
                        <div class="home-new-job-info__card__content__body__place">
                          <img src="assets/images/pin-icon.png" alt="">
                          <span>新潟県 オンライン</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__occupation">
                          <img src="assets/images/screen-icon.png" alt="">
                          <span>営業、エンジニア</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__text">
                          <p>
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          </p>
                        </div>
                        <a href="new-job-detail.php" class="home-new-job-info__card__content__body__btn">求人を見る</a>
                      </div>
                    </div>
                  </div>
                  <div class="home-new-job-info__card">
                    <div class="home-new-job-info__card__title">
                      <time>2024.07.22</time>
                      <h3 class="home-subTitle">求人名入ります求人名入ります</h3>
                      <span>企業名入ります</span>
                    </div>
                    <div class="home-new-job-info__card__content">
                      <div class="home-new-job-info__card__content__img">
                        <img src="assets/images/placeholder-Image.png" alt="">
                      </div>
                      <div class="home-new-job-info__card__content__body">
                        <div class="home-new-job-info__card__content__body__place">
                          <img src="assets/images/pin-icon.png" alt="">
                          <span>新潟県 オンライン</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__occupation">
                          <img src="assets/images/screen-icon.png" alt="">
                          <span>営業、エンジニア</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__text">
                          <p>
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          </p>
                        </div>
                        <a href="new-job-detail.php" class="home-new-job-info__card__content__body__btn">求人を見る</a>
                      </div>
                    </div>
                  </div>
                  <div class="home-new-job-info__card">
                    <div class="home-new-job-info__card__title">
                      <time>2024.07.22</time>
                      <h3 class="home-subTitle">求人名入ります求人名入ります</h3>
                      <span>企業名入ります</span>
                    </div>
                    <div class="home-new-job-info__card__content">
                      <div class="home-new-job-info__card__content__img">
                        <img src="assets/images/placeholder-Image.png" alt="">
                      </div>
                      <div class="home-new-job-info__card__content__body">
                        <div class="home-new-job-info__card__content__body__place">
                          <img src="assets/images/pin-icon.png" alt="">
                          <span>新潟県 オンライン</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__occupation">
                          <img src="assets/images/screen-icon.png" alt="">
                          <span>営業、エンジニア</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__text">
                          <p>
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          </p>
                        </div>
                        <a href="new-job-detail.php" class="home-new-job-info__card__content__body__btn">求人を見る</a>
                      </div>
                    </div>
                  </div>
                  <div class="home-new-job-info__card">
                    <div class="home-new-job-info__card__title">
                      <time>2024.07.22</time>
                      <h3 class="home-subTitle">求人名入ります求人名入ります</h3>
                      <span>企業名入ります</span>
                    </div>
                    <div class="home-new-job-info__card__content">
                      <div class="home-new-job-info__card__content__img">
                        <img src="assets/images/placeholder-Image.png" alt="">
                      </div>
                      <div class="home-new-job-info__card__content__body">
                        <div class="home-new-job-info__card__content__body__place">
                          <img src="assets/images/pin-icon.png" alt="">
                          <span>新潟県 オンライン</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__occupation">
                          <img src="assets/images/screen-icon.png" alt="">
                          <span>営業、エンジニア</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__text">
                          <p>
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          </p>
                        </div>
                        <a href="new-job-detail.php" class="home-new-job-info__card__content__body__btn">求人を見る</a>
                      </div>
                    </div>
                  </div>
                  <div class="home-new-job-info__card">
                    <div class="home-new-job-info__card__title">
                      <time>2024.07.22</time>
                      <h3 class="home-subTitle">求人名入ります求人名入ります</h3>
                      <span>企業名入ります</span>
                    </div>
                    <div class="home-new-job-info__card__content">
                      <div class="home-new-job-info__card__content__img">
                        <img src="assets/images/placeholder-Image.png" alt="">
                      </div>
                      <div class="home-new-job-info__card__content__body">
                        <div class="home-new-job-info__card__content__body__place">
                          <img src="assets/images/pin-icon.png" alt="">
                          <span>新潟県 オンライン</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__occupation">
                          <img src="assets/images/screen-icon.png" alt="">
                          <span>営業、エンジニア</span>
                        </div>
                        <div class="home-new-job-info__card__content__body__text">
                          <p>
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          募集要項のテキスト入ります募集要項のテキスト入ります募集要項のテキスト入ります
                          </p>
                        </div>
                        <a href="new-job-detail.php" class="home-new-job-info__card__content__body__btn">求人を見る</a>
                      </div>
                    </div>
                  </div>
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
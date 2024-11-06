
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
                <i class="fa-regular fa-user"></i>
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
            <div class="home-new-job-detail__inner">
              <div class="home-new-job-detail__block">
                <div class="home-new-job-detail-top__inner">
                  <div class="home-new-job-detail-top-tag__inner">
                    <div class="home-new-job-detail-top-tag__date">
                      <span>求人作成日：<time>2024.07.22</time></span>
                      <span>|</span>
                      <span>最終更新日：<time>2024.09.01</time></span>
                    </div>
                    <div class="home-new-job-detail-top-tag__category">
                      <div class="home-new-job-detail-top-tag__category__box">求人種別</div>
                      <div class="home-new-job-detail-top-tag__category__box">新卒中途</div>
                      <div class="home-new-job-detail-top-tag__category__box">雇用形態</div>
                    </div>
                  </div>
                  <div class="home-new-job-detail-top-entry__inner">
                    <div class="home-new-job-detail-top-entry__btn">
                      エントリー
                    </div>
                    <div class="home-new-job-detail-top-entry__span">
                      <span>成果報酬額：理論年収の30%</span>
                      <span>求人取扱企業：株式会社ANCa</span>
                    </div>
                  </div>
                </div>
                <div class="home-new-job-detail-content__inner">
                  <div class="home-new-job-detail-content__title__inner">
                    <h2 class="home-title">
                      求人名入ります求人名入ります求人名入ります求人名入ります求人名入ります求人名入ります
                    </h2>
                    <span>企業名入ります</span>
                  </div>
                  <div class="home-new-job-detail-content">
                    <div class="home-new-job-detail-content__img">
                      <img src="assets/images/placeholder-Image.png" alt="">
                    </div>
                    <div class="home-new-job-detail-content-body">
                      <div class="home-new-job-detail-content-body__summary">
                        <h3 class="home-new-job-detail-content-body__summary__title">求人概要</h3>
                        <div class="home-new-job-detail-content-body__summary__place">
                          <div class="home-new-job-detail-content-body__summary__img__icon">
                            <img src="assets/images/pin-icon.png" alt="">
                          </div>
                          <span>東京・大阪</span>
                        </div>
                        <div class="home-new-job-detail-content-body__summary__occupation">
                          <div class="home-new-job-detail-content-body__summary__img__icon">
                            <i class="fa-solid fa-display"></i>
                          </div>
                          <span>営業、エンジニア</span>
                        </div>
                        <div class="home-new-job-detail-content-body__summary__position">
                          <div class="home-new-job-detail-content-body__summary__img__icon">
                            <img src="assets/images/user-profile-focus--close-geometric-human-person-profile-focus-user.png" alt="">
                          </div>
                          <span>管理職（部長・課長）</span>
                        </div>
                      </div>
                      <div class="home-new-job-detail-content-body__info">
                        <h3 class="home-new-job-detail-content-body__info__title">企業情報</h3>
                        <div class="home-new-job-detail-content-body__info__url">
                          <div class="home-new-job-detail-content-body__info__img__icon">
                            <i class="fa-solid fa-display"></i>
                          </div>
                          <span><a href="">https://dammydammydammydammy</a></span>
                        </div>
                        <div class="home-new-job-detail-content-body__info__prime">
                          <div class="home-new-job-detail-content-body__info__img__icon">
                            <img src="assets/images/graph-bar-arrow-graph.png" alt="">
                          </div>
                          <span>プライム、グロース</span>
                        </div>
                        <div class="home-new-job-detail-content-body__info__position">
                          <div class="home-new-job-detail-content-body__info__img__icon">
                            <img src="assets/images/user-profile-focus--close-geometric-human-person-profile-focus-user.png" alt="">
                          </div>
                          <span>管理職（部長・課長）</span>
                        </div>
                        <div class="home-new-job-detail-content-body__info__service">
                          <div class="home-new-job-detail-content-body__info__img__icon">
                            <img src="assets/images/ball--sports-ball-sport-basketball-shopping-catergories.png" alt="">
                          </div>
                          <span>IT／ソフトウェア、教育、人材、メディア／出版／マスコミ、ゲー<br>ム、
                            不動産／建築、しょうsy
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="home-new-job-detail-content-schedule__inner">
                    <div class="home-new-job-detail-content-schedule__title__inner">
                      <h3>説明会日程</h3>
                    </div>
                    <div class="home-new-job-detail-content-schedule-body">
                      <div class="home-new-job-detail-content-schedule-body__calendar">
                        <img src="assets/images/new-job-detail-calendar.png" alt="">
                      </div>
                      <div class="home-new-job-detail-content-schedule-body__date">
                        <div class="home-new-job-detail-content-schedule-body__date__session">
                          <div class="home-new-job-detail-content-schedule-body__date__session__title">オンライン説明会</div>
                          <div class="home-new-job-detail-content-schedule-body__date__session__date">
                            <div class="home-new-job-detail-content-schedule-body__date__session__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__session__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__session__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__session__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__session__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__session__date__text">11/01（月） 14:00-15:00</div>
                          </div>
                        </div>
                        <div class="home-new-job-detail-content-schedule-body__date__selection">
                          <div class="home-new-job-detail-content-schedule-body__date__selection__title">1DAY選考会</div>
                          <div class="home-new-job-detail-content-schedule-body__date__selection__date">
                            <div class="home-new-job-detail-content-schedule-body__date__selection__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__selection__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__selection__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__selection__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__selection__date__text">11/01（月） 14:00-15:00</div>
                            <div class="home-new-job-detail-content-schedule-body__date__selection__date__text">11/01（月） 14:00-15:00</div>
                          </div>
                        </div>
                        <div class="home-new-job-detail-content-schedule-body__date__copyBtn">テキストコピー</div>
                      </div>
                    </div>
                  </div>
                  <!-- ===== 応募条件 ===== -->
                  <div class="home-new-job-detail-info-conditions home-new-job-detail-info-block">
                    <div class="home-new-job-detail-info-block__title__inner">
                      <h3 class="home-subTitle">応募条件</h3>
                    </div>
                    <div class="home-new-job-detail-info-block__list">
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>必須条件</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>歓迎要件</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>求める人物像</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>採用募集背景</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>求人取扱企業からの案内</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ===== 勤務地 ===== -->
                  <div class="home-new-job-detail-info-work-place home-new-job-detail-info-block">
                    <div class="home-new-job-detail-info-block__title__inner">
                      <h3 class="home-subTitle">勤務地</h3>
                    </div>
                    <div class="home-new-job-detail-info-block__list">
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>勤務地</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>勤務地住所</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>転勤の有無</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>勤務地の補足</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ===== 雇用形態 ===== -->
                  <div class="home-new-job-detail-info-conditions home-new-job-detail-info-block">
                    <div class="home-new-job-detail-info-block__title__inner">
                      <h3 class="home-subTitle">雇用形態</h3>
                    </div>
                    <div class="home-new-job-detail-info-block__list">
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>雇用形態</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>試用期間</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>就業時間</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>平均残業時間（月間）</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>就業時間の補足</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ===== 給与・福利厚生 ===== -->
                  <div class="home-new-job-detail-info-benefits home-new-job-detail-info-block">
                    <div class="home-new-job-detail-info-block__title__inner">
                      <h3 class="home-subTitle">給与・福利厚生</h3>
                    </div>
                    <div class="home-new-job-detail-info-block__heading">給与</div>
                    <div class="home-new-job-detail-info-block__list">
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>想定年収</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>賞与</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>年収の補足</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                      </div>
                    </div>
                    <div class="home-new-job-detail-info-block__heading">休日休暇</div>
                    <div class="home-new-job-detail-info-block__list home-new-job-detail-info-block__list__2">
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>年間休日</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>休日休暇の補足</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="home-new-job-detail-info-block__heading">福利厚生</div>
                    <div class="home-new-job-detail-info-block__list home-new-job-detail-info-block__list__3">
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>福利厚生</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                      <div class="home-new-job-detail-info-block-item">
                        <div class="home-new-job-detail-info-block-item__title__inner">
                          <h4>福利厚生の補足</h4>
                        </div>
                        <div class="home-new-job-detail-info-block-item__text__inner">
                          <p>
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ===== 事業内容・仕事内容 ===== -->
                  <div class="home-new-job-detail-info-flex home-new-job-detail-info-block">
                    <div class="home-new-job-detail-info-business">
                      <div class="home-new-job-detail-info-block__title__inner home-new-job-detail-info-flex__title__inner">
                        <h3 class="home-subTitle">事業内容</h3>
                      </div>
                      <div class="home-new-job-detail-info-business__text__inner">
                        <p>
                          この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                        </p>
                      </div>
                    </div>
                    <div class="home-new-job-detail-info-job">
                      <div class="home-new-job-detail-info-block__title__inner home-new-job-detail-info-flex__title__inner">
                        <h3 class="home-subTitle">仕事内容</h3>
                      </div>
                      <div class="home-new-job-detail-info-job__text__inner">
                        <p>
                          この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                          この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- ===== 選考情報・制約手数料 ===== -->
                  <div class="home-new-job-detail-info-flex home-new-job-detail-info-block">
                    <!-- ===== 選考情報 ===== -->
                    <div class="home-new-job-detail-info-selection">
                      <div class="home-new-job-detail-info-block__title__inner home-new-job-detail-info-flex__title__inner">
                        <h3 class="home-subTitle">選考情報</h3>
                      </div>
                      <div class="home-new-job-detail-info-selection__list home-new-job-detail-info-block__list">
                        <div class="home-new-job-detail-info-block-item">
                          <div class="home-new-job-detail-info-block-item__title__inner">
                            <h4>選考フロー</h4>
                          </div>
                          <div class="home-new-job-detail-info-block-item__text__inner">
                            <p>
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            </p>
                          </div>
                        </div>
                        <div class="home-new-job-detail-info-block-item">
                          <div class="home-new-job-detail-info-block-item__title__inner">
                            <h4>選考のポイント</h4>
                          </div>
                          <div class="home-new-job-detail-info-block-item__text__inner">
                            <p>
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            </p>
                          </div>
                        </div>
                        <div class="home-new-job-detail-info-block-item">
                          <div class="home-new-job-detail-info-block-item__title__inner">
                            <h4>選考の注意事項</h4>
                          </div>
                          <div class="home-new-job-detail-info-block-item__text__inner">
                            <p>
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ===== 制約手数料 ===== -->
                    <div class="home-new-job-detail-info-fee">
                      <div class="home-new-job-detail-info-block__title__inner home-new-job-detail-info-flex__title__inner">
                        <h3 class="home-subTitle">選考情報</h3>
                      </div>
                      <div class="home-new-job-detail-info-fee__list home-new-job-detail-info-block__list">
                        <div class="home-new-job-detail-info-block-item">
                          <div class="home-new-job-detail-info-block-item__title__inner">
                            <h4>成果報酬額</h4>
                          </div>
                          <div class="home-new-job-detail-info-block-item__text__inner">
                            <p>
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            </p>
                          </div>
                        </div>
                        <div class="home-new-job-detail-info-block-item">
                          <div class="home-new-job-detail-info-block-item__title__inner">
                            <h4>成果報酬額の発生起点</h4>
                          </div>
                          <div class="home-new-job-detail-info-block-item__text__inner">
                            <p>
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            </p>
                          </div>
                        </div>
                        <div class="home-new-job-detail-info-block-item">
                          <div class="home-new-job-detail-info-block-item__title__inner">
                            <h4>返戻金規定</h4>
                          </div>
                          <div class="home-new-job-detail-info-block-item__text__inner">
                            <p>
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            </p>
                          </div>
                        </div>
                        <div class="home-new-job-detail-info-block-item">
                          <div class="home-new-job-detail-info-block-item__title__inner">
                            <h4>支払サイト</h4>
                          </div>
                          <div class="home-new-job-detail-info-block-item__text__inner">
                            <p>
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            </p>
                          </div>
                        </div>
                        <div class="home-new-job-detail-info-block-item">
                          <div class="home-new-job-detail-info-block-item__title__inner">
                            <h4>理論年収の計算式</h4>
                          </div>
                          <div class="home-new-job-detail-info-block-item__text__inner">
                            <p>
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                              この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                            </p>
                          </div>
                        </div>
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
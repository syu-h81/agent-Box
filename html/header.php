<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex,nofollow" />
  <title>Agentbox</title>

  <!-- Import Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
              <li class="header-nav__item header-nav__item__home">
                <div id="accordion" class="header-nav__item__accordion header-nav__item__accordion__first">
                  <img src="assets/images/header-home-icon.png" alt="ホーム">
                  ホーム
                </div>
              </li>
              <li class="header-nav__item header-nav__item__recruit">
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
              <li class="header-nav__item header-nav__item__applicant">
                <div id="accordion" class="header-nav__item__accordion">
                  <img src="assets/images/header-applicant-icon.png" alt="応募選考管理">
                  応募選考管理
                </div>
                <ul class="header-nav__subList">
                  <li class="header-nav__subList__item"><a href="">応募選考一覧</a></li>
                  <li class="header-nav__subList__item"><a href="">保留選考一覧</a></li>
                </ul>
              </li>
              <li class="header-nav__item header-nav__item__seeker">
                <div id="accordion" class="header-nav__item__accordion">
                  <img src="assets/images/header-seeker-icon.png" alt="求職者管理">
                  求職者管理
                </div>
                <ul class="header-nav__subList">
                  <li class="header-nav__subList__item"><a href="">求職者一覧</a></li>
                  <li class="header-nav__subList__item"><a href="">保留求職者一覧</a></li>
                </ul>
              </li>
              <li class="header-nav__item header-nav__item__setting">
                <div id="accordion" class="header-nav__item__accordion">
                  <img src="assets/images/header-setting-icon.png" alt="">
                  設定
                </div>
                <ul class="header-nav__subList">
                  <li class="header-nav__subList__item"><a href="account-message-general.php">ユーザー管理</a></li>
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
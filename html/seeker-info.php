<?php $title="求職者管理_基本情報" ?>
<?php session_start() ?>
<?php require_once dirname(__FILE__).'/header.php'; ?>
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
          </div>
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
        <div class="seeker-info__inner seeker-inner">
          <div class="seeker-info__block seeker-block">
            <div class="seeker-info__title__inner seeker-title-inner">
              <h2>基本情報</h2>
              <span>作成日：2024/07/28</span>
            </div>
            <div class="seeker-info-content__inner seeker-content-inner">
              <!-- ===== 求職者名 ===== -->
              <div class="seeker-info-content__name seeker-info-content">
                <div class="seeker-info-content__name__label seeker-info-content__label">
                  <label>求職者名</label>
                </div>
                <div class="seeker-info-content__name__output seeker-info-content__output">
                  <div class="seeker-info-content__name__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['firstName'] ?></span>
                    <span><?php echo $_POST['lastName'] ?></span>
                  </div>
                  <div class="seeker-info-content__name__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== フリガナ ===== -->
              <div class="seeker-info-content__furigana seeker-info-content">
                <div class="seeker-info-content__furigana__label seeker-info-content__label">
                  <label>フリガナ</label>
                </div>
                <div class="seeker-info-content__furigana__output seeker-info-content__output">
                  <div class="seeker-info-content__furigana__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['firstFurigana'] ?></span>
                    <span><?php echo $_POST['lastFurigana'] ?></span>
                  </div>
                  <div class="seeker-info-content__furigana__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 担当 ===== -->
              <div class="seeker-info-content__charge seeker-info-content">
                <div class="seeker-info-content__charge__label seeker-info-content__label">
                  <label>担当</label>
                </div>
                <div class="seeker-info-content__charge__output seeker-info-content__output">
                  <div class="seeker-info-content__charge__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['charge'] ?></span>
                  </div>
                  <div class="seeker-info-content__charge__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 生年月日 ===== -->
              <div class="seeker-info-content__date seeker-info-content">
                <div class="seeker-info-content__date__label seeker-info-content__label">
                  <label>生年月日</label>
                </div>
                <div class="seeker-info-content__date__output seeker-info-content__output">
                  <div class="seeker-info-content__date__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['year'] ?>年</span>
                    <span><?php echo $_POST['month'] ?>月<?php echo $_POST['date'] ?>日</span>
                  </div>
                  <div class="seeker-info-content__date__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 性別 ===== -->
              <div class="seeker-info-content__gender seeker-info-content">
                <div class="seeker-info-content__gender__label seeker-info-content__label">
                  <label>性別</label>
                </div>
                <div class="seeker-info-content__gender__output seeker-info-content__output">
                  <div class="seeker-info-content__gender__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['gender'] ?></span>
                  </div>
                  <div class="seeker-info-content__gender__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== メールアドレス ===== -->
              <div class="seeker-info-content__email seeker-info-content">
                <div class="seeker-info-content__email__label seeker-info-content__label">
                  <label>メールアドレス</label>
                </div>
                <div class="seeker-info-content__email__output seeker-info-content__output">
                  <div class="seeker-info-content__email__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['email'] ?></span>
                  </div>
                  <div class="seeker-info-content__email__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 電話番号 ===== -->
              <div class="seeker-info-content__phoneNumber seeker-info-content">
                <div class="seeker-info-content__phoneNumber__label seeker-info-content__label">
                  <label>電話番号</label>
                </div>
                <div class="seeker-info-content__phoneNumber__output seeker-info-content__output">
                  <div class="seeker-info-content__phoneNumber__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['phoneNumber-1'] ?>-<?php echo $_POST['phoneNumber-2'] ?>-<?php echo $_POST['phoneNumber-3'] ?></span>
                  </div>
                  <div class="seeker-info-content__phoneNumber__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 学校名 ===== -->
              <div class="seeker-info-content__university seeker-info-content">
                <div class="seeker-info-content__university__label seeker-info-content__label">
                  <label>学校名</label>
                </div>
                <div class="seeker-info-content__university__output seeker-info-content__output">
                  <div class="seeker-info-content__university__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['university'] ?></span>
                  </div>
                  <div class="seeker-info-content__university__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== ステータス ===== -->
              <div class="seeker-info-content__status seeker-info-content">
                <div class="seeker-info-content__status__label seeker-info-content__label">
                  <label>ステータス</label>
                </div>
                <div class="seeker-info-content__status__output seeker-info-content__output">
                  <div class="seeker-info-content__status__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['status'] ?></span>
                  </div>
                  <div class="seeker-info-content__status__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 不成立理由 ===== -->
              <div class="seeker-info-content__notEstablished seeker-info-content">
                <div class="seeker-info-content__notEstablished__label seeker-info-content__label">
                  <label>不成立理由</label>
                </div>
                <div class="seeker-info-content__notEstablished__output seeker-info-content__output">
                  <div class="seeker-info-content__notEstablished__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['notEstablished'] ?></span>
                  </div>
                  <div class="seeker-info-content__name__notEstablished__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 決定予想日 ===== -->
              <div class="seeker-info-content__assumption seeker-info-content">
                <div class="seeker-info-content__assumption__label seeker-info-content__label">
                  <label>決定予想日</label>
                </div>
                <div class="seeker-info-content__assumption__output seeker-info-content__output">
                  <div class="seeker-info-content__assumption__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['schedule-1'] ?> - <?php echo $_POST['schedule-1'] ?></span>
                  </div>
                  <div class="seeker-info-content__assumption__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 初回面談日 ===== -->
              <div class="seeker-info-content__interview seeker-info-content">
                <div class="seeker-info-content__interview__label seeker-info-content__label">
                  <label>初回面談日</label>
                </div>
                <div class="seeker-info-content__interview__output seeker-info-content__output">
                  <div class="seeker-info-content__interview__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['schedule-2'] ?> - <?php echo $_POST['schedule-2'] ?></span>
                  </div>
                  <div class="seeker-info-content__interview__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 面談設定日 ===== -->
              <div class="seeker-info-content__schedule seeker-info-content">
                <div class="seeker-info-content__schedule__label seeker-info-content__label">
                  <label>面談設定日</label>
                </div>
                <div class="seeker-info-content__schedule__output seeker-info-content__output">
                  <div class="seeker-info-content__schedule__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['schedule-3'] ?> - <?php echo $_POST['schedule-3'] ?></span>
                  </div>
                  <div class="seeker-info-content__schedule__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 学生情報 ===== -->
              <div class="seeker-info-content__info seeker-info-content">
                <div class="seeker-info-content__info__label seeker-info-content__label">
                  <label>学生情報</label>
                </div>
                <div class="seeker-info-content__info__output seeker-info-content__output">
                  <div class="seeker-info-content__info__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['student-info'] ?></span>
                  </div>
                  <div class="seeker-info-content__info__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== CAコメント欄 ===== -->
              <div class="seeker-info-content__comment seeker-info-content">
                <div class="seeker-info-content__comment__label seeker-info-content__label">
                  <label>CAコメント欄</label>
                </div>
                <div class="seeker-info-content__comment__output seeker-info-content__output">
                  <div class="seeker-info-content__comment__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['ca-comment'] ?></span>
                  </div>
                  <div class="seeker-info-content__comment__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 卒年度 ===== -->
              <div class="seeker-info-content__graduation seeker-info-content">
                <div class="seeker-info-content__graduation__label seeker-info-content__label">
                  <label>卒年度</label>
                </div>
                <div class="seeker-info-content__graduation__output seeker-info-content__output">
                  <div class="seeker-info-content__graduation__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['graduation'] ?>-<?php echo $_POST['graduation'] ?></span>
                  </div>
                  <div class="seeker-info-content__graduation__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 文理区分 ===== -->
              <div class="seeker-info-content__literatureScience seeker-info-content">
                <div class="seeker-info-content__literatureScience__label seeker-info-content__label">
                  <label>文理区分</label>
                </div>
                <div class="seeker-info-content__literatureScience__output seeker-info-content__output">
                  <div class="seeker-info-content__literatureScience__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['literatureScience'] ?></span>
                  </div>
                  <div class="seeker-info-content__literatureScience__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 学部名 ===== -->
              <div class="seeker-info-content__faculty seeker-info-content">
                <div class="seeker-info-content__faculty__label seeker-info-content__label">
                  <label>学部名</label>
                </div>
                <div class="seeker-info-content__faculty__output seeker-info-content__output">
                  <div class="seeker-info-content__faculty__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['faculty'] ?></span>
                  </div>
                  <div class="seeker-info-content__faculty__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 学科名 ===== -->
              <div class="seeker-info-content__faculty seeker-info-content">
                <div class="seeker-info-content__faculty__label seeker-info-content__label">
                  <label>学科名</label>
                </div>
                <div class="seeker-info-content__faculty__output seeker-info-content__output">
                  <div class="seeker-info-content__faculty__output__value seeker-info-content__output__value">
                    <span><?php echo $_POST['subject'] ?></span>
                  </div>
                  <div class="seeker-info-content__faculty__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                </div>
              </div>
              <!-- ===== 中途入力欄 ===== -->
              <div class="seeker-info-content__midCareer__inner">
                <div class="seeker-info-content__midCareer__title__inner seeker-title-inner">
                  <h3>中途入力欄</h3>
                </div>
                <!-- ===== 転職可能時期 ===== -->
                <div class="seeker-info-content__midCareer__jobChange seeker-info-content">
                  <div class="seeker-info-content__midCareer__jobChange__label seeker-info-content__label">
                    <label>転職可能時期</label>
                  </div>
                  <div class="seeker-info-content__midCareer__jobChange__output seeker-info-content__output">
                    <div class="seeker-info-content__midCareer__jobChange__output__value seeker-info-content__output__value">
                      <span><?php echo $_POST['jobChange'] ?>-<?php echo $_POST['jobChange'] ?></span>
                    </div>
                    <div class="seeker-info-content__midCareer__jobChange__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                  </div>
                </div>
                <!-- ===== 経験社数 ===== -->
                <div class="seeker-info-content__midCareer__company seeker-info-content">
                  <div class="seeker-info-content__midCareer__company__label seeker-info-content__label">
                    <label>経験社数</label>
                  </div>
                  <div class="seeker-info-content__midCareer__company__output seeker-info-content__output">
                    <div class="seeker-info-content__midCareer__company__output__value seeker-info-content__output__value">
                      <span><?php echo $_POST['company'] ?></span>
                    </div>
                    <div class="seeker-info-content__midCareer__company__output__edit">
                    <img src="assets/images/edit.png" alt="">
                  </div>
                  </div>
                </div>
                <!-- ===== 現在の職種 ===== -->
                <div class="seeker-info-content__midCareer__occupation seeker-info-content">
                  <div class="seeker-info-content__midCareer__occupation__label seeker-info-content__label">
                    <label>現在の職種</label>
                  </div>
                  <div class="seeker-info-content__midCareer__occupation__output seeker-info-content__output">
                    <div class="seeker-info-content__midCareer__occupation__output__value seeker-info-content__output__value">
                      <span><?php echo $_POST['nowOccupation'] ?>-</span>
                    </div>
                    <div class="seeker-info-content__midCareer__occupation_output__edit">
                      <img src="assets/images/edit.png" alt="">
                    </div>
                  </div>
                </div>
                <!-- ===== 希望職種 ===== -->
                <div class="seeker-info-content__midCareer__occupation seeker-info-content">
                  <div class="seeker-info-content__midCareer__occupation__label seeker-info-content__label">
                    <label>希望職種</label>
                  </div>
                  <div class="seeker-info-content__midCareer__occupation__output seeker-info-content__output">
                    <div class="seeker-info-content__midCareer__occupation__output__value seeker-info-content__output__value">
                      <span><?php echo $_POST['desiredOccupation'] ?>-</span>
                    </div>
                    <div class="seeker-info-content__midCareer__occupation__output__edit">
                      <img src="assets/images/edit.png" alt="">
                    </div>
                  </div>
                </div>
                <!-- ===== 現在の年収 ===== -->
                <div class="seeker-info-content__midCareer__income seeker-info-content">
                  <div class="seeker-info-content__midCareer__income__label seeker-info-content__label">
                    <label>現在の年収</label>
                  </div>
                  <div class="seeker-info-content__midCareer__income__output seeker-info-content__output">
                    <div class="seeker-info-content__midCareer__income__output__value seeker-info-content__output__value">
                      <span>¥<?php echo $_POST['nowIncome'] ?></span>
                    </div>
                    <div class="seeker-info-content__midCareer__income__output__edit">
                      <img src="assets/images/edit.png" alt="">
                    </div>
                  </div>
                </div>
                <!-- ===== 希望年収 ===== -->
                <div class="seeker-info-content__midCareer__income seeker-info-content">
                  <div class="seeker-info-content__midCareer__income__label seeker-info-content__label">
                    <label>希望年収</label>
                  </div>
                  <div class="seeker-info-content__midCareer__income__output seeker-info-content__output">
                    <div class="seeker-info-content__midCareer__income__output__value seeker-info-content__output__value">
                      <span>¥<?php echo $_POST['desiredIncome'] ?></span>
                    </div>
                    <div class="seeker-info-content__midCareer__income__output__edit">
                      <img src="assets/images/edit.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <aside class="seeker-register-sidebar__inner">
            <div class="seeker-register-sidebar__block">
              <div class="seeker-register-sidebar-selection">
                <div class="seeker-register-sidebar-selection__title__inner seeker-title-inner">
                  <h2>選考状況</h2>
                  <a href="" class="seeker-register-sidebar-selection__view__inner">
                    <span>view all</span>
                    <div class="seeker-register-sidebar-selection__view__arrow"></div>
                  </a>
                </div>
                <div class="seeker-register-sidebar-selection__box__inner">
                  <div class="seeker-register-sidebar-selection__box">
                    <div class="seeker-register-sidebar-selection__box__text">応募</div>
                    <div class="seeker-register-sidebar-selection__box__people">
                      <span class="seeker-register-sidebar-selection__box__people__number">200</span>
                      <span class="seeker-register-sidebar-selection__box__people__unit">人</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__box">
                    <div class="seeker-register-sidebar-selection__box__text">選考</div>
                    <div class="seeker-register-sidebar-selection__box__people">
                      <span class="seeker-register-sidebar-selection__box__people__number">40</span>
                      <span class="seeker-register-sidebar-selection__box__people__unit">人</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__box">
                    <div class="seeker-register-sidebar-selection__box__text">最終</div>
                    <div class="seeker-register-sidebar-selection__box__people">
                      <span class="seeker-register-sidebar-selection__box__people__number">5</span>
                      <span class="seeker-register-sidebar-selection__box__people__unit">人</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__box">
                    <div class="seeker-register-sidebar-selection__box__text">内定</div>
                    <div class="seeker-register-sidebar-selection__box__people">
                      <span class="seeker-register-sidebar-selection__box__people__number">4</span>
                      <span class="seeker-register-sidebar-selection__box__people__unit">人</span>
                    </div>
                  </div>
                </div>
                <div class="seeker-register-sidebar-selection__list__inner">
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社DAMMY</p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社DAMMY</p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社DAMMY</p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社DAMMY</p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社DAMMY</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="seeker-register-sidebar-log">
                <div class="seeker-register-sidebar-log__title__inner seeker-title-inner">
                  <h2>面談ログ</h2>
                  <a href="" class="seeker-register-sidebar-log__add__inner">
                    <img src="assets/images/edit.png" alt="">
                    <span>面談ログを追加する</span>
                  </a>
                </div>
                <div class="seeker-register-sidebar-log__list">
                  <div class="seeker-register-sidebar-log__list__thead">
                    <div class="seeker-register-sidebar-log__list__label__1">担当</div>
                    <div class="seeker-register-sidebar-log__list__label__2">種別</div>
                    <div class="seeker-register-sidebar-log__list__label__3">面談日</div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">オンライン</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">オンライン</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                </div>
                <!-- ===== 面談ログの編集 ===== -->
                <div class="seeker-register-sidebar-log__edit">
                  <div class="seeker-register-sidebar-log__edit__block">
                    <form action="" method="POST" class="seeker-register-sidebar-log__edit__content">
                      <div id="close" class="seeker-register-sidebar-log__edit__content__close">
                        <span></span>
                        <span></span>
                      </div>
                      <!-- ===== 面談ログ_担当 ===== -->
                      <div class="seeker-register-sidebar-log__edit__content__charge">
                        <div class="seeker-register-sidebar-log__edit__content__charge__label">
                          <label for="">担当</label>
                        </div>
                        <div class="seeker-register-sidebar-log__edit__content__charge__input">
                          <select name="edit-charge" id="" onchange="changeColor(this)">
                            <option value="" selected>選択してください</option>
                            <option value="松井">松井</option>
                          </select>
                        </div>
                      </div>
                      <!-- ===== 面談ログ_面談内容 ===== -->
                      <div class="seeker-register-sidebar-log__edit__content__type">
                        <div class="seeker-register-sidebar-log__edit__content__type__label">
                          <label for="">面談内容</label>
                        </div>
                        <div class="seeker-register-sidebar-log__edit__content__type__input">
                          <div class="seeker-register-sidebar-log__edit__content__type__input__box">
                            <input type="radio" name="edit-type" value="電話">
                            <span>電話</span>
                          </div>
                          <div class="seeker-register-sidebar-log__edit__content__type__input__box">
                            <input type="radio" name="edit-type" value="オンライン">
                            <span>オンライン</span>
                          </div>
                          <div class="seeker-register-sidebar-log__edit__content__type__input__box">
                            <input type="radio" name="edit-type" value="対面">
                            <span>対面</span>
                          </div>
                        </div>
                      </div>
                      <!-- ===== 面談ログ_面談日 ===== -->
                      <div class="seeker-register-sidebar-log__edit__content__interview">
                        <div class="seeker-register-sidebar-log__edit__content__interview__label">
                          <label for="">面談日</label>
                        </div>
                        <div class="seeker-register-sidebar-log__edit__content__interview__input">
                          <div class="seeker-register-sidebar-log__edit__content__interview__input__box">
                            <select name="edit-year" id="" onchange="changeColor(this)">
                              <option value="" selected>0000</option>
                            </select><span>年</span>
                          </div>
                          <div class="seeker-register-sidebar-log__edit__content__interview__input__box">
                            <select name="edit-month" id="" onchange="changeColor(this)">
                              <option value="" selected>0000</option>
                            </select><span>月</span>
                          </div>
                          <div class="seeker-register-sidebar-log__edit__content__interview__input__box">
                            <select name="edit-date" id="" onchange="changeColor(this)">
                              <option value="" selected>0000</option>
                            </select><span>日</span>
                          </div>
                        </div>
                      </div>
                      <!-- ===== 面談ログ_メモ ===== -->
                      <div class="seeker-register-sidebar-log__edit__content__memo">
                        <div class="seeker-register-sidebar-log__edit__content__memo__label">
                          <label for="">メモ</label>
                        </div>
                        <div class="seeker-register-sidebar-log__edit__content__memo__input">
                          <textarea name="edit-memo" id="" placeholder="テキストの編集"></textarea>
                        </div>
                      </div>
                      <div class="seeker-register-sidebar-log__edit__content__btn">
                        <button type="button" id="cancel" class="seeker-register-sidebar-log__edit__content__btn__cancel">キャンセル</button>
                        <button type="submit" class="seeker-register-sidebar-log__edit__content__btn__submit">保存</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </main>
  <?php require_once dirname(__FILE__).'/footer.php'; ?>
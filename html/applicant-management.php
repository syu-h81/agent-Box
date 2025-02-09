<?php $title="応募選考管理_選考一覧_フィルター適用後" ?>
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
        <div class="applicant-management__inner applicant-inner">
          <div class="applicant-management__block applicant-block">
            <div class="applicant-management__title__inner applicant-title-inner">
              <div class="applicant-management__title__flex">
                <h2>サイバーエージェント＿松井良太の選考</h2>
                <span>初回面談前</span>
              </div>
              <div class="applicant-management__title__date">
                <span>作成日：2024/07/28</span>
              </div>
            </div>
            <div class="applicant-management__content__inner">
              <div class="applicant-management__content">
                <!-- ===== 基本情報 ===== -->
                <div class="applicant-management__content__basicInfo__inner">
                  <div class="applicant-management__content__basicInfo__title__inner applicant-title-inner">
                    <div class="applicant-management__content__basicInfo__title__flex applicant-management__content__title__flex">
                      <h2>基本情報</h2>
                      <span>次回面談予定日： <span>未定</span></span>
                    </div>
                    <div class="applicant-management__content__basicInfo__title__edit applicant-management__content__edit">
                      <img src="assets/images/edit.png" alt="">
                    </div>
                  </div>
                  <div class="applicant-management__content__basicInfo__list__inner">
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>求職者名</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>松井　良太</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>学校名</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>OOO学院大学</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>卒年度</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>0000/00/00</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>応募数</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>00</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>選考数</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>00</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>学最終選考数校名</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>00</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>選考内定数</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__memo__inner">
                  <div class="applicant-management__content__memo__title__inner applicant-title-inner">
                    <h2>選考メモ</h2>
                    <div class="applicant-management__content__memo__edit">
                      <img src="assets/images/edit.png" alt="">
                    </div>
                  </div>
                  <div class="applicant-management__content__memo__area">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。</p>
                  </div>
                  <a href="" class="applicant-management__content__memo__btn">
                    <div class="applicant-management__content__memo__text">一覧に戻る</div>
                  </a>
                </div>
              </div>
              <div class="applicant-management__content__sidebar">
                <div class="applicant-management__content__sidebar__title__inner applicant-title-inner">
                  <h2>Unitas採用担当、松井良太</h2>
                </div>
                <div class="applicant-management__content__sidebar__msg__box">
                  <div class="applicant-management__content__sidebar__msg__box__name">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/applicant-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>松井良太</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box applicant-management__content__sidebar__msg__box__unitas">
                  <div class="applicant-management__content__sidebar__msg__box__name applicant-management__content__sidebar__msg__box__name__unitas">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/Unitas-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>Unitas採用担当</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show applicant-management__content__sidebar__msg__box__show__unitas">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box__textarea">
                  <textarea name="" placeholder="メッセージを入力"></textarea>
                  <div class="applicant-management__content__sidebar__msg__box__textarea__icons">
                    <div class="applicant-management__content__sidebar__msg__box__textarea__icon">
                      <img src="assets/images/attached-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__textarea__icon">
                      <img src="assets/images/send-icon.png" alt="">
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
  <?php require_once dirname(__FILE__).'/footer.php'; ?>
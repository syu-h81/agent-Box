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
        <div class="applicant-bulkReq__inner applicant-inner">
          <div class="applicant-bulkReq__block">
            <div class="applicant-bulkReq__title__inner applicant-title-inner">
              <h2>新規選考応募</h2>
            </div>
            <div class="applicant-bulkReq__content__inner">
              <div class="applicant-bulkReq__content__names">
                <div class="applicant-bulkReq__content__name">求職者</div>
                <div class="applicant-bulkReq__content__name">企業</div>
                <div class="applicant-bulkReq__content__name">求人</div>
                <div class="applicant-bulkReq__content__name">予約日時</div>
              </div>
              <div class="applicant-bulkReq__content__option__inner">
                <div class="applicant-bulkReq__content__option">
                  <select class="applicant-bulkReq__content__option__box__first" name="seeker" id="" onchange="changeColor(this)">
                    <option value="">オプション</option>
                    <option value="">山田太郎</option>
                    <option value="">山田華子</option>
                    <option value="">山田麻子</option>
                    <option value="">山田次郎</option>
                  </select>
                  <div id="option-seeker-plus" class="applicant-bulkReq__content__option__plus">
                    <img src="assets/images/radius-plus-icon.png" alt="">
                  </div>
                </div>
                <div class="applicant-bulkReq__content__arrow__icon">
                  <img src="assets/images/option-icon.png" alt="">
                </div>
                <div class="applicant-bulkReq__content__option">
                  <select name="company" id="" onchange="changeColor(this)">
                    <option value="">オプション</option>
                    <option value="">株式会社サイバーエージェント</option>
                  </select>
                  <div id="option-company-plus" class="applicant-bulkReq__content__option__plus">
                    <img src="assets/images/radius-plus-icon.png" alt="">                    
                  </div>
                </div>
                <div class="applicant-bulkReq__content__arrow__icon">
                  <img src="assets/images/option-icon.png" alt="">
                </div>
                <div class="applicant-bulkReq__content__option">
                  <select name="recruit" id="" onchange="changeColor(this)">
                    <option value="">オプション</option>
                  </select>
                  <div id="option-recruit-plus" class="applicant-bulkReq__content__option__plus">
                    <img src="assets/images/radius-plus-icon.png" alt="">
                  </div>
                </div>
                <div class="applicant-bulkReq__content__arrow__icon">
                  <img src="assets/images/option-icon.png" alt="">
                </div>
                <div class="applicant-bulkReq__content__option">
                  <select name="reservation" id="" onchange="changeColor(this)">
                    <option value="">オプション</option>
                  </select>
                  <div id="option-reservation-plus" class="applicant-bulkReq__content__option__plus">
                    <img src="assets/images/radius-plus-icon.png" alt="">
                  </div>
                </div>
              </div>
              <button id="bulkBtn" class="applicant-bulkReq__content__apply__btn">まとめて応募する</button>
            </div>
          </div>
          <div class="popup-confirm-inner">
            <div class="popup-confirm-block">
              <div class="popup-confirm-body">
                <div class="popup-confirm-body-heading">まとめて応募しますか？</div>
                <div class="popup-confirm-body-btns">
                  <button class="popup-confirm-body-cancel-btn popup-confirm-body-btn">戻る</button>
                  <button class="popup-confirm-body-decision-btn popup-confirm-body-btn">応募する</button>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-completion-inner">
            <div class="popup-completion-block">
              <div class="popup-completion-body">
                <div class="popup-completion-body-heading">応募完了しました</div>
                <a href="applicant-bulkRequest.php" class="popup-completion-body-btn">
                  <button>戻る</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php require_once dirname(__FILE__).'/footer.php'; ?>
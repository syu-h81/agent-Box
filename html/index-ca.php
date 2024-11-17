      <?php require_once dirname(__FILE__).'/header-ra-ca.php'; ?>
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
            <div class="home-content">
              <div class="home-content__inner">
                <div class="home-content__flex">
                  <div class="home-content-board">
                    <div class="home-content-board__inner">
                      <div class="home-content-board__title__inner">
                        <h2>掲示板</h2>
                        <a href="board-list.php" class="home-content-board__view__inner">
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
                  <!--===== サイドバーの読み込み =====-->
                  <?php require_once dirname(__FILE__).'/sidebar.php'; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <?php require_once dirname(__FILE__).'/footer.php'; ?>
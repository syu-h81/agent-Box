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
                  <aside class="home-content-sidebar">
                    <div class="home-content-sidebar__inner">
                      <div class="home-content-sidebar-new-recruit__inner">
                        <div class="home-content-sidebar-new-recruit__title__inner">
                          <h3 class="sidebar-title">新着求人案内</h3>
                          <a href="new-job-info.php" class="home-content-sidebar-new-recruit__view__inner">
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
                          <a href="session-schedule.php" class="home-content-sidebar-schedule__view__inner">
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
    <?php require_once dirname(__FILE__).'/footer.php'; ?>
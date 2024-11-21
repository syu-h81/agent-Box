      <?php $title="ホーム_掲示板画面" ?>
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
            <div class="home-board-screen__inner">
              <div class="home-board-screen__block">
                <div class="home-board-screen__heading__inner">
                  <h2 class="home-title">掲示板</h2>
                </div>
                <div class="home-board-screen-top__inner">
                  <div class="home-board-screen-top__tab__inner">
                    <div class="home-board-screen-top__tab active home-board-screen-top__tab__all">全てのメッセージ</div>
                    <div class="home-board-screen-top__tab home-board-screen-top__tab__guidance">事務局からのご案内</div>
                    <div class="home-board-screen-top__tab home-board-screen-top__tab__favorite">お気に入り</div>
                  </div>
                  <div class="home-board-screen-top__search__inner">
                    <input type="search" placeholder="掲示板内を検索">
                  </div>
                </div>
                <!-- ===== 全てのメッセージ ===== -->
                <div class="home-board-screen-content__inner">
                  <div class="home-board-screen-content__list">
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="home-board-screen-content-body">
                    <div class="home-board-screen-content-body__address">
                      <div class="home-board-screen-content-body__address__time">
                        <time>2024.07.22</time>
                      </div>
                      <div class="home-board-screen-content-body__address__title">
                        <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      </div>
                      <div class="home-board-screen-content-body__address__url">
                        <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                        <a href="">https://www.dammydammydammy</a>
                      </div>
                    </div>
                    <div class="home-board-screen-content-body__content">
                      <p>
                        この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。<br>
                        <br>
                        この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。<br>
                        <br>
                        この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                      </p>
                    </div>
                  </div>
                </div>
                <!-- ===== 事務局からのご案内===== -->
                <div class="home-board-screen-content__inner">
                  <div class="home-board-screen-content__list">
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="home-board-screen-content-body">
                    <div class="home-board-screen-content-body__address">
                      <div class="home-board-screen-content-body__address__time">
                        <time>2024.07.22</time>
                      </div>
                      <div class="home-board-screen-content-body__address__title">
                        <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      </div>
                      <div class="home-board-screen-content-body__address__url">
                        <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                        <a href="">https://www.dammydammydammy</a>
                      </div>
                    </div>
                    <div class="home-board-screen-content-body__content">
                      <p>
                        この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。<br>
                        <br>
                        この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。<br>
                        <br>
                        この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                      </p>
                    </div>
                  </div>
                </div>
                <!-- ===== お気に入り ===== -->
                <div class="home-board-screen-content__inner">
                  <div class="home-board-screen-content__list">
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="home-board-screen-content-item">
                      <div class="home-board-screen-content-item__body">
                        <div class="home-board-screen-content-item__body__time">
                          <time>2024.07.22</time>
                        </div>
                        <div class="home-board-screen-content-item__body__title">
                          <p>この文字はダミーですこの文字はダミーです</p>
                        </div>
                        <div class="home-board-screen-content-item__body__url">
                          <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                          <a href="">https://www.dammydammydammy</a>
                        </div>
                        <div class="home-board-screen-content-item__body__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                      </div>
                      <div class="home-board-screen-content-item__favorite">
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="home-board-screen-content-body">
                    <div class="home-board-screen-content-body__address">
                      <div class="home-board-screen-content-body__address__time">
                        <time>2024.07.22</time>
                      </div>
                      <div class="home-board-screen-content-body__address__title">
                        <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      </div>
                      <div class="home-board-screen-content-body__address__url">
                        <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                        <a href="">https://www.dammydammydammy</a>
                      </div>
                    </div>
                    <div class="home-board-screen-content-body__content">
                      <p>
                        この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。<br>
                        <br>
                        この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。<br>
                        <br>
                        この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <?php require_once dirname(__FILE__).'/footer.php'; ?>
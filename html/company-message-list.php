      <?php $title="ホーム_企業アカウント_メッセージ一覧" ?>
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
            <div class="home-company-msg-list__inner">
              <div class="home-company-msg-list__block">
                <div class="home-company-msg-list__heading__inner">
                  <h2 class="home-title">メッセージ</h2>
                </div>
                <div class="home-company-msg-list-top__inner">
                  <div class="home-company-msg-list-top__tab__inner">
                    <div class="home-company-msg-list-top__tab active home-company-msg-list-top__tab__reception">受信トレイ</div>
                    <div class="home-company-msg-list-top__tab home-company-msg-list-top__tab__unread">未読メッセージ</div>
                    <div class="home-company-msg-list-top__tab home-company-msg-list-top__tab__favorite">お気に入り</div>
                  </div>
                  <div class="home-company-msg-list-top__search__inner">
                    <input type="search" placeholder="メッセージ内を検索">
                  </div>
                </div>
                <div class="home-company-msg-list-pageList__inner">
                    <div class="home-company-msg-list-pageList">
                      <a class="home-company-msg-list-pageList__prev__link" href="#unread-prev">＜</a>
                    </div>
                    <div class="home-company-msg-list-pageList">
                      <a class="home-company-msg-list-pageList__link" href="#unread-1">1</a>
                    </div>
                    <div class="home-company-msg-list-pageList">
                      <a class="home-company-msg-list-pageList__link" href="#unread-1">2</a>
                    </div>
                    <div class="home-company-msg-list-pageList">
                      <a class="home-company-msg-list-pageList__link" href="#unread-3">3</a>
                    </div>
                    <div class="home-company-msg-list-pageList">
                      <a class="home-company-msg-list-pageList__link" href="#unread-4">4</a>
                    </div>
                    <div class="home-company-msg-list-pageList">
                      <a class="home-company-msg-list-pageList__link" href="#unread-5">5</a>
                    </div>
                    <div class="home-company-msg-list-pageList">
                      <a class="home-company-msg-list-pageList__link" href="">...</a>
                    </div>
                    <div class="home-company-msg-list-pageList">
                      <a class="home-company-msg-list-pageList__next__link" href="#unread-next">＞</a>
                    </div>
                  </div>
                <!-- ===== 受信トレイのコンテンツ ===== -->
                <div class="home-company-msg-list-msg home-company-msg-list-msg-reception">
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                </div>
                <!-- ===== 未読メッセージのコンテンツ ===== -->
                <div class="home-company-msg-list-msg home-company-msg-list-msg-unread">
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                </div>
                <!-- ===== お気に入りのコンテンツ ===== -->
                <div class="home-company-msg-list-msg home-company-msg-list-msg-favorite">
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
                    </div>
                  </div>
                  <div class="home-company-msg-list-msg__content">
                    <div class="home-company-msg-list-msg__content__date">
                      <time>2024.07.22</time>
                    </div>
                    <div class="home-company-msg-list-msg__content__body">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                      <div class="home-company-msg-list-msg__content__body__address">
                        <div class="home-company-msg-list-msg__content__body__address__from">
                          <span>From:</span>ANCa株式会社
                        </div>
                        <div class="home-company-msg-list-msg__content__body__address__to">
                          <span>To:</span>佐治佳奈子（000-0000-0000）
                        </div>
                      </div>
                    </div>
                    <div class="home-company-msg-list-msg__content__favorite">
                      <i class="fa-regular fa-star"></i>
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

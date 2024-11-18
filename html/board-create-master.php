      <?php $title="ホーム_掲示板作成画面_マスタ管理者画面ver" ?>
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
            <div class="home-board-create-master__inner">
              <div class="home-board-create-master__block">
                <div class="home-board-create-master__title__inner">
                  <h2 class="home-title">掲示板新規作成</h2>
                </div>
                <div class="home-board-create-master-content__inner">
                  <form action="">
                    <div class="home-board-create-master-content-address">
                      <div class="home-board-create-master-content-address__subject">
                        <span>Subject :</span>
                        <p class="home-board-create-master-content-address__subject__title">掲示板タイトルが入ります</p>
                      </div>
                      <div class="home-board-create-master-content-address__to">
                        <span>To :</span>
                        <div class="home-board-create-master-content-address__to__input__inner">
                          <label class="home-board-create-master-content-address__to__input">
                            <input type="radio" name="to">
                            <span>すべて</span>
                          </label>
                          <label class="home-board-create-master-content-address__to__input">
                            <input type="radio" name="to">
                            <span>採用企業のみ</span>
                          </label>
                          <label class="home-board-create-master-content-address__to__input">
                            <input type="radio" name="to">
                            <span>エージェント企業のみ</span>
                          </label>
                          <label class="home-board-create-master-content-address__to__input by-name">
                            <input type="radio" name="to">
                            <span>バイネーム検索</span>
                            <div class="by-name__inner">
                              <label for="by-name" class="by-name-slider">
                                <input type="text" value="佐藤">
                              </label>
                              <div class="by-name-show">
                                <div class="by-name-show-list">
                                  <div class="by-name-show-list__name">佐藤代理</div>
                                  <span class="by-name-show-list__company">株式会社ANCa</span>
                                </div>
                                <div class="by-name-show-list">
                                  <div class="by-name-show-list__name">佐藤課長</div>
                                  <span class="by-name-show-list__company">株式会社ANCa</span>
                                </div>
                                <div class="by-name-show-list">
                                  <div class="by-name-show-list__name">佐藤係長</div>
                                  <span class="by-name-show-list__company">株式会社SHiRO</span>
                                </div>
                                <div class="by-name-show-list">
                                  <div class="by-name-show-list__name">佐藤代理</div>
                                  <span class="by-name-show-list__company">c株式会社SHiRO</span>
                                </div>
                                <div class="by-name-show-list">
                                  <div class="by-name-show-list__name">佐藤代理</div>
                                  <span class="by-name-show-list__company">株式会社ANCa</span>
                                </div>
                                <div class="by-name-show-list">
                                  <div class="by-name-show-list__name">佐藤代理</div>
                                  <span class="by-name-show-list__company">株式会社ANCa</span>
                                </div>
                              </div>
                            </div>
                          </label>
                        </div>
                      </div>
                      <div class="home-board-create-master-content-address__url">
                        <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                        <a href="">https://www.dammydammydammy</a>
                      </div>
                    </div>
                    <div class="home-board-create-master-content-body">
                      <textarea name="board-create">
この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。

この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。

この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                      </textarea>
                    </div>
                    <div class="home-board-create-master-content-submit">
                      <a href="">キャンセル</a>
                      <input type="submit" value="公開">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <?php require_once dirname(__FILE__).'/footer.php'; ?>
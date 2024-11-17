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
            <div class="home-board-create-admin__inner">
              <div class="home-board-create-admin__block">
                <div class="home-board-create-admin__title__inner">
                  <h2 class="home-title">掲示板新規作成</h2>
                </div>
                <div class="home-board-create-admin-content__inner">
                  <form action="">
                    <div class="home-board-create-admin-content-address">
                      <div class="home-board-create-admin-content-address__subject">
                        <span>Subject :</span>
                        <p class="home-board-create-admin-content-address__subject__title">掲示板タイトルが入ります</p>
                      </div>
                      <div class="home-board-create-admin-content-address__url">
                        <i class="fa-solid fa-paperclip" style="color: #3a87fd;"></i>
                        <a href="">https://www.dammydammydammy</a>
                      </div>
                    </div>
                    <div class="home-board-create-admin-content-body">
                      <textarea name="board-create">
この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。

この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。

この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです
                      </textarea>
                    </div>
                    <div class="home-board-create-admin-content-submit">
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
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
            <div class="home-account-manage__inner">
              <div class="home-account-manage__block">
                <div class="home-account-manage__heading__inner">
                  <h2 class="home-title">アカウント管理</h2>
                </div>
                <div class="home-account-manage-admin__inner">
                  <h3 class="home-subTitle">アカウント情報</h3>
                  <table class="home-account-manage-admin__table">
                    <tr class="home-account-manage-admin__tr">
                      <th class="home-account-manage-admin__th home-account-manage-admin__th__name">氏名</th>
                      <td class="home-account-manage-admin__td home-account-manage-admin__td__name">山田 太郎</td>
                    </tr>
                    <tr class="home-account-manage-admin__tr">
                      <th class="home-account-manage-admin__th">メールアドレス</th>
                      <td class="home-account-manage-admin__td">yamada@www.co.jp</td>
                    </tr>
                    <tr class="home-account-manage-admin__tr">
                      <th class="home-account-manage-admin__th">パスワード</th>
                      <td class="home-account-manage-admin__td">ddddddddd</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <?php require_once dirname(__FILE__).'/footer.php'; ?>
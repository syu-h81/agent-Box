<?php $title="求職者管理_新卒用基本情報入力フォーム_確認画面" ?>
<?php session_start() ?>
<?php require_once dirname(__FILE__).'/seeker-header-form.php'; ?>
      <main class="seeker-form__main">
        <form action="seeker-form-complete.php" method="POST" class="seeker-form__main__inner">
          <div class="seeker-form-content__inner">
            <div class="seeker-form-content__title__inner seeker-title-inner">
              <h2>基本情報入力フォーム</h2>
            </div>
            <div class="seeker-form-content__round__inner">
              <div class="seeker-form-content__round">入力</div>
              <span></span>
              <div class="seeker-form-content__round seeker-form-content__round__confirm">確認</div>
              <span></span>
              <div class="seeker-form-content__round">完了</div>
            </div>
            <div class="seeker-form-content__text">
              <p>
                入力内容をご確認ください。
              </p>
            </div>
            <div class="seeker-form-confirm__inner">
              <!-- ===== お名前 ===== -->
              <div class="seeker-form-confirm__name">
                <div class="seeker-form-confirm__name__label">
                  <label for="">お名前</label>
                </div>
                <div class="seeker-form-confirm__name__input">
                  <span>ダミー田中太郎</span>
                </div>
              </div>
              <!-- ===== お名前（フリガナ） ===== -->
              <div class="seeker-form-confirm__furigana">
                <div class="seeker-form-confirm__furigana__label">
                  <label for="">お名前（フリガナ）</label>
                </div>
                <div class="seeker-form-confirm__furigana__input">
                  <span>ダミータナカタロウ</span>
                </div>
              </div>
              <!-- ===== 担当CA ===== -->
              <div class="seeker-form-confirm__charge">
                <div class="seeker-form-confirm__charge__label">
                  <label for="">担当CA</label>
                </div>
                <div class="seeker-form-confirm__charge__input">
                  <span>ダミー松井</span>
                </div>
              </div>
              <!-- ===== メールアドレス ===== -->
              <div class="seeker-form-confirm__charge">
                <div class="seeker-form-confirm__charge__label">
                  <label for="">メールアドレス</label>
                </div>
                <div class="seeker-form-confirm__charge__input">
                  <span>ダミーaaaaaa@aaaaaaa</span>
                </div>
              </div>
              <!-- ===== 生年月日 ===== -->
              <div class="seeker-form-confirm__date">
                <div class="seeker-form-confirm__date__label">
                  <label for="">生年月日</label>
                </div>
                <div class="seeker-form-confirm__date__input">
                  <span>0000/00/00</span>
                </div>
              </div>
              <!-- ===== 性別 ===== -->
              <div class="seeker-form-confirm__gender">
                <div class="seeker-form-confirm__gender__label">
                  <label for="">性別</label>
                </div>
                <div class="seeker-form-confirm__gender__input">
                  <span>ダミー男性</span>
                </div>
              </div>
              <!-- ===== 電話番号 ===== -->
              <div class="seeker-form-confirm__phoneNumber">
                <div class="seeker-form-confirm__phoneNumber__label">
                  <label for="">電話番号</label>
                </div>
                <div class="seeker-form-confirm__phoneNumber__input">
                  <span>00-0000-0000</span>
                </div>
              </div>
              <!-- ===== 住所 ===== -->
              <div class="seeker-form-confirm__address">
                <div class="seeker-form-confirm__address__label">
                  <label for="">住所</label>
                </div>
                <div class="seeker-form-confirm__address__input">
                  <span>〒000-0000</span>
                  <span>東京都ダミー00-0-000</span>
                </div>
              </div>
              <!-- ===== 大学卒年度 ===== -->
              <div class="seeker-form-confirm__graduation">
                <div class="seeker-form-confirm__graduation__label">
                  <label for="">大学卒年度</label>
                </div>
                <div class="seeker-form-confirm__graduation__input">
                  <span>0000年度</span>
                </div>
              </div>
              <!-- ===== 文理区分 ===== -->
              <div class="seeker-form-confirm__literatureScience">
                <div class="seeker-form-confirm__literatureScience__label">
                  <label for="">文理区分</label>
                </div>
                <div class="seeker-form-confirm__literatureScience__input">
                  <span>ダミー</span>
                </div>
              </div>
              <!-- ===== 学校名 ===== -->
              <div class="seeker-form-confirm__school">
                <div class="seeker-form-confirm__school__label">
                  <label for="">学校名</label>
                </div>
                <div class="seeker-form-confirm__school__input">
                  <span>OOO学院大学OOO学部OOO学科</span>
                </div>
              </div>
            </div>
          </div>
          <div class="seeker-form-confirm__btn">
            <a href="seeker-form.php" class="seeker-form-confirm__btn__cancel">
              <button type="button">戻る</button>
            </a>
            <button class="seeker-form-confirm__btn__submit">
              <div>送信する</div>
            </button>
          </div>
        </form>
      </main>
  <?php require_once dirname(__FILE__).'/seeker-footer-form.php'; ?>
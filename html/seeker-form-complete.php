<?php $title="求職者管理_新卒用基本情報入力フォーム_完了画面" ?>
<?php session_start() ?>
<?php require_once dirname(__FILE__).'/seeker-header-form.php'; ?>
      <main class="seeker-form__main__complete seeker-form__main">
        <form action="" method="POST" class="seeker-form__main__inner">
          <div class="seeker-form-content__inner seeker-form-content-complete__inner">
            <div class="seeker-form-content__round__inner">
              <div class="seeker-form-content__round">入力</div>
              <span></span>
              <div class="seeker-form-content__round">確認</div>
              <span></span>
              <div class="seeker-form-content__round seeker-form-content__round__complete">完了</div>
            </div>
            <div class="seeker-form-content-complete__title__inner seeker-title-inner">
              <h2>送信完了いたしました</h2>
            </div>
            <div class="seeker-form-content__text">
              <p>
                必要項目を入力後、確認画面が表示されます。<br>
                内容に間違いなければ、ページ最下部の確認ボタンを押してください。
              </p>
            </div>
          </div>
          <a href="seeker-info.php" class="seeker-form-content__submit">
            <div>トップへ戻る</div>
          </a>
        </form>
      </main>
  <?php require_once dirname(__FILE__).'/seeker-footer-form.php'; ?>
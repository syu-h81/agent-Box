<?php $title="求職者管理_中途用基本情報入力フォーム" ?>
<?php require_once dirname(__FILE__).'/seeker-header-form.php'; ?>
      <main class="seeker-form__main">
        <form action="seeker-form-midcareer-confirm.php" method="POST" class="seeker-form__main__inner">
          <div class="seeker-form-content__inner">
            <div class="seeker-form-content__title__inner seeker-title-inner">
              <h2>基本情報入力フォーム</h2>
            </div>
            <div class="seeker-form-content__round__inner">
              <div class="seeker-form-content__round seeker-form-content__round__form">入力</div>
              <span></span>
              <div class="seeker-form-content__round">確認</div>
              <span></span>
              <div class="seeker-form-content__round">完了</div>
            </div>
            <div class="seeker-form-content__text">
              <p>
                必要項目を入力後、確認画面が表示されます。<br>
                内容に間違いなければ、ページ最下部の確認ボタンを押してください。
              </p>
            </div>
            <div class="seeker-form-content-form__inner">
              <div class="seeker-form-content-form">
                <!--===== お名前 =====-->
                <div class="seeker-form-content-form__name">
                  <div class="seeker-form-content-form__name__label">
                    <label for="">お名前</label>
                  </div>
                  <div class="seeker-form-content-form__name__input">
                    <input type="text" name="name">
                  </div>
                </div>
                <!--===== お名前(フリガナ) =====-->
                <div class="seeker-form-content-form__furigana">
                  <div class="seeker-form-content-form__furigana__label">
                    <label for="">お名前(フリガナ)</label>
                  </div>
                  <div class="seeker-form-content-form__furigana__input">
                    <input type="text" name="furigana">
                  </div>
                </div>
                <!--===== 担当CA名 =====-->
                <div class="seeker-form-content-form__charge">
                  <div class="seeker-form-content-form__charge__label">
                    <label for="">担当CA名</label>
                  </div>
                  <div class="seeker-form-content-form__charge__input">
                    <select name="charge-ca" id="" onchange="changeColor(this)">
                      <option value="" selected>選択してください</option>
                      <option value="ダミー松井">松井</option>
                    </select>
                  </div>
                </div>
                <!--===== 生年月日 =====-->
                <div class="seeker-form-content-form__date">
                  <div class="seeker-form-content-form__date__label">
                    <label for="">生年月日</label>
                  </div>
                  <div class="seeker-form-content-form__date__input">
                    <div class="seeker-form-content-form__date__input__box__inner">
                      <div class="seeker-form-content-form__date__input__box">
                        <select name="year" id="" onchange="changeColor(this)">
                          <option value="" selected>0000</option>
                          <option value="0000">0000</option>
                        </select><span>年</span>
                      </div>
                      <div class="seeker-form-content-form__date__input__box">
                        <select name="month" id="" onchange="changeColor(this)">
                          <option value="" selected>01</option>
                          <option value="00">00</option>
                        </select><span>月</span>
                      </div>
                      <div class="seeker-form-content-form__date__input__box">
                        <select name="date" id="" onchange="changeColor(this)">
                          <option value="" selected>01</option>
                          <option value="0000">00</option>
                        </select><span>日</span>
                      </div>
                    </div>
                    <div class="seeker-form-content-form__date__input__box">
                      <input type="text" name="old" placeholder="01">
                      <span>歳</span>
                    </div>
                  </div>
                </div>
                <!--===== 性別 =====-->
                <div class="seeker-form-content-form__gender">
                  <div class="seeker-form-content-form__gender__label">
                    <label for="">担当CA名</label>
                  </div>
                  <div class="seeker-form-content-form__gender__input">
                    <div class="seeker-form-content-form__gender__input__radio">
                      <input type="radio" name="gender" value="男性">
                      <span>男性</span>
                    </div>
                    <div class="seeker-form-content-form__gender__input__radio">
                      <input type="radio" name="gender" value="女性">
                      <span>女性</span>
                    </div>
                  </div>
                </div>
                <!--===== メールアドレス =====-->
                <div class="seeker-form-content-form__email">
                  <div class="seeker-form-content-form__email__label">
                    <label for="">メールアドレス</label>
                  </div>
                  <div class="seeker-form-content-form__email__input">
                    <input type="text" name="email" placeholder="sample@example.co.jp">
                  </div>
                </div>
                <!--===== 電話番号 =====-->
                <div class="seeker-form-content-form__phoneNumber">
                  <div class="seeker-form-content-form__phoneNumber__label">
                    <label for="">電話番号</label>
                  </div>
                  <div class="seeker-form-content-form__phoneNumber__input">
                    <input type="text" name="phoneNumber" placeholder="0000000000">
                  </div>
                </div>
                <!--===== 住所 =====-->
                <div class="seeker-form-content-form__address">
                  <div class="seeker-form-content-form__address__label">
                    <label for="">住所</label>
                  </div>
                  <div class="seeker-form-content-form__address__input">
                    <div class="seeker-form-content-form__address__input__box">
                      <span>〒</span>
                      <input type="text" name="address-number" placeholder="0000000">
                    </div>
                    <div class="seeker-form-content-form__address__input__box">
                      <input type="text" name="address" placeholder="東京都八王子市八木町110-20">
                    </div>
                  </div>
                </div>
                <!--===== 転職可能時期 =====-->
                <div class="seeker-form-content-form__jobChange">
                  <div class="seeker-form-content-form__jobChange__label">
                    <label for="">転職可能時期</label>
                  </div>
                  <div class="seeker-form-content-form__jobChange__input">
                    <div class="seeker-form-content-form__jobChange__input__box__inner">
                      <div class="seeker-form-content-form__jobChange__input__box">
                        <select name="jobChange-1" id="" onchange="changeColor(this)">
                          <option value="" selected>0000</option>
                        </select><span>年</span>
                      </div>
                      <div class="seeker-form-content-form__jobChange__input__box">
                        <select name="jobChange-2" id="" onchange="changeColor(this)">
                          <option value="" selected>01</option>
                        </select><span>月</span>
                      </div>
                      <div class="seeker-form-content-form__jobChange__input__box">
                        <select name="jobChange-3" id="" onchange="changeColor(this)">
                          <option value="" selected>01</option>
                        </select><span>日</span>
                      </div>
                    </div>
                    <div class="seeker-form-content-form__jobChange__input__box__inner">
                      <div class="seeker-form-content-form__jobChange__input__box">
                        <select name="jobChange-4" id="" onchange="changeColor(this)">
                          <option value="" selected>0000</option>
                        </select><span>年</span>
                      </div>
                      <div class="seeker-form-content-form__jobChange__input__box">
                        <select name="jobChange-5" id="" onchange="changeColor(this)">
                          <option value="" selected>01</option>
                        </select><span>月</span>
                      </div>
                      <div class="seeker-form-content-form__jobChange__input__box">
                        <select name="jobChange-6" id="" onchange="changeColor(this)">
                          <option value="" selected>01</option>
                        </select><span>日</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!--===== 経験社数 =====-->
                <div class="seeker-form-content-form__company">
                  <div class="seeker-form-content-form__company__label">
                    <label for="">経験社数</label>
                  </div>
                  <div class="seeker-form-content-form__company__input">
                    <input type="text" name="company" placeholder="0000">
                    <span>社</span>
                  </div>
                </div>
                <!--===== 現在の職種 =====-->
                <div class="seeker-form-content-form__occupation">
                  <div class="seeker-form-content-form__occupation__label">
                    <label for="">現在の職種</label>
                  </div>
                  <div class="seeker-form-content-form__occupation__input">
                    <select name="nowOccupation" id="" onchange="changeColor(this)">
                      <option value="" selected>選択してください</option>
                    </select>
                  </div>
                </div>
                <!--===== 希望の職種 =====-->
                <div class="seeker-form-content-form__occupation">
                  <div class="seeker-form-content-form__occupation__label">
                    <label for="">希望の職種</label>
                  </div>
                  <div class="seeker-form-content-form__occupation__input">
                    <select name="desiredOccupation" id="" onchange="changeColor(this)">
                      <option value="" selected>選択してください</option>
                    </select>
                  </div>
                </div>
                <!--===== 現在の業界 =====-->
                <div class="seeker-form-content-form__industry">
                  <div class="seeker-form-content-form__industry__label">
                    <label for="">現在の業界</label>
                  </div>
                  <div class="seeker-form-content-form__industry__input">
                    <select name="nowIndustry" id="" onchange="changeColor(this)">
                      <option value="" selected>選択してください</option>
                    </select>
                  </div>
                </div>
                <!--===== 希望業界 =====-->
                <div class="seeker-form-content-form__industry">
                  <div class="seeker-form-content-form__industry__label">
                    <label for="">希望業界</label>
                  </div>
                  <div class="seeker-form-content-form__industry__input">
                    <select name="desiredIndustry" id="" onchange="changeColor(this)">
                      <option value="" selected>選択してください</option>
                    </select>
                  </div>
                </div>
                <!--===== 現在の年収 =====-->
                <div class="seeker-form-content-form__income">
                  <div class="seeker-form-content-form__income__label">
                    <label for="">現在の年収</label>
                  </div>
                  <div class="seeker-form-content-form__income__input">
                    <span>¥</span>
                    <input type="text" name="nowIncome" placeholder="0000">
                  </div>
                </div>
                <!--===== 希望の年収 =====-->
                <div class="seeker-form-content-form__income">
                  <div class="seeker-form-content-form__income__label">
                    <label for="">希望の年収</label>
                  </div>
                  <div class="seeker-form-content-form__income__input">
                    <span>¥</span>
                    <input type="text" name="desiredIncome" placeholder="0000">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="seeker-form-content__submit">
            <div>送信する</div>
          </button>
        </form>
      </main>
  <?php require_once dirname(__FILE__).'/seeker-footer-form.php'; ?>
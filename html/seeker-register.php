<?php $title="求職者管理_求職者登録" ?>
<?php require_once dirname(__FILE__).'/item-list.php'; ?>
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
        <div class="seeker-register__inner seeker-inner">
          <div class="seeker-register__block seeker-block">
            <div class="seeker-register__title__inner seeker-title-inner">
              <h2>求職者登録</h2>
              <span>作成日：2024/07/28</span>
            </div>
            <div class="seeker-register-content__inner seeker-content-inner">
              <form action="seeker-info.php" method="POST" class="seeker-register-content-form__inner">
                <!-- === 求職者名 === -->
                <div class="seeker-register-content-form__name">
                  <div class="seeker-register-content-form__name__label">
                    <label>求職者名</label>
                  </div>
                  <div class="seeker-register-content-form__name__input">
                    <div class="seeker-register-content-form__name__input__box">
                      <input type="text" name="firstName" placeholder="姓">
                      <span class="seeker-error-text">必須項目です</span>
                    </div>
                    <div class="seeker-register-content-form__name__input__box">
                      <input type="text" name="lastName" placeholder="名">
                    </div>
                  </div>
                </div>
                <!-- === フリガナ === -->
                <div class="seeker-register-content-form__furigana">
                  <div class="seeker-register-content-form__furigana__label">
                    <label>フリガナ</label>
                  </div>
                  <div class="seeker-register-content-form__furigana__input">
                    <input type="text" name="firstFurigana" placeholder="セイ">
                    <input type="text" name="lastFurigana" placeholder="メイ">
                  </div>
                </div>
                <!-- === メールアドレス === -->
                <div class="seeker-register-content-form__email">
                  <div class="seeker-register-content-form__email__label">
                    <label>メールアドレス</label>
                  </div>
                  <div class="seeker-register-content-form__email__input">
                    <input type="text" name="email">
                    <span class="seeker-error-text">重複登録の可能性があります</span>
                  </div>
                </div>
                <!-- === 電話番号 === -->
                <div class="seeker-register-content-form__phoneNumber">
                  <div class="seeker-register-content-form__phoneNumber__label">
                    <label>電話番号</label>
                  </div>
                  <div class="seeker-register-content-form__phoneNumber__input">
                    <div class="seeker-register-content-form__phoneNumber__input__box">
                      <input type="text" name="phoneNumber-1" placeholder="000">
                      <span class="seeker-error-text">重複登録の可能性があります</span>
                    </div>
                    <div class="seeker-register-content-form__phoneNumber__input__box">
                      <input type="text" name="phoneNumber-2" placeholder="0000">
                    </div>
                    <div class="seeker-register-content-form__phoneNumber__input__box">
                      <input type="text" name="phoneNumber-3" placeholder="0000">
                    </div>
                  </div>
                </div>
                <!-- === ラベル === -->
                <div class="seeker-register-content-form__labels">
                  <div class="seeker-register-content-form__labels__label seeker-register-content-form-label">
                    <label for="">ラベル</label>
                  </div>
                  <div class="seeker-register-content-form__labels__selected__options" onchange="changeColor(this)">
                    <span class="option">この文字はダミーです<span class="remove">×</span></span>
                    <span class="option">この文字はダミ<span class="remove">×</span></span>
                    <span class="option">この文字はダミーです<span class="remove">×</span></span>
                    <span class="option">この文字はダミ<span class="remove">×</span></span>
                    <span class="option">この文字はダミーです<span class="remove">×</span></span>
                    <span class="option">この文字はダミ<span class="remove">×</span></span>
                    <span class="option">この文字はダミーです<span class="remove">×</span></span>
                    <span class="option">この文字はダミ<span class="remove">×</span></span>
                  </div>
                  <select multiple name="labels" id="" onchange="changeColor(this)">
                    <option value="完全週休二日制">仮）完全週休二日制</option>
                    <option value="平日休み">仮）平日休み</option>
                    <option value="その他">仮）その他</option>
                  </select>
                </div>
                <!-- === 生年月日 === -->
                <div class="seeker-register-content-form__date">
                  <div class="seeker-register-content-form__date__label">
                    <label>生年月日</label>
                  </div>
                  <div class="seeker-register-content-form__date__input">
                    <div class="seeker-register-content-form__date__input__select">
                      <select name="year" onchange="changeColor(this)">
                        <option value="0000" selected>0000</option>
                        <option value="2000">2000</option>
                      </select><span>年</span>
                    </div>
                    <div class="seeker-register-content-form__date__input__select">
                      <select name="month" onchange="changeColor(this)">
                        <option value="0000" selected>00</option>
                      </select><span>月</span>
                    </div>
                    <div class="seeker-register-content-form__date__input__select">
                      <select name="date" onchange="changeColor(this)">
                        <option value="0000" selected>00</option>
                      </select><span>日</span>
                    </div>
                    <div class="seeker-register-content-form__date__input__age">
                      <span>30歳</span>
                    </div>
                  </div>
                </div>
                <!-- === 性別 === -->
                <div class="seeker-register-content-form__gender">
                  <div class="seeker-register-content-form__gender__label">
                    <label>性別</label>
                  </div>
                  <div class="seeker-register-content-form__gender__input">
                    <label class="seeker-register-content-form__gender__input__radio">
                      <input type="radio" name="gender" value="男性">
                      <span>男性</span>
                    </label>
                    <label class="seeker-register-content-form__gender__input__radio">
                      <input type="radio" name="gender" value="女性">
                      <span>女性</span>
                    </label>
                  </div>
                </div>
                <!-- === 郵便番号 === -->
                <div class="seeker-register-content-form__addressNumber">
                  <div class="seeker-register-content-form__addressNumber__label">
                    <label for="">郵便番号</label>
                  </div>
                  <div class="seeker-register-content-form__addressNumber__input">
                    <span>〒</span>
                    <input type="text" name="addressNumber-1" placeholder="000">
                    <span>ー</span>
                    <input type="text" name="addressNumber-2" placeholder="0000">
                  </div>
                </div>
                <!-- === 都道府県 === -->
                <div class="seeker-register-content-form__prefectures">
                  <div class="seeker-register-content-form__prefectures__label">
                    <label for="">都道府県</label>
                  </div>
                  <div class="seeker-register-content-form__prefectures__input">
                    <select name="prefectures" id="" onchange="changeColor(this)">
                      <option value="">選択してください</option>
                      <option value="東京都">東京都</option>
                    </select>
                  </div>
                </div>
                <!-- === 市区町村・番地 === -->
                <div class="seeker-register-content-form__address">
                  <div class="seeker-register-content-form__address__label">
                    <label for="">市区町村・<br>番地</label>
                  </div>
                  <div class="seeker-register-content-form__address__input">
                    <input type="text" name="municipalities" placeholder="市区町村">
                    <input type="text" name="houseNumber" placeholder="番地">
                  </div>
                </div>
                <!-- === 建物名・部屋番号 === -->
                <div class="seeker-register-content-form__house">
                  <div class="seeker-register-content-form__house__label">
                    <label for="">建物名・部屋番号</label>
                  </div>
                  <div class="seeker-register-content-form__house__input">
                    <input type="text" name="house" placeholder="建物名・部屋番号">
                  </div>
                </div>
                <!-- === 最終学歴 === -->
                <div class="seeker-register-content-form__academic">
                  <div class="seeker-register-content-form__academic__label">
                    <label>最終学歴</label>
                    <span>※卒業見込み含む</span>
                  </div>
                  <div class="seeker-register-content-form__academic__input">
                    <div class="seeker-register-content-form__academic__input__select">
                      <select name="accademic" id="" onchange="changeColor(this)">
                        <option value="選択してください" selected>選択してください</option>
                        <option value="院卒">院卒</option>
                        <option value="大卒">大卒</option>
                        <option value="高卒">高卒</option>
                      </select>
                    </div>
                    <input type="text" name="university" placeholder="OOO学院大学">
                  </div>
                </div>
                <!-- === 学部・学科名 === -->
                <div class="seeker-register-content-form__faculty">
                  <div class="seeker-register-content-form__faculty__label">
                    <label>学部・学科名</label>
                  </div>
                  <div class="seeker-register-content-form__faculty__input">
                    <div class="seeker-register-content-form__faculty__input__box">
                      <input type="text" name="faculty" placeholder="テキスト編集">
                      <span>学部</span>
                    </div>
                    <div class="seeker-register-content-form__faculty__input__box">
                      <input type="text" name="subject" placeholder="テキスト編集">
                      <span>学科名</span>
                    </div>
                  </div>
                </div>
                <!-- === 卒年度 === -->
                <div class="seeker-register-content-form__graduation">
                  <div class="seeker-register-content-form__graduation__label">
                    <label>卒年度</label>
                  </div>
                  <div class="seeker-register-content-form__graduation__input">
                    <select name="graduation" onchange="changeColor(this)">
                      <option value="" selected>選択してください</option>
                    </select>
                  </div>
                </div>
                <!-- === 文理区分 === -->
                <div class="seeker-register-content-form__literatureScience">
                  <div class="seeker-register-content-form__literatureScience__label">
                    <label>文理区分</label>
                  </div>
                  <div class="seeker-register-content-form__literatureScience__input">
                    <select name="literatureScience" onchange="changeColor(this)">
                      <option value="" selected>選択してください</option>
                      <option value="文系">文系</option>
                      <option value="理系">理系</option>
                    </select>
                  </div>
                </div>
                <!-- === ステータス === -->
                <div class="seeker-register-content-form__status">
                  <div class="seeker-register-content-form__status__label">
                    <label>ステータス</label>
                  </div>
                  <div class="seeker-register-content-form__status__input">
                    <select name="status" onchange="changeColor(this)">
                      <option value="" selected>選択してください</option>
                    </select>
                  </div>
                </div>
                <!-- === 不成立理由 === -->
                <div class="seeker-register-content-form__notEstablished">
                  <div class="seeker-register-content-form__notEstablished__label">
                    <label>不成立理由</label>
                  </div>
                  <div class="seeker-register-content-form__notEstablished__input">
                    <select name="notEstablished" onchange="changeColor(this)">
                      <option value="" selected>選択してください</option>
                    </select>
                  </div>
                </div>
                <!-- === 各種日程 === -->
                <div class="seeker-register-content-form__schedule">
                  <div class="seeker-register-content-form__schedule__label">
                    <label>各種日程</label>
                  </div>
                  <div class="seeker-register-content-form__schedule__input">
                    <div class="seeker-register-content-form__schedule__input__box">
                      <input type="text" name="schedule-1" placeholder="yyyy/mm/dd">
                      <span>決定予想日</span>
                    </div>
                    <div class="seeker-register-content-form__schedule__input__box">
                      <input type="text" name="schedule-2" placeholder="yyyy/mm/dd">
                      <span>初回面談日</span>
                    </div>
                    <div class="seeker-register-content-form__schedule__input__box">
                      <input type="text" name="schedule-3" placeholder="yyyy/mm/dd">
                      <span>次回面談日</span>
                    </div>
                  </div>
                </div>
                <!-- === 学生情報 === -->
                <div class="seeker-register-content-form__info">
                  <div class="seeker-register-content-form__info__label">
                    <label>学生情報</label>
                  </div>
                  <div class="seeker-register-content-form__info__input">
                    <textarea name="student-info" id="" placeholder="テキストの編集"></textarea>
                  </div>
                </div>
                <!-- === CAコメント欄 === -->
                <div class="seeker-register-content-form__comment">
                  <div class="seeker-register-content-form__comment__label">
                    <label>CAコメント欄</label>
                  </div>
                  <div class="seeker-register-content-form__comment__input">
                    <textarea name="ca-comment" id="" placeholder="テキストの編集"></textarea>
                  </div>
                </div>
                <!-- === アップロード === -->
                <div class="seeker-register-content-form__upload">
                  <div class="seeker-register-content-form__upload__label">
                    <label>アップロード</label>
                  </div>
                  <div class="seeker-register-content-form__upload__body">
                    <div class="seeker-register-content-form__upload__body__resume__inner">
                      <div class="seeker-register-content-form__upload__body__resume__flex">
                        <div class="seeker-register-content-form__upload__body__resume">
                          <div class="seeker-register-content-form__upload__body__resume__text">
                            ここにファイルをドラッグ&ドロップ<br>または
                          </div>
                          <div class="seeker-register-content-form__upload__body__resume__input">
                            <label for="resume" class="seeker-register-content-form__upload__body__resume__input__btn">ファイルを選択する</label>
                            <input type="file" name="resume" id="resume">
                          </div>
                          <div class="seeker-register-content-form__upload__body__resume__supplyment">
                            ※アップロードできるファイル形式は、JPEG/GIF/PNG/PDFのみです。
                          </div>
                        </div>
                      </div>
                      <span>履歴書</span>
                    </div>
                    <div class="seeker-register-content-form__upload__body__history__inner">
                      <div class="seeker-register-content-form__upload__body__history__flex">
                        <div class="seeker-register-content-form__upload__body__history">
                          <div class="seeker-register-content-form__upload__body__history__text">
                            ここにファイルをドラッグ&ドロップ<br>または
                          </div>
                          <div class="seeker-register-content-form__upload__body__history__input">
                            <label for="history" class="seeker-register-content-form__upload__body__history__input__btn">ファイルを選択する</label>
                            <input type="file" name="history" id="history">
                          </div>
                          <div class="seeker-register-content-form__upload__body__history__supplyment">
                            ※アップロードできるファイル形式は、JPEG/GIF/PNG/PDFのみです。
                          </div>
                        </div>
                      </div>
                      <span>職務経歴書</span>
                    </div>
                  </div>
                </div>
                <!-- === 中途入力欄 === -->
                <div class="seeker-register-content-form__midCareer__inner">
                  <div class="seeker-register-content-form__midCareer__title__inner">
                    <span>＋</span>
                    <h3>中途入力欄</h3>
                  </div>
                  <div class="seeker-register-content-form__midCareer">
                    <!-- === 転職可能時期 === -->
                    <div class="seeker-register-content-form__midCareer__jobChange">
                      <div class="seeker-register-content-form__midCareer__jobChange__label">
                        <label>転職可能時期</label>
                      </div>
                      <div class="seeker-register-content-form__midCareer__jobChange__input">
                        <div class="seeker-register-content-form__midCareer__jobChange__input__box">
                          <input type="date" name="jobChange" value="yyyy/mm">
                        </div>
                      </div>
                    </div>
                    <!-- === 経験社数 === -->
                    <div class="seeker-register-content-form__midCareer__company">
                      <div class="seeker-register-content-form__midCareer__company__label">
                        <label>経験社数</label>
                      </div>
                      <div class="seeker-register-content-form__midCareer__company__input">
                        <input type="text" name="company" placeholder="000"><span>社</span>
                      </div>
                    </div>
                    <!-- === 職種について === -->
                    <div class="seeker-register-content-form__midCareer__occupation">
                      <div class="seeker-register-content-form__midCareer__occupation__label">
                        <label>職種について</label>
                      </div>
                      <div class="seeker-register-content-form__midCareer__occupation__input">
                        <div class="seeker-register-content-form__midCareer__occupation__input__box">
                          <select name="nowOccupation" id="" onchange="changeColor(this)">
                            <option value="" selected>職種一覧用意する</option>
                          </select>
                          <span>現在の職種</span>
                        </div>
                        <div class="seeker-register-content-form__midCareer__occupation__input__box">
                          <select name="desiredOccupation" id="" onchange="changeColor(this)">
                            <option value="" selected>職種一覧用意する</option>
                          </select>
                          <span>希望職種</span>
                        </div>
                      </div>
                    </div>
                    <!-- === 年収について === -->
                    <div class="seeker-register-content-form__midCareer__income">
                      <div class="seeker-register-content-form__midCareer__income__label">
                        <label>年収について</label>
                      </div>
                      <div class="seeker-register-content-form__midCareer__income__input">
                        <div class="seeker-register-content-form__midCareer__income__input__box">
                          <input type="text" name="nowIncome">万円
                          <span>現在の年収</span>
                        </div>
                        <div class="seeker-register-content-form__midCareer__income__input__box">
                          <input type="text" name="desiredIncome">万円
                          <span>希望年収</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="seeker-register-content-form__submit">
                  <button type="submit">保存する</button>
                </div>
              </form>
            </div>
          </div>
          <aside class="seeker-register-sidebar__inner">
            <div class="seeker-register-sidebar__block">
              <div class="seeker-register-sidebar-selection">
                <div class="seeker-register-sidebar-selection__title__inner seeker-title-inner">
                  <h2>選考状況</h2>
                  <a href="" class="seeker-register-sidebar-selection__view__inner">
                    <span>view all</span>
                    <div class="seeker-register-sidebar-selection__view__arrow"></div>
                  </a>
                </div>
                <div class="seeker-register-sidebar-selection__box__inner">
                  <div class="seeker-register-sidebar-selection__box">
                    <div class="seeker-register-sidebar-selection__box__text">応募</div>
                    <div class="seeker-register-sidebar-selection__box__people">
                      <span class="seeker-register-sidebar-selection__box__people__number">200</span>
                      <span class="seeker-register-sidebar-selection__box__people__unit">人</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__box">
                    <div class="seeker-register-sidebar-selection__box__text">選考</div>
                    <div class="seeker-register-sidebar-selection__box__people">
                      <span class="seeker-register-sidebar-selection__box__people__number">40</span>
                      <span class="seeker-register-sidebar-selection__box__people__unit">人</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__box">
                    <div class="seeker-register-sidebar-selection__box__text">最終</div>
                    <div class="seeker-register-sidebar-selection__box__people">
                      <span class="seeker-register-sidebar-selection__box__people__number">5</span>
                      <span class="seeker-register-sidebar-selection__box__people__unit">人</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__box">
                    <div class="seeker-register-sidebar-selection__box__text">内定</div>
                    <div class="seeker-register-sidebar-selection__box__people">
                      <span class="seeker-register-sidebar-selection__box__people__number">4</span>
                      <span class="seeker-register-sidebar-selection__box__people__unit">人</span>
                    </div>
                  </div>
                </div>
                <div class="seeker-register-sidebar-selection__list__inner">
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社サイバーエージェントボックス</p>
                      <span>次回選考：2024/12/12</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社サイバーエージェントボックス</p>
                      <span>次回選考：2024/12/12</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社サイバーエージェントボックス</p>
                      <span>次回選考：2024/12/12</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社サイバーエージェントボックス</p>
                      <span>次回選考：2024/12/12</span>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-selection__list">
                    <div class="seeker-register-sidebar-selection__list__status">
                      <span class="seeker-status seeker-status-support"></span>
                      <span>一次選考</span>
                    </div>
                    <div class="seeker-register-sidebar-selection__list__company">
                      <p>株式会社サイバーエージェントボックス</p>
                      <span>次回選考：2024/12/12</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="seeker-register-sidebar-log">
                <div class="seeker-register-sidebar-log__title__inner seeker-title-inner">
                  <h2>面談ログ</h2>
                  <div id="add-log" class="seeker-register-sidebar-log__add__inner">
                    <img src="assets/images/add.png" alt="">
                    <span>面談ログを追加する</span>
                  </div>
                </div>
                <div class="seeker-register-sidebar-log__list">
                  <div class="seeker-register-sidebar-log__list__thead">
                    <div class="seeker-register-sidebar-log__list__label__1">担当</div>
                    <div class="seeker-register-sidebar-log__list__label__2">種別</div>
                    <div class="seeker-register-sidebar-log__list__label__3">面談日</div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                      <div class="seeker-register-sidebar-log__list__item__delete">
                        <img src="assets/images/delete.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                      <div class="seeker-register-sidebar-log__list__item__delete">
                        <img src="assets/images/delete.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">オンライン</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                      <div class="seeker-register-sidebar-log__list__item__delete">
                        <img src="assets/images/delete.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                      <div class="seeker-register-sidebar-log__list__item__delete">
                        <img src="assets/images/delete.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">オンライン</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                      <div class="seeker-register-sidebar-log__list__item__delete">
                        <img src="assets/images/delete.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                      <div class="seeker-register-sidebar-log__list__item__delete">
                        <img src="assets/images/delete.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                  <div class="seeker-register-sidebar-log__list__item">
                    <div class="seeker-register-sidebar-log__list__item__flex">
                      <div class="seeker-register-sidebar-log__list__item__name seeker-register-sidebar-log__list__label__1">松井</div>
                      <div class="seeker-register-sidebar-log__list__item__type seeker-register-sidebar-log__list__label__2">電話</div>
                      <div class="seeker-register-sidebar-log__list__item__schedule seeker-register-sidebar-log__list__label__3">2004/07/31</div>
                      <div class="seeker-register-sidebar-log__list__item__edit">
                        <img src="assets/images/edit.png" alt="">
                      </div>
                      <div class="seeker-register-sidebar-log__list__item__delete">
                        <img src="assets/images/delete.png" alt="">
                      </div>
                    </div>
                    <div class="seeker-register-sidebar-log__list__item__memo">
                      <p>
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示メモ内容を表示
                        メモ内容を表示メモ内容を表示
                      </p>
                    </div>
                  </div>
                </div>
                <!-- ===== 面談ログの追加用 ===== -->
                <div class="seeker-register-sidebar-log__add">
                  <div class="seeker-register-sidebar-log__add__block">
                    <form action="" method="POST" class="seeker-register-sidebar-log__add__content">
                      <div id="close" class="seeker-register-sidebar-log__add__content__close">
                        <img src="assets/images/close.png" alt="">
                      </div>
                      <!-- ===== 面談ログ_担当 ===== -->
                      <div class="seeker-register-sidebar-log__add__content__charge">
                        <div class="seeker-register-sidebar-log__add__content__charge__label">
                          <label for="">担当</label>
                        </div>
                        <div class="seeker-register-sidebar-log__add__content__charge__input">
                          <select name="add-charge" id="" onchange="changeColor(this)">
                            <option value="" selected>選択してください</option>
                            <option value="松井">松井</option>
                          </select>
                        </div>
                      </div>
                      <!-- ===== 面談ログ_面談内容 ===== -->
                      <div class="seeker-register-sidebar-log__add__content__type">
                        <div class="seeker-register-sidebar-log__add__content__type__label">
                          <label for="">面談内容</label>
                        </div>
                        <div class="seeker-register-sidebar-log__add__content__type__input">
                          <label class="seeker-register-sidebar-log__add__content__type__input__box">
                            <input type="radio" name="add-type" value="電話">
                            <span>電話</span>
                          </label>
                          <label class="seeker-register-sidebar-log__add__content__type__input__box">
                            <input type="radio" name="add-type" value="オンライン">
                            <span>オンライン</span>
                          </label>
                          <label class="seeker-register-sidebar-log__add__content__type__input__box">
                            <input type="radio" name="add-type" value="対面">
                            <span>対面</span>
                          </label>
                        </div>
                      </div>
                      <!-- ===== 面談ログ_面談日 ===== -->
                      <div class="seeker-register-sidebar-log__add__content__interview">
                        <div class="seeker-register-sidebar-log__add__content__interview__label">
                          <label for="">面談日</label>
                        </div>
                        <div class="seeker-register-sidebar-log__add__content__interview__input">
                          <div class="seeker-register-sidebar-log__add__content__interview__input__box">
                            <select name="add-year" id="" onchange="changeColor(this)">
                              <option value="" selected>0000</option>
                            </select><span>年</span>
                          </div>
                          <div class="seeker-register-sidebar-log__add__content__interview__input__box">
                            <select name="add-month" id="" onchange="changeColor(this)">
                              <option value="" selected>0000</option>
                            </select><span>月</span>
                          </div>
                          <div class="seeker-register-sidebar-log__add__content__interview__input__box">
                            <select name="add-date" id="" onchange="changeColor(this)">
                              <option value="" selected>0000</option>
                            </select><span>日</span>
                          </div>
                        </div>
                      </div>
                      <!-- ===== 面談ログ_メモ ===== -->
                      <div class="seeker-register-sidebar-log__add__content__memo">
                        <div class="seeker-register-sidebar-log__add__content__memo__label">
                          <label for="">メモ</label>
                        </div>
                        <div class="seeker-register-sidebar-log__add__content__memo__input">
                          <textarea name="add-memo" id="" placeholder="テキストの編集"></textarea>
                        </div>
                      </div>
                      <div class="seeker-register-sidebar-log__add__content__btn">
                        <button type="button" id="cancel" class="seeker-register-sidebar-log__add__content__btn__cancel">キャンセル</button>
                        <button type="submit" class="seeker-register-sidebar-log__add__content__btn__submit">追加する</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="seeker-register-sidebar-log__delete__confirm__inner">
                  <div class="seeker-register-sidebar-log__delete__block">
                    <div class="seeker-register-sidebar-log__delete__confirm">
                      <div class="seeker-register-sidebar-log__delete__confirm__title">
                        本当に削除しますか？
                      </div>
                      <div class="seeker-register-sidebar-log__delete__confirm__btn">
                        <button class="seeker-register-sidebar-log__delete__confirm__btn__cancel">戻る</button>
                        <button class="seeker-register-sidebar-log__delete__confirm__btn__submit">削除する</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="seeker-register-sidebar-log__delete__complete__inner">
                  <div class="seeker-register-sidebar-log__delete__block">
                    <div class="seeker-register-sidebar-log__delete__complete">
                      <div class="seeker-register-sidebar-log__delete__complete__title">
                        削除しました
                      </div>
                      <a href="seeker-register.php" class="seeker-register-sidebar-log__delete__complete__btn__inner">
                        <button class="seeker-register-sidebar-log__delete__complete__btn">戻る</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </main>
  <?php require_once dirname(__FILE__).'/footer.php'; ?>
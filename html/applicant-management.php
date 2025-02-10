<?php $title="応募選考管理_選考一覧_フィルター適用後" ?>
<?php session_start() ?>
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
        <div class="applicant-management__inner applicant-inner">
          <div class="applicant-management__block applicant-block">
            <div class="applicant-management__title__inner applicant-title-inner">
              <div class="applicant-management__title__flex">
                <h2>サイバーエージェント＿松井良太の選考</h2>
                <span class="applicant-management__title__flex__category applicant-management__title__flex__category__interview">初回面談前</span>
                <!-- = ステータスが内定以上だったら以下に変更 = -->
                <div class="applicant-management__title__flex__category__offer__inner">
                  <span class="applicant-management__title__flex__category applicant-management__title__flex__category__offer">内定</span>
                  <span class="applicant-management__title__flex__category__consent">内定承諾をする</span>
                </div>
              </div>
              <div class="applicant-management__title__date">
                <span>作成日：2024/07/28</span>
              </div>
            </div>
            <div class="applicant-management__content__inner">
              <div class="applicant-management__content">
                <!-- ===== 基本情報 ===== -->
                <div class="applicant-management__content__basicInfo__inner">
                  <div class="applicant-management__content__basicInfo__title__inner applicant-title-inner">
                    <div class="applicant-management__content__basicInfo__title__flex applicant-management__content__title__flex">
                      <h2>基本情報</h2>
                      <span>次回面談予定日： <span>未定</span></span>
                    </div>
                    <div class="applicant-management__content__basicInfo__title__edit applicant-management__content__edit">
                      <img src="assets/images/edit.png" alt="">
                    </div>
                  </div>
                  <div class="applicant-management__content__basicInfo__list__inner">
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>求職者名</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>松井　良太</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>学校名</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>OOO学院大学</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>卒年度</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>0000/00/00</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>応募数</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>00</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>選考数</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>00</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>学最終選考数校名</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>00</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__basicInfo__item">
                      <div class="applicant-management__content__basicInfo__item__label">
                        <span>選考内定数</span>
                      </div>
                      <div class="applicant-management__content__basicInfo__item__value">
                        <span>00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ===== 選考メモ ===== -->
                <div class="applicant-management__content__memo__inner">
                  <div class="applicant-management__content__memo__title__inner applicant-title-inner">
                    <h2>選考メモ</h2>
                    <div class="applicant-management__content__memo__edit">
                      <img src="assets/images/edit.png" alt="">
                    </div>
                  </div>
                  <div class="applicant-management__content__memo__area">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです。</p>
                  </div>
                </div>
                <!-- ===== 詳細情報 ===== -->
                <div class="applicant-management__content__detail__inner">
                  <div class="applicant-management__content__detail__title__inner applicant-title-inner">
                    <h2>詳細情報</h2>
                  </div>
                  <div class="applicant-management__content__detail__list__inner">
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__create">
                      <div class="applicant-management__content__detail__item__label">
                        <span>作成日</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>2004/02/02</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__type">
                      <div class="applicant-management__content__detail__item__label">
                        <span>種別</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>インターン</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__charge">
                      <div class="applicant-management__content__detail__item__label">
                        <span>担当CA</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>山田太郎</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__recruitment">
                      <div class="applicant-management__content__detail__item__label">
                        <span>求人名</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>この文字はダミーです</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__company">
                      <div class="applicant-management__content__detail__item__label">
                        <span>企業名</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>サイバーエージェント</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__seeker">
                      <div class="applicant-management__content__detail__item__label">
                        <span>求職者名</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>松井良太</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__phase">
                      <div class="applicant-management__content__detail__item__label">
                        <span>フェーズ</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>初回面談前</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__accuracy">
                      <div class="applicant-management__content__detail__item__label">
                        <span>確度</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>A+</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__intention">
                      <div class="applicant-management__content__detail__item__label">
                        <span>意向度</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>①内定が出たら承諾/入社を考えている</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__passRate">
                      <div class="applicant-management__content__detail__item__label">
                        <span>合格確度</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>①能力値が採用基準に満たしている／志望理由が明確</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__candidate">
                      <div class="applicant-management__content__detail__item__label">
                        <span>候補者所感</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>この文字はダミーです</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__gender">
                      <div class="applicant-management__content__detail__item__label">
                        <span>性別</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>男性</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__school">
                      <div class="applicant-management__content__detail__item__label">
                        <span>学校名</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>青山学院大学</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__graduation">
                      <div class="applicant-management__content__detail__item__label">
                        <span>卒年度</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>2024</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__caComment">
                      <div class="applicant-management__content__detail__item__label">
                        <span>CAコメント欄</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__decline">
                      <div class="applicant-management__content__detail__item__label">
                        <span>辞退理由</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>この文字はダミーです</span>
                      </div>
                    </div>
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__detailDecline">
                      <div class="applicant-management__content__detail__item__label">
                        <span>辞退理由（詳細）</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>この文字はダミーです</span>
                      </div>
                    </div>
                    <!-- === アップロード === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__upload">
                      <div class="applicant-management__content__detail__item__label">
                        <label>アップロード</label>
                      </div>
                      <div class="applicant-management__content__detail__item__upload__body">
                        <div class="applicant-management__content__detail__item__upload__body__resume__inner">
                          <div class="applicant-management__content__detail__item__upload__body__resume__flex">
                            <div class="applicant-management__content__detail__item__upload__body__resume">
                              <div class="applicant-management__content__detail__item__upload__body__resume__text">
                                ここにファイルをドラッグ&ドロップ<br>または
                              </div>
                              <div class="applicant-management__content__detail__item__upload__body__resume__input">
                                <label for="resume" class="applicant-management__content__detail__item__upload__body__resume__input__btn">ファイルを選択する</label>
                                <input type="file" name="resume" id="resume">
                              </div>
                              <div class="applicant-management__content__detail__item__upload__body__resume__supplyment">
                                ※アップロードできるファイル形式は、JPEG/GIF/PNG/PDFのみです。
                              </div>
                            </div>
                          </div>
                          <span>履歴書</span>
                        </div>
                        <div class="applicant-management__content__detail__item__upload__body__history__inner">
                          <div class="applicant-management__content__detail__item__upload__body__history__flex">
                            <div class="applicant-management__content__detail__item__upload__body__history">
                              <div class="applicant-management__content__detail__item__upload__body__history__text">
                                ここにファイルをドラッグ&ドロップ<br>または
                              </div>
                              <div class="applicant-management__content__detail__item__upload__body__history__input">
                                <label for="history" class="applicant-management__content__detail__item__upload__body__history__input__btn">ファイルを選択する</label>
                                <input type="file" name="history" id="history">
                              </div>
                              <div class="applicant-management__content__detail__item__upload__body__history__supplyment">
                                ※アップロードできるファイル形式は、JPEG/GIF/PNG/PDFのみです。
                              </div>
                            </div>
                          </div>
                          <span>職務経歴書</span>
                        </div>
                      </div>
                    </div>
                    <!-- === 説明会日程選択 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__session">
                      <div class="applicant-management__content__detail__item__label">
                        <span>説明会日程選択</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>X/X(X)●●:●●~●●:●●</span>
                      </div>
                    </div>
                    <!-- === 推薦文 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__recommend">
                      <div class="applicant-management__content__detail__item__label">
                        <span>推薦文</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</span>
                      </div>
                    </div>
                    <!-- === 紹介文 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__introduce">
                      <div class="applicant-management__content__detail__item__label">
                        <span>紹介文</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</span>
                      </div>
                    </div>
                    <!-- === 選考上の注意事項 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__caution">
                      <div class="applicant-management__content__detail__item__label">
                        <span>選考上の注意事項</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</span>
                      </div>
                    </div>
                    <!-- === 選考FB === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__selectionFB">
                      <div class="applicant-management__content__detail__item__label">
                        <span>選考FB</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</span>
                      </div>
                    </div>
                    <!-- === 内定承諾日 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__offer">
                      <div class="applicant-management__content__detail__item__label">
                        <span>内定承諾日</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>2024/10/23</span>
                      </div>
                    </div>
                    <!-- === 入社予定日 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__employee">
                      <div class="applicant-management__content__detail__item__label">
                        <span>入社予定日</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>2024/10/23</span>
                      </div>
                    </div>
                    <!-- === 候補日程 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__possible">
                      <div class="applicant-management__content__detail__item__label">
                        <span>候補日程</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>2024/10/23</span>
                      </div>
                    </div>
                    <!-- === 理論年収 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__income">
                      <div class="applicant-management__content__detail__item__label">
                        <span>理論年収</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>2024/10/23</span>
                      </div>
                    </div>
                    <!-- === 成果報酬割合 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__performanceRatio">
                      <div class="applicant-management__content__detail__item__label">
                        <span>成果報酬割合</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>000%</span>
                      </div>
                    </div>
                    <!-- === 成果報酬額（固定額） === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__preformanceFixed">
                      <div class="applicant-management__content__detail__item__label">
                        <span>成果報酬額（固定額）</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>2024/10/23</span>
                      </div>
                    </div>
                    <!-- === 承諾後売上 === -->
                    <div class="applicant-management__content__detail__item applicant-management__content__detail__item__sales">
                      <div class="applicant-management__content__detail__item__label">
                        <span>承諾後売上</span>
                      </div>
                      <div class="applicant-management__content__detail__item__value">
                        <span>2024/10/23</span>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="applicant-list.php" class="applicant-management__content__btn">
                  <div class="applicant-management__content__text">一覧に戻る</div>
                </a>
              </div>
              <div class="applicant-management__content__sidebar">
                <div class="applicant-management__content__sidebar__title__inner applicant-title-inner">
                  <h2>Unitas採用担当、松井良太</h2>
                </div>
                <div class="applicant-management__content__sidebar__msg__box applicant-management__content__sidebar__msg__box__first">
                  <div class="applicant-management__content__sidebar__msg__box__name">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/applicant-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>松井良太</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box applicant-management__content__sidebar__msg__box__unitas">
                  <div class="applicant-management__content__sidebar__msg__box__name applicant-management__content__sidebar__msg__box__name__unitas">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/Unitas-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>Unitas採用担当</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show applicant-management__content__sidebar__msg__box__show__unitas">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box">
                  <div class="applicant-management__content__sidebar__msg__box__date">
                    <span>2024.07.22</span>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__name">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/applicant-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>松井良太</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box applicant-management__content__sidebar__msg__box__unitas">
                  <div class="applicant-management__content__sidebar__msg__box__name applicant-management__content__sidebar__msg__box__name__unitas">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/Unitas-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>Unitas採用担当</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show applicant-management__content__sidebar__msg__box__show__unitas">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box">
                  <div class="applicant-management__content__sidebar__msg__box__date">
                    <span>2024.07.22</span>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__name">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/applicant-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>松井良太</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box applicant-management__content__sidebar__msg__box__unitas">
                  <div class="applicant-management__content__sidebar__msg__box__name applicant-management__content__sidebar__msg__box__name__unitas">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/Unitas-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>Unitas採用担当</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show applicant-management__content__sidebar__msg__box__show__unitas">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box">
                  <div class="applicant-management__content__sidebar__msg__box__date">
                    <span>2024.07.22</span>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__name">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/applicant-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>松井良太</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box applicant-management__content__sidebar__msg__box__unitas">
                  <div class="applicant-management__content__sidebar__msg__box__name applicant-management__content__sidebar__msg__box__name__unitas">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/Unitas-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>Unitas採用担当</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show applicant-management__content__sidebar__msg__box__show__unitas">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box">
                  <div class="applicant-management__content__sidebar__msg__box__date">
                    <span>2024.07.22</span>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__name">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/applicant-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>松井良太</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box applicant-management__content__sidebar__msg__box__unitas">
                  <div class="applicant-management__content__sidebar__msg__box__name applicant-management__content__sidebar__msg__box__name__unitas">
                    <div class="applicant-management__content__sidebar__msg__box__name__icon">
                      <img src="assets/images/Unitas-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__name__name">
                      <span>Unitas採用担当</span>
                      <span>2024.07.22</span>
                    </div>
                  </div>
                  <div class="applicant-management__content__sidebar__msg__box__show applicant-management__content__sidebar__msg__box__show__unitas">
                    <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダ</p>
                    <div class="applicant-management__content__sidebar__msg__box__show__icon">
                      <img src="assets/images/good-icon.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="applicant-management__content__sidebar__msg__box__textarea">
                  <textarea name="" placeholder="メッセージを入力"></textarea>
                  <div class="applicant-management__content__sidebar__msg__box__textarea__icons">
                    <div class="applicant-management__content__sidebar__msg__box__textarea__icon">
                      <img src="assets/images/attached-icon.png" alt="">
                    </div>
                    <div class="applicant-management__content__sidebar__msg__box__textarea__icon">
                      <img src="assets/images/send-icon.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-confirm-inner">
            <div class="popup-confirm-block">
              <div class="popup-confirm-body">
                <div class="popup-confirm-body-heading">保存しますか？</div>
                <div class="popup-confirm-body-btns">
                  <button class="popup-confirm-body-cancel-btn popup-confirm-body-btn">戻る</button>
                  <button class="popup-confirm-body-decision-btn popup-confirm-body-btn">保存する</button>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-completion-inner">
            <div class="popup-completion-block">
              <div class="popup-completion-body">
                <div class="popup-completion-body-heading">保存完了しました</div>
                <a href="applicant-management.php" class="popup-completion-body-btn">
                  <button>戻る</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php require_once dirname(__FILE__).'/footer.php'; ?>
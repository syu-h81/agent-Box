<?php $title="B_001_応募選考管理-保留応募一覧" ?>
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
        <div class="applicant-onhold-list__inner seeker-inner">
          <div class="applicant-onhold-list__block seeker-block">
            <div class="applicant-onhold-list__title__inner seeker-title-inner">
              <h2>保留応募一覧</h2>
              <div class="applicant-onhold-list-content-register__inner">
                <div id="filter" class="applicant-onhold-list-content-register__filter__icon">
                  <img src="assets/images/filter.png" alt="">
                </div>
              </div>
            </div>
            <div class="applicant-onhold-list-content__inner seeker-content-inner">
              <!--===== 求職者一覧フィルター =====-->
              <div class="seeker-list-content-filter__inner">
                <div class="seeker-list-content-filter__block">
                  <form action="seeker-list-apply.php" method="POST" class="seeker-list-content-filter">
                    <div id="close" class="seeker-list-content-filter__close">
                      <img src="assets/images/close.png" alt="">
                    </div>
                    <div class="seeker-list-content-filter__create">
                      <div class="seeker-list-content-filter__create__label seeker-list-content-filter-label">
                        <label for="">作成日</label>
                      </div>
                      <div class="seeker-list-content-filter__create__input seeker-list-content-filter-input-date">
                        <input type="text" placeholder="0000/00/00 - 0000/00/00">
                        <span>ー</span>
                        <input type="text" placeholder="0000/00/00 - 0000/00/00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__ca">
                      <div class="seeker-list-content-filter__ca__label seeker-list-content-filter-label">
                        <label for="">担当CA</label>
                      </div>
                      <div class="seeker-list-content-filter__ca__input">
                        <select name="charge-ca" id="" onchange="changeColor(this)">
                          <option value="選択してください" selected>選択してください</option>
                          <option value="松井良太">松井良太</option>
                          <option value="松井良太">松井良太</option>
                          <option value=""></option>
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__gender">
                      <div class="seeker-list-content-filter__gender__label">
                        <label>性別</label>
                      </div>
                      <div class="seeker-list-content-filter__gender__input">
                        <label class="seeker-list-content-filter__gender__input__radio">
                          <input type="radio" name="gender" value="男性">
                          <span>男性</span>
                        </label>
                        <label class="seeker-list-content-filter__gender__input__radio">
                          <input type="radio" name="gender" value="女性">
                          <span>女性</span>
                        </label>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__school">
                      <div class="seeker-list-content-filter__school__label">
                        <label for="">学校名</label>
                      </div>
                      <div class="seeker-list-content-filter__school__input">
                        <select name="charge-school" id="" >
                          <option value="選択してください" selected>選択してください</option>
                          <option value=""></option>
                          <option value=""></option>
                          <option value=""></option>
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__phase">
                      <div class="seeker-list-content-filter__phase__label">
                        <label for="phase">フェーズ</label>
                      </div>
                      <div class="seeker-list-content-filter__phase__input">
                        <label class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase" value="支援前">
                          <span>支援前</span>
                        </label>
                        <label class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase" value="支援中">
                          <span>支援中</span>
                        </label>
                        <label class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase" value="内定承諾">
                          <span>内定承諾</span>
                        </label>
                        <label class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase" value="入社済み">
                          <span>入社済み</span>
                        </label>
                        <label class="seeker-list-content-filter__phase__input__checkbox">
                          <input type="checkbox" name="phase" value="入社済み">
                          <span>入社済み</span>
                        </label>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__type">
                      <div class="seeker-list-content-filter__type__label">
                        <label for="">種別</label>
                      </div>
                      <div class="seeker-list-content-filter__type__input">
                        <label class="seeker-list-content-filter__type__input__radio">
                          <input type="radio" name="type">
                          <span>新卒</span>
                        </label>
                        <label class="seeker-list-content-filter__type__input__radio">
                          <input type="radio" name="type">
                          <span>中途</span>
                        </label>
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__assumption">
                      <div class="seeker-list-content-filter__assumption__label seeker-list-content-filter-label">
                        <label for="">決定想定日</label>
                      </div>
                      <div class="seeker-list-content-filter__assumption__input seeker-list-content-filter-input-date">
                        <input type="text" name="assumption-1" placeholder="0000/00/00 - 0000/00/00">
                        <span>〜</span>
                        <input type="text" name="assumption-2" placeholder="0000/00/00 - 0000/00/00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__interview">
                      <div class="seeker-list-content-filter__interview__label seeker-list-content-filter-label">
                        <label for="">初回面談日</label>
                      </div>
                      <div class="seeker-list-content-filter__interview__input seeker-list-content-filter-input-date">
                        <input type="text" name="interview-1" placeholder="0000/00/00 - 0000/00/00">
                        <span>〜</span>
                        <input type="text" name="interview-2" placeholder="0000/00/00 - 0000/00/00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__setting">
                      <div class="seeker-list-content-filter__setting__label seeker-list-content-filter-label">
                        <label for="">面談設定日</label>
                      </div>
                      <div class="seeker-list-content-filter__setting__input seeker-list-content-filter-input-date">
                        <input type="text" name="setting-1" placeholder="0000/00/00 - 0000/00/00">
                        <span>〜</span>
                        <input type="text" name="setting-2" placeholder="0000/00/00 - 0000/00/00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__apply">
                      <div class="seeker-list-content-filter__apply__label seeker-list-content-filter-label">
                        <label for="">応募数</label>
                      </div>
                      <div class="seeker-list-content-filter__apply__input seeker-list-content-filter-input-date">
                        <input type="text" name="apply-1" placeholder="00">
                        <span>〜</span>
                        <input type="text" name="apply-2" placeholder="00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__selection">
                      <div class="seeker-list-content-filter__selection__label seeker-list-content-filter-label">
                        <label for="">選考数</label>
                      </div>
                      <div class="seeker-list-content-filter__selection__input seeker-list-content-filter-input-date">
                        <input type="text" name="selection-1" placeholder="00">
                        <span>〜</span>
                        <input type="text" name="selection-2" placeholder="00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__finalSelection">
                      <div class="seeker-list-content-filter__finalSelection__label seeker-list-content-filter-label">
                        <label for="">最終選考数</label>
                      </div>
                      <div class="seeker-list-content-filter__selection__input seeker-list-content-filter-input-date">
                        <input type="text" name="finalSelection-1" placeholder="00">
                        <span>〜</span>
                        <input type="text" name="finalSelection-2" placeholder="00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__offer">
                      <div class="seeker-list-content-filter__offer__label seeker-list-content-filter-label">
                        <label for="">内定数</label>
                      </div>
                      <div class="seeker-list-content-filter__offer__input seeker-list-content-filter-input-date">
                        <input type="text" name="offer-1" placeholder="00">
                        <span>〜</span>
                        <input type="text" name="offer-2" placeholder="00">
                      </div>
                    </div>
                    <div class="seeker-list-content-filter__labels">
                      <div class="seeker-list-content-filter__labels__label seeker-list-content-filter-label">
                        <label for="">ラベル</label>
                      </div>
                      <div class="seeker-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">仮）完全週休二日制 <span class="remove">×</span></span>
                        <span class="option">仮）平日休み <span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <div class="seeker-list-content-filter__btn">
                      <button type="button" id="cancel" class="seeker-list-content-filter__btn__cancel">キャンセル</button>
                      <button type="submit" class="seeker-list-content-filter__btn__apply">適用</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="applicant-onhold-list-content-table__inner">
                <table class="applicant-onhold-list-content-table">
                  <thead class="applicant-onhold-list-content-table__thead">
                    <tr class="applicant-onhold-list-content-table__tr">
                      <th class="applicant-onhold-list-content-table__th">編集</th>
                      <th class="applicant-onhold-list-content-table__th">求職者名</th>
                      <th class="applicant-onhold-list-content-table__th">担当CA</th>
                      <th class="applicant-onhold-list-content-table__th">企業名</th>
                      <th class="applicant-onhold-list-content-table__th">エラー内容</th>
                      <th class="applicant-onhold-list-content-table__th">応募締切</th>
                      <th class="applicant-onhold-list-content-table__th">応募／削除</th>
                    </tr>
                  </thead>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="applicant-onhold-list-content-table__tr">
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__edit">
                        <img src="assets/images/edit-blue.png" alt="">
                      </div>
                    </td>
                    <td class="applicant-onhold-list-content-table__td">松井良太</td>
                    <td class="applicant-onhold-list-content-table__td">後東健太</td>
                    <td class="applicant-onhold-list-content-table__td">株式会社サイバーエージェント</td>
                    <td class="applicant-onhold-list-content-table__td">xxxxの情報が不足しています</td>
                    <td class="applicant-onhold-list-content-table__td">2024/03/28</td>
                    <td class="applicant-onhold-list-content-table__td">
                      <div class="applicant-onhold-list-content-table__td__btn">
                        <button id="applicant-onhold-apply-btn" class="applicant-onhold-list-content-table__td__btn__approval">応募</button>
                        <button id="applicant-onhold-delete-btn" class="applicant-onhold-list-content-table__td__btn__delete">削除</button>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="applicant-onhold-list-content-pageList__inner">
                <div class="applicant-onhold-list-content-pageList">
                  <a class="applicant-onhold-list-content-pageList__prev__link" href="#applicant-onhold-prev">＜</a>
                </div>
                <div class="applicant-onhold-list-content-pageList">
                  <a class="applicant-onhold-list-content-pageList__link" href="#applicant-onhold-1">1</a>
                </div>
                <div class="applicant-onhold-list-content-pageList">
                  <a class="applicant-onhold-list-content-pageList__link" href="#applicant-onhold-1">2</a>
                </div>
                <div class="applicant-onhold-list-content-pageList">
                  <a class="applicant-onhold-list-content-pageList__link" href="#applicant-onhold-3">3</a>
                </div>
                <div class="applicant-onhold-list-content-pageList">
                  <a class="applicant-onhold-list-content-pageList__link" href="#applicant-onhold-4">4</a>
                </div>
                <div class="applicant-onhold-list-content-pageList">
                  <a class="applicant-onhold-list-content-pageList__link" href="#applicant-onhold-5">5</a>
                </div>
                <div class="applicant-onhold-list-content-pageList">
                  <a class="applicant-onhold-list-content-pageList__link" href="">...</a>
                </div>
                <div class="applicant-onhold-list-content-pageList">
                  <a class="applicant-onhold-list-content-pageList__next__link" href="#applicant-onhold-next">＞</a>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-confirm-inner">
            <div class="popup-confirm-block">
              <div class="popup-confirm-body">
                <div class="popup-confirm-body-heading">まとめて応募しますか？</div>
                <div class="popup-confirm-body-btns">
                  <button class="popup-confirm-body-cancel-btn popup-confirm-body-btn">戻る</button>
                  <button class="popup-confirm-body-decision-btn popup-confirm-body-btn">応募する</button>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-completion-inner">
            <div class="popup-completion-block">
              <div class="popup-completion-body">
                <div class="popup-completion-body-heading">応募完了しました</div>
                <a href="applicant-onhold-list.php" class="popup-completion-body-btn">
                  <button>戻る</button>
                </a>
              </div>
            </div>
          </div>
          <div class="popup-confirm-delete-inner">
            <div class="popup-confirm-block">
              <div class="popup-confirm-body">
                <div class="popup-confirm-body-heading">削除しますか？</div>
                <div class="popup-confirm-body-btns">
                  <button class="popup-confirm-body-delete-cancel-btn popup-confirm-body-btn">戻る</button>
                  <button class="popup-confirm-body-delete-btn popup-confirm-body-btn">削除する</button>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-completion-delete-inner">
            <div class="popup-completion-block">
              <div class="popup-completion-body">
                <div class="popup-completion-body-heading">削除しました</div>
                <a href="applicant-onhold-list.php" class="popup-completion-body-btn">
                  <button>戻る</button>
                </a>
              </div>
            </div>
          </div>
          <div class="popup-completion-error-inner">
            <div class="popup-completion-block">
              <div class="popup-completion-body">
                <div class="popup-completion-body-heading popup-completion-body-error-heading">エラーにより応募できませんでした</div>
                <a href="applicant-onhold-list.php" class="popup-completion-body-btn">
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
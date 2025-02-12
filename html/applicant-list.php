<?php $title="応募選考管理_選考一覧" ?>
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
        <div class="applicant-list__inner applicant-inner">
          <div class="applicant-list__block applicant-block">
            <div class="applicant-list__title__inner applicant-title-inner">
              <h2>選考一覧</h2>
            </div>
            <div class="applicant-list-content__inner applicant-content-inner">
              <div class="applicant-list-content-register__inner">
                <a href="applicant-register.php" class="applicant-list-content-register__btn">
                  <button type="button">新規応募</button>
                  <span>+</span>
                </a>
                <div id="filter" class="applicant-list-content-register__filter__icon">
                  <img src="assets/images/filter.png" alt="">
                </div>
              </div>
              <!--===== 求職者一覧フィルター =====-->
              <div class="applicant-list-content-filter__inner filter-inner">
                <div class="applicant-list-content-filter__block">
                  <form action="applicant-list-apply.php" method="POST" class="applicant-list-content-filter">
                    <div id="close" class="applicant-list-content-filter__close">
                      <img src="assets/images/close.png" alt="">
                    </div>
                    <div class="applicant-list-content-filter__create">
                      <div class="applicant-list-content-filter__create__label applicant-list-content-filter-label">
                        <label for="">作成日</label>
                      </div>
                      <div class="applicant-list-content-filter__create__input applicant-list-content-filter-input-date">
                        <input type="text" placeholder="0000/00/00 - 0000/00/00">
                        <span>ー</span>
                        <input type="text" placeholder="0000/00/00 - 0000/00/00">
                      </div>
                    </div>
                    <div class="applicant-list-content-filter__type">
                      <div class="applicant-list-content-filter__type__label">
                        <label for="">種別</label>
                      </div>
                      <div class="applicant-list-content-filter__type__input">
                        <label class="applicant-list-content-filter__type__input__radio">
                          <input type="checkbox" name="type" value="インターン">
                          <span>インターン</span>
                        </label>
                        <label class="applicant-list-content-filter__type__input__radio">
                          <input type="checkbox" name="type" value="新卒">
                          <span>新卒</span>
                        </label>
                        <label class="applicant-list-content-filter__type__input__radio">
                          <input type="checkbox" name="type" value="中途">
                          <span>中途</span>
                        </label>
                      </div>
                    </div>
                    <!-- ===== 担当CA ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">担当CA</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <!-- ===== 求人名 ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">求人名</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <!-- ===== 企業名 ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">企業名</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <!-- ===== 求職者名 ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">求職者名</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <!-- ===== フェーズ ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">フェーズ</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <!-- ===== 確度 ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">確度</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <!-- ===== 意向度 ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">意向度</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <!-- ===== 合格確度 ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">合格確度</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <!-- ===== 性別 ===== -->
                    <div class="applicant-list-content-filter__type">
                      <div class="applicant-list-content-filter__type__label">
                        <label for="">種別</label>
                      </div>
                      <div class="applicant-list-content-filter__type__input">
                        <label class="applicant-list-content-filter__type__input__radio">
                          <input type="checkbox" name="gender" value="男性">
                          <span>男性</span>
                        </label>
                        <label class="applicant-list-content-filter__type__input__radio">
                          <input type="checkbox" name="gender" value="女性">
                          <span>女性</span>
                        </label>
                      </div>
                    </div>
                    <!-- ===== 学校名 ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">学校名</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <!-- ===== 卒年度 ===== -->
                    <div class="applicant-list-content-filter__labels">
                      <div class="applicant-list-content-filter__labels__label applicant-list-content-filter-label">
                        <label for="">卒年度</label>
                      </div>
                      <div class="applicant-list-content-filter__labels__selected__options" onchange="changeColor(this)">
                        <span class="option">山田 太郎<span class="remove">×</span></span>
                        <span class="option">山田 華子<span class="remove">×</span></span>
                      </div>
                      <select multiple name="labels" id="" onchange="changeColor(this)">
                        <option value="完全週休二日制">仮）完全週休二日制</option>
                        <option value="平日休み">仮）平日休み</option>
                        <option value="その他">仮）その他</option>
                      </select>
                    </div>
                    <div class="applicant-list-content-filter__btn">
                      <button type="button" id="cancel" class="applicant-list-content-filter__btn__cancel">キャンセル</button>
                      <button type="submit" class="applicant-list-content-filter__btn__apply">適用</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="applicant-list-content-table__inner">
                <table class="applicant-list-content-table">
                  <thead class="applicant-list-content-table__thead">
                    <tr class="applicant-list-content-table__tr">
                      <th class="applicant-list-content-table__th">選考名</th>
                      <th class="applicant-list-content-table__th">担当CA</th>
                      <th class="applicant-list-content-table__th">企業名</th>
                      <th class="applicant-list-content-table__th">フェーズ</th>
                      <th class="applicant-list-content-table__th">選考メモ</th>
                    </tr>
                  </thead>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                  <tr class="applicant-list-content-table__tr">
                    <td class="applicant-list-content-table__td"><a href="applicant-management.php">サイバーエージェント_松井良太</a></td>
                    <td class="applicant-list-content-table__td">松井良太</td>
                    <td class="applicant-list-content-table__td"><a href="">株式会社サイバーエージェント</a></td>
                    <td class="applicant-list-content-table__td">1次選考</td>
                    <td class="applicant-list-content-table__td seeker-list-content-table__td__comment">
                      <p>この文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーですこの文字はダミーです</p>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="applicant-list-content-pageList__inner">
                <div class="applicant-list-content-pageList">
                  <a class="applicant-list-content-pageList__prev__link" href="#applicant-prev">＜</a>
                </div>
                <div class="applicant-list-content-pageList">
                  <a class="applicant-list-content-pageList__link" href="#applicant-1">1</a>
                </div>
                <div class="applicant-list-content-pageList">
                  <a class="applicant-list-content-pageList__link" href="#applicant-1">2</a>
                </div>
                <div class="applicant-list-content-pageList">
                  <a class="applicant-list-content-pageList__link" href="#applicant-3">3</a>
                </div>
                <div class="applicant-list-content-pageList">
                  <a class="applicant-list-content-pageList__link" href="#applicant-4">4</a>
                </div>
                <div class="applicant-list-content-pageList">
                  <a class="applicant-list-content-pageList__link" href="#applicant-5">5</a>
                </div>
                <div class="applicant-list-content-pageList">
                  <a class="applicant-list-content-pageList__link" href="">...</a>
                </div>
                <div class="applicant-list-content-pageList">
                  <a class="applicant-list-content-pageList__next__link" href="#applicant-next">＞</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php require_once dirname(__FILE__).'/footer.php'; ?>
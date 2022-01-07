<?php
    require_once('calendar.php');
    require_once('reservation.php')
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>ラヴィアンローズ</title>
</head>
<body>
    <header>
        <h1 id="home">ラヴィアンローズ</h1>
        <div class="header_right">
            <div class="tel_item">
                <p>ご予約・お問い合わせはこちら</p>
                <p class="tel">099-123-4567</p>
            </div>
            <p class="jump_button"><a href="#yoyaku">空席確認・予約する</a></p>
        </div>
    </header>
    <main>
        <p id="output"></p>
        <img src="image/home1.jpg" alt="ラヴィアンローズについて" class="main_img">
        <nav class="fixed_nav">
            <ul class="main_nav">
                <a href="#home" class="item"><li>ホーム</li></a>
                <a href="courses.html"><li>コース</li></a>
                <a href="food.html"><li>料理</li></a>
                <a href=""><li>クーポン</li></a>
                <a href="table.html"><li>お席</li></a>
                <a href="access.html"><li>アクセス</li></a>
            </ul>
        </nav>

        <h2 id="yoyaku">空席状況</h2>
        <div class="vacancy">
            <div class="carendar">
                <h3>
                    <div class="flex">
                    <form action="<?php echo es($_SERVER['PHP_SELF']); ?>" method="POST" name="pos">
                        <input  type="hidden" name="pos" value="" class="pos">
                        <input  type="hidden" name="ym" value="<?php echo $prev; ?>">
                        <input type="submit" value="&lt;" id="prev">
                    </form>
                    <?php echo $html_title; ?>
                    <form action="<?php echo es($_SERVER['PHP_SELF']); ?>" method="POST" name="pos">
                        <input  type="hidden" name="pos" value="" class="pos">
                        <input  type="hidden" name="ym" value="<?php echo $next; ?>">
                        <input type="submit" value="&gt;" id="next">
                    </form>
                    </div>
                    
                <table class="table">
                    <tr>
                        <th>日</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                    </tr>
                    <?php
                        foreach ($weeks as $week) {
                            echo $week;
                        }
                    ?>
                </table>
            </div>
            <div class="yoyaku">
                <div class="yoyaku_item">
                <form class="yoyaku_item" method="post" action="reservation_input.php">
                    <div class="mobile_item">
                        <p>予約日</p>
                        <?php echo $ymd?>
                        <input type="hidden" name="date" value="<?php echo $ymd?>">
                    </div>
                        <p>予約時間</p>
                            <select name="time">
                                <option value="18:00">18:00</option>
                                <option value="18:30">18:30</option>
                                <option value="19:00">19:00</option>
                                <option value="19:30">19:30</option>
                                <option value="20:00">20:00</option>
                                <option value="20:30">20:30</option>
                                <option value="21:00">21:00</option>
                                <option value="21:30">21:30</option>
                            </select>
                        <p>予約人数</p>
                            <select name="member">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <span></span>
                            <span></span>
                   
                    </div>
                    <div class="mobile_item">
                        <?php echo $submit?>
                </form>
                    <div class="carendar_det">
                            <ul>
                            <li>◎：即予約可</li>
                            <li>&#9651;：空席わずか</li>
                            <li>✕：予約不可</li>
                            <li>休：店休日</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <h2>おすすめ料理</h2>
            <ul class="cook">
                <li class="big_item">
                    <span><img class="arrow1" src="image/矢印.png" alt="ひとつ前の画像へ" onclick="prev()"></span>
                    <img id="big_img" src="">
                    <span><img class="arrow2" src="image/矢印.png" alt="ひとつ次の画像へ" onclick="next()"></span>
                </li>
                <div class="small_img">
                    <li><img src="image/チキン.jpg" id="small_img1" onclick="change_img1()"></li>
                    <li><img src="image/ステーキ.jpg" id="small_img2" onclick="change_img2()"></li>
                </div>
            </ul>
            <div class="cook_det">
                <p id="cook_title"></p>
                <p id="cook_cat"></p>
                <p id="money"></p>
            </div>

        <h2>お店の雰囲気</h2>
            <img src="image/店内.jpg" alt="店内" class="inside">

        <h2 class="under_bar">店舗詳細情報</h2>
        <p class="shop">ラヴィアンローズ</p>
        <h3 class="info info_title">基本情報</h3>
            <dl class="info">
                <div>
                    <dt>住所</dt>
                    <dd>鹿児島県鹿児島市中央町19-40</dd>
                </div>
                <div>
                    <dt>アクセス</dt>
                    <dd>鹿児島中央駅から徒歩5分</dd>
                </div>
                <div>
                    <dt>電話番号</dt>
                    <dd>099-123-4567</dd>
                </div>
                <div>
                    <dt>営業時間</dt>
                    <dd>月～土、祝日 18:00～23:00（ラストオーダー 22:00）</dd>
                </div>
                <div>
                    <dt>店休日</dt>
                    <dd>日曜日</dd>
                </div>
            </dl>
        <h3 class="info info_title">詳細情報</h3>
            <dl class="info">
                <div>
                    <dt>お問合せ時間</dt>
                    <dd>営業時間内にお願いいたします。</dd>
                </div>
                <div>
                    <dt>キャンセル規定</dt>
                    <dd>【コース予約の場合】キャンセルされる際はご来店前日23時までにご連絡ください。<br>
                    ご連絡時間が過ぎたがキャンセルしたい際はコース料金の100&#37;が発生します。
                    </dd>
                </div>
                <div>
                    <dt>平均予算</dt>
                    <dd>2,000円～3,000円</dd>
                </div>
                <div>
                    <dt>クレジットカード</dt>
                    <dd>利用可（VISA､マスター､JCB）</dd>
                </div>
                <div>
                    <dt>電子マネー</dt>
                    <dd>利用可</dd>
                </div>
            </dl>
        <h3 class="info info_title">感染症対策</h3>
            <dl class="info">
                <div>
                    <dt>お客様への取組み</dt>
                    <dd>【入店時】<br>
                    体調不良の方への自粛呼びかけ、入店時の検温、施設内のマスク着用依頼、店内に消毒液設置</dd>
                </div>
                <div>
                    <dt>従業員の安全衛生管理</dt>
                    <dd>勤務時の検温、マスク着用、頻繁な手洗い</dd>
                </div>
                <div>
                    <dt>店舗の衛生管理</dt>
                    <dd>換気設備の設置と換気、定期的な消毒</dd>
                </div>
            </dl>
        <h3 class="info info_title">たばこ</h3>
            <dl class="info">
                <div>
                    <dt>禁煙・喫煙</dt>
                    <dd>全席禁煙</dd>
                </div>
                <div>
                    <dt>喫煙室</dt>
                    <dd>あり</dd>
                </div>
            </dl>
    </main>
    <footer>
        <div class="footer_items">
            <div class="footer_item">
                <h1>ラヴィアンローズ</h1>
                <p>&#12306;890-0053</p>
                <p>鹿児島県鹿児島市中央町19-40</p>
                <p>&#9742; 099-123-4567</p>
            </div>
            <img src="image/地図.jpg" alt="地図" class="footer_map">
        </div>
        <p class="copyright"><small>Copyright&#169;2020 SHOJO PORTFOLIO</small></p>
    </footer>
<script src="javascript/index.js"></script>
<script src="javascript/jquery.js"></script>
<script>
    $('form').submit(function(){
	var scroll_top = $(window).scrollTop();  //送信時の位置情報を取得
	$('input.pos',this).prop('value',scroll_top);  //隠しフィールドに位置情報を設定
  });
   
  window.onload = function(){
	//ロード時に隠しフィールドから取得した値で位置をスクロール
	$(window).scrollTop("<?php echo $position; ?>");
  }

</script>


</body>
</html>
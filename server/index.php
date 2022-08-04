<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';

// データベースに接続
$dbh = connect_db();


// 変数を用意
$msgs = [];
$q1s = [];
$q2s = [];
$q3 = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msgs[] = $_POST['sex'];
    $msgs[] = $_POST['age'];
    $msgs[] = $_POST['place'];
    $msgs[] = $_POST['job'];
    $q1s = $_POST['Q1'];
    $q2s = $_POST['Q2'];
    $q3 = $_POST['Q3'];
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>平泉町アンケートページ</title>
</head>

<body>
    <form name="sampleform" action="" method="POST">
        <header></header>
        <main>
            <div class="Qs">
                <div class='personalQs'>
                    <div class="sex">
                        <h2 class="title">性別</h2>
                        <div class="choices">
                            <div class="choice">
                                <input class="radio" type="radio" id="sexChoice1" name="sex" value="男性">
                                <label class="label" for="sexChoice1">男性</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="sexChoice2" name="sex" value="女性">
                                <label class="label" for="sexChoice2">女性</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="sexChoice3" name="sex" value="その他">
                                <label class="label" for="sexChoice3">その他</label>
                            </div>
                            <div>
                                <input class="uncheckedButton" type="button" value="選択解除" onclick="uncheckedRadio_sex()">
                            </div>
                        </div>
                    </div>

                    <div class="age">
                        <h2 class="title">年代 <span class="required_span">必須</span></h2>
                        <div class="choices">
                            <div class="choice">
                                <input class="radio" type="radio" id="ageChoice1" name="age" value="10">
                                <label class="label" for="ageChoice1">10代</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="ageChoice2" name="age" value="20">
                                <label class="label" for="ageChoice2">20代</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="ageChoice3" name="age" value="30">
                                <label class="label" for="ageChoice3">30代</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="ageChoice4" name="age" value="40">
                                <label class="label" for="ageChoice4">40代</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="ageChoice5" name="age" value="50">
                                <label class="label" for="ageChoice5">50代</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="ageChoice6" name="age" value="60">
                                <label class="label" for="ageChoice6">60代</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="ageChoice7" name="age" value="70">
                                <label class="label" for="ageChoice7">70代以上</label>
                            </div>
                        </div>
                    </div>

                    <div class='place'>
                        <h2 class="title">居住区 <span class="required_span">必須</span></h2>
                        <div class="choices">
                            <div class="choice">
                                <input class="radio" type="radio" id="placeChoice1" name="place" value="中央区">
                                <label class="label" for="placeChoice1">中央区</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="placeChoice2" name="place" value="花見川区">
                                <label class="label" for="placeChoice2">花見川区</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="placeChoice3" name="place" value="稲毛区">
                                <label class="label" for="placeChoice3">稲毛区</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="placeChoice4" name="place" value="若葉区">
                                <label class="label" for="placeChoice4">若葉区</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="placeChoice5" name="place" value="緑区">
                                <label class="label" for="placeChoice5">緑区</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="placeChoice6" name="place" value="美浜区">
                                <label class="label" for="placeChoice6">美浜区</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="placeChoice7" name="place" value="other">
                                <label class="label" for="placeChoice7">市内在勤・在学</label>
                            </div>
                        </div>
                    </div>

                    <div class='job'>
                        <h2 class="title">職業 <span class="required_span">必須</span></h2>
                        <div class="choices">
                            <div class="choice">
                                <input class="radio" type="radio" id="jobChoice1" name="job" value="会社員">
                                <label class="label" for="jobChoice1">会社員</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="jobChoice2" name="job" value="自営・自由業">
                                <label class="label" for="jobChoice2">自営・自由業</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="jobChoice3" name="job" value="パート・アルバイト">
                                <label class="label" for="jobChoice3">パート・アルバイト</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="jobChoice4" name="job" value="公務員">
                                <label class="label" for="jobChoice4">公務員</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="jobChoice5" name="job" value="学生">
                                <label class="label" for="jobChoice5">学生</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="jobChoice6" name="job" value="専業主婦・主夫">
                                <label class="label" for="jobChoice6">専業主婦・主夫</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="jobChoice7" name="job" value="無職">
                                <label class="label" for="jobChoice7">無職</label>
                            </div>
                            <div class="choice">
                                <input class="radio" type="radio" id="jobChoice8" name="job" value="その他">
                                <label class="label" for="jobChoice8">その他</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainQs">
                    <div class='Q1'>
                        <h2 class="title">Q1 <span class="required_span">必須</span></h2>
                        <div class="choices">
                            <div class="choice">
                                <input type="checkbox" id="Q1Choice1" name="Q1[]" value="1">
                                <label for="Q1Choice1">市からの情報（市ホームページ、市政だより、市公式SNSなど）</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q1Choice2" name="Q1[]" value="2">
                                <label for="Q1Choice2">国からの情報（厚生労働省ホームページなど）</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q1Choice3" name="Q1[]" value="3">
                                <label for="Q1Choice3">県からの情報（県ホームページ、ちば県民だよりなど）</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q1Choice4" name="Q1[]" value="4">
                                <label for="Q1Choice4">医療機関からの情報（かかりつけへの受診時など）</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q1Choice5" name="Q1[]" value="5">
                                <label for="Q1Choice5">マスコミからの情報（テレビ、新聞など）</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q1Choice6" name="Q1[]" value="6">
                                <label for="Q1Choice6">インターネットからの情報（Twitter、Facebook、Youtubeなど）</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q1Choice7" name="Q1[]" value="7">
                                <label for="Q1Choice7">家族・友人・知人からの情報</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q1Choice8" name="Q1[]" value="8">
                                <label for="Q1Choice8">その他（）※50字以内</label>
                            </div>
                            <div class="choice">
                                <input type="text" disabled>
                            </div>
                        </div>
                    </div>
                    <div class='Q2'>
                        <h2 class="title">Q2 <span class="required_span">必須</span></h2>
                        <div class="choices">
                            <div class="choice">
                                <input type="checkbox" id="Q2Choice1" name="Q2[]" value="1">
                                <label for="Q2Choice1">市ホームページ</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q2Choice2" name="Q2[]" value="2">
                                <label for="Q2Choice2">市政だより</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q2Choice3" name="Q2[]" value="3">
                                <label for="Q2Choice3">市公式SNS（Twitter、LINE、Facebook）</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q2Choice4" name="Q2[]" value="4">
                                <label for="Q2Choice4">ちばし安全・安心メール</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q2Choice5" name="Q2[]" value="5">
                                <label for="Q2Choice5">コロナワクチンナビ</label>
                            </div>
                            <div class="choice">
                                <input type="checkbox" id="Q2Choice6" name="Q2[]" value="6">
                                <label for="Q2Choice6">1つもない</label>
                            </div>
                        </div>
                    </div>
                    <div class='Q3'>
                        <h2 class="title">Q3 <span class="required_span">必須</span></h2>
                        <div class="choices">
                            <div class="choice">
                                <input type="radio" id="Q3Choice1" name="Q3" value="する">
                                <label for="Q3Choice1">希望する　→Q5へ</label>
                            </div>
                            <div class="choice">
                                <input type="radio" id="Q3Choice2" name="Q3" value="しない">
                                <label for="Q3Choice2">希望しない</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <div>
                        <input type="submit" value="送信">
                    </div>
                </div>
        </main>
        <footer></footer>
    </form>

    <?php foreach ($msgs as $msg) : ?>
        <p><?= $msg ?></p>
    <?php endforeach; ?>
    <?php foreach ($q1s as $q1) : ?>
        <?= $q1 ?>
    <?php endforeach; ?>
    <?= '<br>' ?>
    <?php foreach ($q2s as $q2) : ?>
        <?= $q2 ?>
    <?php endforeach; ?>
    <?= '<br>' ?>
    <?= $q3 ?>
    <script src="js/script.js"></script>
</body>

</html>

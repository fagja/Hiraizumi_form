<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';

// データベースに接続
$dbh = connect_db();


// 変数を用意
$msgs = [];

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msgs[] = $_POST['sex'];
    $msgs[] = $_POST['age'];
    $msgs[] = $_POST['place'];
    $msgs[] = $_POST['job'];
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
    <form action="">
        <header></header>
        <main>
            <div class="main">
                <div class="form_main">
                    <dl></dl>
                        <dt></dt>
                        <dd>
                            <div></div>
                            <fieldset>
                                <legend></legend>
                                <p>
                                    <label for="">
                                        <input type="text">
                                        <label for=""></label>
                                    </label>
                                </p>
                                <input type="hidden">
                                <p>
                                    <label for="">
                                        <input type="text">
                                        <label for=""></label>
                                    </label>
                                </p>
                                <input type="hidden">
                                <p>
                                    <label for="">
                                        <input type="text">
                                        <label for=""></label>
                                    </label>
                                </p>
                                <input type="hidden">
                                <div>
                                    <input type="button">
                                </div>
                                <input type="hidden">
                            </fieldset>
                        </dd>
                    <dl></dl>
                    <dl></dl>
                    <dl></dl>
                </div>
            </div>
        </main>
        <footer></footer>
    </form>












    <!-- <form name="sampleform" action="" method="POST">
        <section class='personalInfos'>
            <div class='sex'>
                <fieldset>
                    <legend class="legend">性別</legend>

                    <div>
                        <input type="radio" id="sexChoice1" name="sex" value="男性">
                        <label for="sexChoice1">男性</label>
                    </div>
                    <div>
                        <input type="radio" id="sexChoice2" name="sex" value="女性">
                        <label for="sexChoice2">女性</label>
                    </div>
                    <div>
                        <input type="radio" id="sexChoice3" name="sex" value="その他">
                        <label for="sexChoice3">その他</label>
                    </div>
                </fieldset>
            </div>

            <div class='age'>
                <fieldset>
                    <legend>年代</legend>

                    <div>
                        <input type="radio" id="ageChoice1" name="age" value="10">
                        <label for="ageChoice1">10代</label>
                    </div>
                    <div>
                        <input type="radio" id="ageChoice2" name="age" value="20">
                        <label for="ageChoice2">20代</label>
                    </div>
                    <div>
                        <input type="radio" id="ageChoice3" name="age" value="30">
                        <label for="ageChoice3">30代</label>
                    </div>
                    <div>
                        <input type="radio" id="ageChoice4" name="age" value="40">
                        <label for="ageChoice4">40代</label>
                    </div>
                    <div>
                        <input type="radio" id="ageChoice5" name="age" value="50">
                        <label for="ageChoice5">50代</label>
                    </div>
                    <div>
                        <input type="radio" id="ageChoice6" name="age" value="60">
                        <label for="ageChoice6">60代</label>
                    </div>
                    <div>
                        <input type="radio" id="ageChoice7" name="age" value="70">
                        <label for="ageChoice7">70代以上</label>
                    </div>
                </fieldset>
            </div>

            <div class='place'>
                <fieldset>
                    <legend>居住区</legend>

                    <div>
                        <input type="radio" id="placeChoice1" name="place" value="中央区">
                        <label for="placeChoice1">中央区</label>
                    </div>
                    <div>
                        <input type="radio" id="placeChoice2" name="place" value="花見川区">
                        <label for="placeChoice2">花見川区</label>
                    </div>
                    <div>
                        <input type="radio" id="placeChoice3" name="place" value="稲毛区">
                        <label for="placeChoice3">稲毛区</label>
                    </div>
                    <div>
                        <input type="radio" id="placeChoice4" name="place" value="若葉区">
                        <label for="placeChoice4">若葉区</label>
                    </div>
                    <div>
                        <input type="radio" id="placeChoice5" name="place" value="緑区">
                        <label for="placeChoice5">緑区</label>
                    </div>
                    <div>
                        <input type="radio" id="placeChoice6" name="place" value="美浜区">
                        <label for="placeChoice6">美浜区</label>
                    </div>
                    <div>
                        <input type="radio" id="placeChoice7" name="place" value="other">
                        <label for="placeChoice7">市内在勤・在学</label>
                    </div>


                </fieldset>
            </div>

            <div class='job'>
                <fieldset>
                    <legend>職業</legend>

                    <div>
                        <input type="radio" id="jobChoice1" name="job" value="会社員">
                        <label for="jobChoice1">会社員</label>
                    </div>
                    <div>
                        <input type="radio" id="jobChoice2" name="job" value="自営・自由業">
                        <label for="jobChoice2">自営・自由業</label>
                    </div>
                    <div>
                        <input type="radio" id="jobChoice3" name="job" value="パート・アルバイト">
                        <label for="jobChoice3">パート・アルバイト</label>
                    </div>
                    <div>
                        <input type="radio" id="jobChoice4" name="job" value="公務員">
                        <label for="jobChoice4">公務員</label>
                    </div>
                    <div>
                        <input type="radio" id="jobChoice5" name="job" value="学生">
                        <label for="jobChoice5">学生</label>
                    </div>
                    <div>
                        <input type="radio" id="jobChoice6" name="job" value="専業主婦・主夫">
                        <label for="jobChoice6">専業主婦・主夫</label>
                    </div>
                    <div>
                        <input type="radio" id="jobChoice7" name="job" value="無職">
                        <label for="jobChoice7">無職</label>
                    </div>
                    <div>
                        <input type="radio" id="jobChoice8" name="job" value="その他">
                        <label for="jobChoice8">その他</label>
                    </div>
                </fieldset>
            </div>

            <div class="buttons">
                <div>
                    <input type="submit" value="送信">
                </div>
                <div>
                    <input type="button" value="選択解除" onclick="resetRadio()">
                    <script>
                        function resetRadio() {
                            document.sampleform.reset();
                        }
                    </script>
                </div>
            </div>
        </section>
    </form>

    <?php foreach ($msgs as $msg) : ?>
        <p><?= $msg ?></p>
    <?php endforeach; ?> -->
</body>

</html>

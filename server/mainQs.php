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
    <title>Qs</title>
</head>

<body>
    <form name="Qsform" action="" method="POST">
        <section class='Qs'>
            <div class='Q1'>
                <fieldset>
                    <legend>Q1</legend>

                    <div>
                        <input type="checkbox" id="Q1Choice1" name="Q1[]" value="1">
                        <label for="Q1Choice1">市からの情報（市ホームページ、市政だより、市公式SNSなど）</label>
                    </div>

                    <div>
                        <input type="checkbox" id="Q1Choice2" name="Q1[]" value="2">
                        <label for="Q1Choice2">国からの情報（厚生労働省ホームページなど）</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q1Choice3" name="Q1[]" value="3">
                        <label for="Q1Choice3">県からの情報（県ホームページ、ちば県民だよりなど）</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q1Choice4" name="Q1[]" value="4">
                        <label for="Q1Choice4">医療機関からの情報（かかりつけへの受診時など）</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q1Choice5" name="Q1[]" value="5">
                        <label for="Q1Choice5">マスコミからの情報（テレビ、新聞など）</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q1Choice6" name="Q1[]" value="6">
                        <label for="Q1Choice6">インターネットからの情報（Twitter、Facebook、Youtubeなど）</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q1Choice7" name="Q1[]" value="7">
                        <label for="Q1Choice7">家族・友人・知人からの情報</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q1Choice8" name="Q1[]" value="8">
                        <label for="Q1Choice8">その他（）※50字以内</label>
                    </div>
                    <div>
                        <input type="text" disabled>
                    </div>
                </fieldset>
            </div>
            <div class='Q2'>
                <fieldset>
                    <legend>Q2</legend>

                    <div>
                        <input type="checkbox" id="Q2Choice1" name="Q2[]" value="1">
                        <label for="Q2Choice1">市ホームページ</label>
                    </div>

                    <div>
                        <input type="checkbox" id="Q2Choice2" name="Q2[]" value="2">
                        <label for="Q2Choice2">市政だより</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q2Choice3" name="Q2[]" value="3">
                        <label for="Q2Choice3">市公式SNS（Twitter、LINE、Facebook）</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q2Choice4" name="Q2[]" value="4">
                        <label for="Q2Choice4">ちばし安全・安心メール</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q2Choice5" name="Q2[]" value="5">
                        <label for="Q2Choice5">コロナワクチンナビ</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Q2Choice6" name="Q2[]" value="6">
                        <label for="Q2Choice6">1つもない</label>
                    </div>
                </fieldset>
            </div>
            <div class='Q3'>
                <fieldset>
                    <legend>Q3</legend>
                    <div>
                        <input type="radio" id="Q3Choice1" name="Q3" value="する">
                        <label for="Q3Choice1">希望する　→Q5へ</label>
                    </div>
                    <div>
                        <input type="radio" id="Q3Choice2" name="Q3" value="しない">
                        <label for="Q3Choice2">希望しない</label>
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
                            document.Qsform.reset();
                        }
                    </script>
                </div>
            </div>
        </section>
    </form>
    <?php foreach ($q1s as $q1) : ?>
        <?= $q1 ?>
    <?php endforeach; ?>
    <?= '<br>' ?>
    <?php foreach ($q2s as $q2) : ?>
        <?= $q2 ?>
    <?php endforeach; ?>
    <?= '<br>' ?>
    <?= $q3 ?>
</body>

</html>

<?php
require_once 'functions.php';
//値の変換
$height = (float) $_POST['height'];
$weight = (float) $_POST['weight'];
//正しい値かの確認
if (!((0 < $height) && ($height < 3))) {
   echo '身長を正しく入力してください';
   exit;
}
if (($weight < 20) || ( 200 < $weight )) {
    echo "体重を入力してください";
    exit;
}

//計算
$goal_weight = $height * $height * 22;
$difference = $goal_weight - $weight;
$abc = abs($difference);

//結果の表示
echo '体重' .str2html($weight) . 'kg<br>';
echo '理想' .str2html($goal_weight) . 'kg<br>';
if (0 < $difference) {
    echo "適正体重より" . str2html($abc) . "kg低いです。<br>";
} elseif ($difference < 0) {
    echo "適正体重より" .str2html($abc) . "kg重いです。<br>";
}

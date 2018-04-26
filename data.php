<?php 
//クラスの読み込み
require_once("member_kanji.php");
require_once("member_hiragana.php");

//インスタンス生成
$neru_nagahama = new M_kanji('Nagahama Neru','./img/neru_nagahama.jpg');
$risa_watanabe = new M_kanji('Watanabe Risa','./img/risa_watanabe.jpg');
$rina_uemura = new M_kanji('Uemura Rina','./img/rina_uemura.jpg');
$yui_kobayashi = new M_kanji('Kobayashi Yui','./img/yui_kobayashi.jpg');



$kyoko_saito = new M_hiragana('Saito Kyoko','./img/kyoko_saito.jpg');
$shiho_kato = new M_hiragana("Kato Shiho",'./img/shiho_kato.jpg');
$ayaka_takamoto = new M_hiragana("Takamoto Ayaka",'./img/ayaka_takamoto.jpg');
$mei_higashimura = new M_hiragana("Higashimura Mei",'./img/mei_higashimura.jpg');




$members = array($neru_nagahama,$risa_watanabe,$rina_uemura,$yui_kobayashi,$kyoko_saito,$shiho_kato,$ayaka_takamoto,$mei_higashimura);

?>
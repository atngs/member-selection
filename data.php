<?php 
require_once("member.php");//クラスを読み込み

//インスタンス生成
$neru_nagahama = new Member('Neru Nagahama','./img/neru_nagahama.jpg');
$risa_watanabe = new Member('Watanabe Risa','./img/risa_watanabe.jpg');
$rina_uemura = new Member('Uemura Rina','./img/rina_uemura.jpg');
$yui_kobayashi = new Member('Kobayashi Yui','./img/yui_kobayashi.jpg');


$members = array($neru_nagahama,$risa_watanabe,$rina_uemura,$yui_kobayashi);

?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
 </head>
 <body>
    <?php require_once("data.php") ?>
    <div class="member-wrapper container">
        <h1 class="logo">keyakizaka46</h1>
        <p>メンバー：<?php echo Member::getCount() ?>人</p>
        <form action="./confirm_select_member.php">
        <div class="keyakizaka-members">
            <?php foreach($members as $member)://data.phpの配列 ?>
             <div class="keyakizaka-member">
              <img src="<?php echo $member->getProfileImage() ?>" alt="">
              <h3 class="keyakizaka-member-name"><?php echo $member->getName() ?></h3>
             </div>
            <?php endforeach ?>
        </div>
        <input type="submit">
        </form>
    </div>
 </body>
</html>
<?php 
 class Member {
    private $name;
    private $profileImage;

    private static $count = 0;

    //インスタンス生成毎に実行
    public function __construct($name,$profileImage){
        $this->name = $name;
        $this->profileImage = $profileImage;
        self::$count++;
    }

    public function getName(){
        return $this->name;
    }
    public function getProfileImage(){
        return $this->profileImage;
    }

    public static function getCount(){
        return self::$count;
    }
 }
?>
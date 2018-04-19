<?php 
 class Member {
    private $name;
    private $profileImage;

    //インスタンス生成毎に実行
    public function __construct($name,$profileImage){
        $this->name = $name;
        $this->profileImage = $profileImage;

    }

    public function getName(){
        return $this->name;
    }
    public function getProfileImage(){
        return $this->profileImage;
    }
 }
?>
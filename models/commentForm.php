<?php

namespace app\models;

use yii\base\model;

class CommentForm extends model{
    public $name;
    public $body;
    
    public function rules(){
        return [
          [['name','body'],'required']
        ];
    }
}


?>

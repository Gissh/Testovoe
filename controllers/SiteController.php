<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\comments;
use app\models\commentForm;

class SiteController extends Controller
{

    public function actionMainpage(){
        $comments=Comments::find()->all();
        
        $model=new CommentForm();
        
        if($model->load(yii::$app->request->post())){
            $newComment=new Comments();
            $newComment->name=$model->name;
            $newComment->body=$model->body;
            $newComment->time=date('H:m');
            $newComment->date=date('y-m-d');
            $newComment->save();
            return $this->render('mainpage',['comments'=>$comments,'model'=>$model]);
        }else{
            return $this->render('mainpage',['comments'=>$comments,'model'=>$model]);
        }
        
        
    }
}

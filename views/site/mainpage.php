<?php

use yii\helpers\html;
use yii\widgets\activeform;


?>
<div class="commentsBlock">

    <?php foreach ($comments as $comment): ?>
    <div class="comment">
        <div class="commentInfo"><span class="commentOwner"><b><?= html::encode($comment->name) ?></b></span><span class="commentTime"><?= html::encode(date_create($comment->time)->format('H:m')) ?> <?= html::encode(date_create($comment->date)->format('d.m.Y')) ?></span></div>
        <div class="commentBody"><?= html::encode($comment->body) ?></div>
    </div>
    <?php endforeach; ?>

</div>

<div class="createComment">
    <h3>Оставить комментарий</h3>

    <?php $form=ActiveForm::begin() ?>
    <div class="form-group">
        <label>Ваше имя</label>
        <?= Html::activeTextInput($model, 'name', ['class' => 'customInput form-control']); ?>
    </div>

    <div class="form-group">
        <label>Ваш комментарий</label>
        <?= Html::activeTextArea($model, 'body', ['class' => 'customInput form-control','rows'=>4]); ?>
    </div>




    <?= html::submitButton('Отправить',['class'=>'customBtn']) ?>

    <?php ActiveForm::end() ?>
</div>

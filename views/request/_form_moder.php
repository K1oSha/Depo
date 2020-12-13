<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form yii\widgets\ActiveForm */
?>
<link rel="stylesheet" type="text/css" href="/css/event.css">

<div class="request-form">


<? setlocale(LC_TIME,'ru_RU.UTF-8'); ?>
    <div class="main">
        <div class="head">
            <div class="text-div">
                <div class="tittle">
                    <?= $model->title ?>
                </div>
                <div class="date_time-div">
                    <div class="event_date"><img src="../templates/calendar_black.svg" alt=""><div><?= strftime( '%e %B, %A', strtotime( $model->start )) ?></div></div>
                    <div class="event_time"><img src="../templates/clock_black.svg" alt=""><div><?= strftime( '%H:%M', strtotime( $model->start ))  ?> до <?= strftime( '%H:%M', strtotime( $model->end ))  ?> </div></div>
                </div>
                <? if (Yii::$app->user->isGuest) { ?>
                    <!-- <form action="<?= '/request/registerguest?id=' . $model->id ?>" method="post"> -->
                        <button type="submit" id="sign_up" data-toggle="modal" data-target="#modal">Зарегистрироваться</button>
                    <!-- </form> -->
                <? } else { 
                    if (\app\models\Contributor::find()->where(['and', ['user_id'=>\Yii::$app->user->identity->id,'request_id'=>$model->id]])->one())
                    { ?>
                        <button type="submit" class="info-btn" disabled>Вы уже зарегистрированы</button>
                    <?} else {  ?>
                    <? }  ?>
                <? } ?>
               
            </div>
            <div class="img-div">
                <img src="<?= $model->bannerurl?>" alt="">
            </div>
        </div>
        <div class="about">
            <div class="about_tittle">О мероприятии</div>
            <div class="about_description"><?= $model->desc?></div>
        </div>
        <div class="contacts" style="padding-bottom: 100px;">
            <div class="contacts_tittle">Контакты</div>
            <div class="contacts_description"><?= $model->contacts?></div>
        </div>
    </div>
    </div>

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'author_id')->textInput() ?>

    <?//= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'desc')->textarea(['rows' => 6])->label('Описание') ?>

    <?//= $form->field($model, 'extra_desc')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'availability')->checkbox() ?>


    <?//= $form->field($model, 'confirmed')->checkbox() ?>

    <?//= $form->field($model, 'rejected')->checkbox() ?>

    <?= $form->field($model, 'rej_msg')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'start')->textInput() ?>

    <?//= $form->field($model, 'end')->textInput() ?>
    <?//= $form->field($model, 'register_end')->textInput() ?>
    <?//= $form->field($model, 'bannerurl')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'deleted')->textInput() ?>

    <?//= $form->field($model, 'place_talk')->checkbox() ?>

    <?//= $form->field($model, 'place_hall')->checkbox() ?>

    <?//= $form->field($model, 'broadcasturl')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'category_id')->textInput() ?>

    <?//= $form->field($model, 'visited')->textInput() ?>

    <?//= $form->field($model, 'registered')->textInput() ?>

    <?//= $form->field($model, 'views')->textInput() ?>

    <div class="form-group" style="margin-bottom: 40px;">
        <?= Html::submitButton('Согласовать', ['class' => 'btn btn-success']) ?>
        <?= Html::submitButton('Отказать', ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

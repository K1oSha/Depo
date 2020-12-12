<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'author_id')->textInput() ?>

    <?//= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'desc')->textarea(['rows' => 6])->label('Описание') ?>

    <?//= $form->field($model, 'extra_desc')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'availability')->checkbox() ?>


    <?= $form->field($model, 'confirmed')->checkbox() ?>

    <?= $form->field($model, 'rejected')->checkbox() ?>

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

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

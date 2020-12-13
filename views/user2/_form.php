<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'whatsapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_created')->textInput() ?>

    <?= $form->field($model, 'is_admin')->textInput() ?>

    <?= $form->field($model, 'is_moderator')->textInput() ?>

    <?= $form->field($model, 'activity')->textInput() ?>

    <?= $form->field($model, 'personal')->textInput() ?>

    <?= $form->field($model, 'marketing')->textInput() ?>

    <?= $form->field($model, 'strategic')->textInput() ?>

    <?= $form->field($model, 'industry')->textInput() ?>

    <?= $form->field($model, 'investment')->textInput() ?>

    <?= $form->field($model, 'bigdata')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passhash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authokey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

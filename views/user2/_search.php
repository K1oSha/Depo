<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'position') ?>

    <?= $form->field($model, 'telegram') ?>

    <?php // echo $form->field($model, 'whatsapp') ?>

    <?php // echo $form->field($model, 'is_created') ?>

    <?php // echo $form->field($model, 'is_admin') ?>

    <?php // echo $form->field($model, 'is_moderator') ?>

    <?php // echo $form->field($model, 'activity') ?>

    <?php // echo $form->field($model, 'personal') ?>

    <?php // echo $form->field($model, 'marketing') ?>

    <?php // echo $form->field($model, 'strategic') ?>

    <?php // echo $form->field($model, 'industry') ?>

    <?php // echo $form->field($model, 'investment') ?>

    <?php // echo $form->field($model, 'bigdata') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'passhash') ?>

    <?php // echo $form->field($model, 'authokey') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

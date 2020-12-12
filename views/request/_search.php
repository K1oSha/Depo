<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RequestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'desc') ?>

    <?= $form->field($model, 'extra_desc') ?>

    <?php // echo $form->field($model, 'availability') ?>

    <?php // echo $form->field($model, 'register_end') ?>

    <?php // echo $form->field($model, 'confirmed') ?>

    <?php // echo $form->field($model, 'rejected') ?>

    <?php // echo $form->field($model, 'rej_msg') ?>

    <?php // echo $form->field($model, 'start') ?>

    <?php // echo $form->field($model, 'end') ?>

    <?php // echo $form->field($model, 'bannerurl') ?>

    <?php // echo $form->field($model, 'deleted') ?>

    <?php // echo $form->field($model, 'place_talk') ?>

    <?php // echo $form->field($model, 'place_hall') ?>

    <?php // echo $form->field($model, 'broadcasturl') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'visited') ?>

    <?php // echo $form->field($model, 'registered') ?>

    <?php // echo $form->field($model, 'views') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

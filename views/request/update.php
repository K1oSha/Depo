<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title = 'Update Request: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="request-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <? if (\Yii::$app->user->identity->is_moderator) { ?>
        <?= $this->render('_form_moder', [
        'model' => $model,
    ]) ?>
    <? }  else {?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <? } ?>

</div>

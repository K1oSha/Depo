<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="request-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'author_id',
            'title',
            'desc:ntext',
            'extra_desc:ntext',
            'availability',
            'register_end',
            'confirmed',
            'rejected',
            // 'rej_msg:ntext',
            'start',
            'end',
            'bannerurl',
            // 'deleted',
            'place_talk',
            'place_hall',
            'broadcasturl',
            // 'category_id',
            // 'visited',
            // 'registered',
            // 'views',
        ],
    ]) ?>

</div>
<form action="<?= '/request/registerguest?id=' . $model->id ?>" method="post">
    <p>имя</p>
    <input type="text" id="register-name" class="form-control" name="name">
    <p>эмеил</p>
    <input type="text" id="register-email" class="form-control" name="email">
    <p>телефон</p>
    <input type="text" id="register-phone" class="form-control" name="phone">
    <button type="submit" class="btn btn-success">Зарегаться</button>
</form>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Участники мероприятия "Защита проекта от команды "Покет"" ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            // 'email:email',
            'number',
            // 'position',
            // 'telegram',
            //'whatsapp',
            //'is_created',
            //'is_admin',
            //'is_moderator',
            // 'activity',
            // 'personal',
            // 'marketing',
            // 'strategic',
            // 'industry',
            // 'investment',
            // 'bigdata',
            //'passhash',
            //'authokey',
            //'avatar',

            ['class' => 'yii\grid\ActionColumn',

                'template' => ' {check}',
                'buttons' => [
                    'view' => function ($url, $model, $key)  {
                        // Yii::$app->session['model1']=$model;
                        return Html::a('', ['entity/view', 'id' => $model['id']],['class' => 'glyphicon glyphicon-eye-open','data-pjax' => 0]);
                    },
                    'update' => function ($url, $model, $key)  {
                        // Yii::$app->session['model1']=$model;
                        return Html::a('', ['entity/update', 'id' => $model['id']],['class' => 'glyphicon glyphicon-pencil', 'data-pjax' => 0]);
                    },
                    'check' => function ($url, $model, $key) {
                        return '<input type="checkbox">'; 
                    }
            
                ],
            ]
        ]
    ]); ?>

    <?php Pjax::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<link rel="stylesheet" type="text/css" href="/css/event.css">
<link rel="stylesheet" type="text/css" href="/css/sign_up_modal.css">
<link rel="stylesheet" type="text/css" href="/css/sign_up_modal_after.css">
<div class="request-view">
<!-- 
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
    </p> -->

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
                    <form action="<?= '/request/register?id=' . $model->id?> " method="post">
                        <button type="submit" id="sign_up">Зарегистрироваться</button>
                    </form>
                    <? }  ?>
                <? } ?>
                <div class="share_button">
                    <div class='text_share'>Поделиться</div>
                    <div class="share_button_icon">
                        <div style="background: url(../templates/vk_icon.svg) no-repeat center center;"></div>
                        <div style="background: url(../templates/instagram_icon.svg) no-repeat center center,rgba(57, 74, 88, 0.16);"></div>
                        <div style="background: url(../templates/telegram_icon.svg) no-repeat center center;"></div>
                        <div style="background: url(../templates/whatsapp_icon.svg) no-repeat center center, rgba(57, 74, 88, 0.16);"></div>
                        <div style="background: url(../templates/facebook_icon.svg) no-repeat center center;"></div>
                    </div>
                </div>
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
    <div id="modal2" class="modal fade">
        <div class="form">
            <div class="form_modal2">
                <div class="form_data">
                    <div class="form_text">
                        Вы зарегистрированы на мероприятие “<?= $model->title ?>”!<br><br>
                        Чтобы не пропустить актуальную информациию, организовывать свои мероприятия и  отслеживать свой рост - создайте личный кабинет.
                    </div>
                    <div class="buttons-div">
                        <button data-toggle="modal" data-target="modal-reg" id="reg" class="create_lk">Создать личный кабинет</button>
                        <button class="back" id="close">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal" class="modal fade">
        <div class="blur"></div>
        <div class="form">
            <?php Pjax::begin(['id'=>'pjax-form']); ?>
                <form action="<?= '/request/registerguest?id=' . $model->id ?>" method="post" data-pjax="true">
                    <div class="form_modal">
                        <div class="form_data">
                            <div class="field-input">
                                <div class="field-title">
                                    ФИО
                                </div>
                                <div>
                                    <input placeholder="Введите ФИО" class="field-input-div" type="text" name="name">
                                </div>
                            </div>
                            <div class="field-input">
                                <div class="field-title">
                                    Номер телефона
                                </div>
                                <div>
                                    <input placeholder="Введите номер" class="field-input-div" type="text" name="number">
                                </div>
                            </div>
                            <div class="field-input">
                                <div class="field-title">
                                    E-mail
                                </div>
                                <div>
                                    <input placeholder="Введите Эл. почту" class="field-input-div" type="text" name="email">
                                </div>
                            </div>
                            <div style="display: flex; margin-top: 19px;">
                                <input class="checkbox-div" type="checkbox">
                                <div class="checkbox_text">
                                    Даю своё <a href="google.com" style="color: #E21C1C;text-decoration: none;">согласие</a> на обработку персональных данных...
                                </div>
                            </div>
                            <button class="submit_event" data-toggle="modal" data-target="#modal2">Зарегистрироваться</button>
                            <script>
                               
                            </script>
                        </div>
                    </div>
                </form>
            <?php Pjax::end(); ?>
        </div>
    </div>

    <? $script = <<< JS
    $(document).on('pjax:success',  function(e) {
                                e.preventDefault();
                                // Coding
                                $('#modal').modal('toggle'); //or  $('#IDModal').modal('hide');
                                return false;
                            });
    $('#close').on('click',function(e) {
        e.preventDefault();
        // Coding
        $('#modal2').modal('toggle'); //or  $('#IDModal').modal('hide');
        return false;
    });
    $('#reg').on('click',function(e) {
        e.preventDefault();
        // Coding
        $('#modal2').modal('toggle'); //or  $('#IDModal').modal('hide');
        $('#modal-reg').modal('toggle'); //or  $('#IDModal').modal('hide');
        return false;
    });
JS;
                  
$this->registerJs($script);                  
                  ?> 

</div>
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requests';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" type="text/css" href="/css/events.css">
<div class="request-index">
        
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="main">
        <? if (!\Yii::$app->user->isGuest) { ?> 
            <a href="/request/create">
                <button id="create_event">
                    Создать событие
                </button>
            </a>
        <?} ?>
        <? if (\Yii::$app->user->identity->is_moderator) { ?> 
            <a href="/request/indexmod">
                <button id="create_event" style="background-color: turquoise; margin-top: 20px; border-color: white;">
                    Ожидающие рассмотрения
                </button>
            </a>
        <?} ?>
        <input type="text" id="search" placeholder="Поиск мероприятия . . .">
        <div class="select-div">
            <button id="date">
                <p>любая дата</p>
                <img src="../templates/dart_down.svg" alt="">
            </button>
            <select name="" id="type"> 
                <option disabled>выберите тему</option>
                <option selected value="all">все темы</option>
                <option value="personal">управление персоналом</option>
                <option value="marketing">реклама и маркетинг</option>
                <option value="strategic">стратегическое управление</option>
                <option value="industry">промышленность</option>
                <option value="investment">инвестиции</option>
                <option value="bigdata">большие данные</option>
            </select>
        </div>
        <div class="event-div">
            <? $data = $dataProvider->getModels();
                setlocale(LC_TIME,'ru_RU.UTF-8');
            ?>
            <? 
                $i = 0;
                $j = 0;
                foreach($data as $event)
                {
                    if ($i % 3 == 0)
                    { ?>
                        <div class="line">
                        <? $i++;} ?>
                        
                    <a href="<?= '/request/update?id=' . $event->id?>">
                        <div class="event" style="background-image: url(<?= $event->bannerurl?>);">
                            <div class="dark"></div>
                            <div class="event-text">
                                <div class="title"><?= $event->title?></div>
                                <div class="date_time-div">
                                    <div class="event_date"><img src="../templates/calendar.svg" alt=""><div><?= strftime( '%e %B, %A', strtotime( $event->start )) ?></div></div>
                                    <div class="event_time"><img src="../templates/clock.svg" alt=""><div><?= strftime( '%H:%M', strtotime( $event->start ))  ?> до <?= strftime( '%H:%M', strtotime( $event->end ))  ?></div></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <? 
                    $j++;
                    if ($j % 3 == 0 && $j>2)
                    {?>
                        </div>
                        <div class="line">
                    <? } ?>
                <? } ?> 
                <!-- <div href="../index/event.html" class="event" id="e1">
                    <div class="dark"></div>
                    <div class="event-text">
                        <div class="title">Хакатон «Стартап-депо» от Дальневосточной железной дороги</div>
                        <div class="date_time-div">
                            <div class="event_date"><img src="../templates/calendar.svg" alt=""><div>12 декабря, суббота</div></div>
                            <div class="event_time"><img src="../templates/clock.svg" alt=""><div>00:30 до 00:00</div></div>
                        </div>
                    </div>
                </div>
                <div onclick="location.href = '../index/event.html';" class="event" id="e2">
                    <div class="dark"></div>
                    <div class="event-text">
                        <div class="title">Хакатон «Стартап-депо» от Дальневосточной железной дороги</div>
                        <div class="date_time-div">
                            <div class="event_date"><img src="../templates/calendar.svg" alt=""><div>12 декабря, суббота</div></div>
                            <div class="event_time"><img src="../templates/clock.svg" alt=""><div>00:30 до 00:00</div></div>
                        </div>
                    </div>
                </div>
                <div class="event" id="e3">
                    <div class="dark"></div>
                    <div class="event-text">
                        <div class="title">Хакатон «Стартап-депо» от Дальневосточной железной дороги</div>
                        <div class="date_time-div">
                            <div class="event_date"><img src="../templates/calendar.svg" alt=""><div>12 декабря, суббота</div></div>
                            <div class="event_time"><img src="../templates/clock.svg" alt=""><div>00:30 до 00:00</div></div>
                        </div>
                    </div>
                </div>
            <div class="line">
                <div class="event" id="e4">
                    <div class="dark"></div>
                    <div class="event-text">
                        <div class="title">Хакатон «Стартап-депо» от Дальневосточной железной дороги</div>
                        <div class="date_time-div">
                            <div class="event_date"><img src="../templates/calendar.svg" alt=""><div>12 декабря, суббота</div></div>
                            <div class="event_time"><img src="../templates/clock.svg" alt=""><div>00:30 до 00:00</div></div>
                        </div>
                    </div>
                </div>
                <div class="event" id="e5">
                    <div class="dark"></div>
                    <div class="event-text">
                        <div class="title">Хакатон «Стартап-депо» от Дальневосточной железной дороги</div>
                        <div class="date_time-div">
                            <div class="event_date"><img src="../templates/calendar.svg" alt=""><div>12 декабря, суббота</div></div>
                            <div class="event_time"><img src="../templates/clock.svg" alt=""><div>00:30 до 00:00</div></div>
                        </div>
                    </div>
                </div>
                <div class="event" id="e6">
                    <div class="dark"></div>
                    <div class="event-text">
                        <div class="title">Хакатон «Стартап-депо» от Дальневосточной железной дороги</div>
                        <div class="date_time-div">
                            <div class="event_date"><img src="../templates/calendar.svg" alt=""><div>12 декабря, суббота</div></div>
                            <div class="event_time"><img src="../templates/clock.svg" alt=""><div>00:30 до 00:00</div></div>
                        </div>
                    </div>  
                </div> -->
            </div>
        </div>
    </div>

    <?php Pjax::end(); ?>

</div>

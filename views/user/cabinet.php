<link rel="stylesheet" type="text/css" href="/css/lk.css">
<?


?>


<div class="main">
        <div class="user_card">
            <div class="user_card_text">
                <div class="user_data">
                    <div class="name"><div><?= $model->name?></div><img src="../templates/edit.svg" alt=""></div>
                    <div class="mail"><?= $model->email ?></div>
                    <div class="phone"><?= $model->number?> </div>
                </div>
                <div class="block_menu">
                    <li><a href="../index/events.html">Предстоящие мероприятия</a></li>
                    <li><a href="/user2/index">Список пользователей</a></li>
                    <li><a href="#">Мои проекты</a></li>
                    <li><a href="#">Компетенции</a></li>
                </div>
            </div>
            <div class="user_photo_back"></div>
            <div class="user_photo" style=" background: url('<?= $model->avatar?>'), #C4C4C4;"></div>
        </div>
        <div id="lk_module" class="future_event">
            <div class="tittle">Предстоящие мероприятия</div>
            <div class="event-div">
                <div class="line">
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
                    </div> -->
                    <div class="event" style="background-image: url(/templates/winner.png);">
                        <div class="dark"></div>
                        <div class="event-text">
                            <div class="title">Победа в хакатоне</div>
                            <div class="date_time-div">
                                <div class="event_date"><img src="../templates/calendar.svg" alt=""><div>13 декабря, воскресенье</div></div>
                                <div class="event_time"><img src="../templates/clock.svg" alt=""><div>15:00 до 17:30</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="lk_module" class="last_event">
            <div class="tittle">Последние активности</div>
            <div class="event-div">
                <div class="line">
                    <div href="../index/event.html" class="event" id="e1">
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
                </div>
            </div>
        </div>
        
        <div id="lk_module" class="my_event">
        <? if (Yii::$app->user->identity->id == $model->id) { ?>
        
        <div class="tittle">Мои мероприятия</div>
            <div class="event-div">
                <div class="line">
                    <a href="/request/create">
                        <div class="create_event">
                            <div>Создать мероприятие</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <? } else { ?>
            <div class="tittle">Мероприятия <?= $model->name?></div>
            <div class="event-div">
                <div class="line">
                    <div href="../index/event.html" class="create_event">
                        <div>Пригласить спикером</div>
                    </div>
                </div>
            </div>
        </div>
        <? } ?>

        <div id="lk_module" class="competence">
            <div class="tittle">Лучшие компетенции</div>
            <div class="competence_list">
                <div class="line">
                    <div id="teamwork" class="competence_card">
                        <div class="icon"><img src="/templates/meeting.svg" alt=""></div>
                        <div class="competence_title"><div>Работа в команде</div></div>
                    </div>
                    <div id="teamwork" class="competence_card">
                        <div class="icon"><img src="/templates/lamp.svg" alt=""></div>
                        <div class="competence_title"><div>Инновационность</div></div>
                    </div>
                    <div id="teamwork" class="competence_card">
                        <div class="icon"><img src="/templates/loupe.svg" alt=""></div>
                        <div class="competence_title"><div>Исследователь</div></div>
                    </div>
                    <div id="teamwork" class="competence_card">
                        <div class="icon"><img src="/templates/lamp.svg" alt=""></div>
                        <div class="competence_title"><div>Инновационность</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
